<?php

namespace App\Http\Controllers;

use App\DataTables\PermissionDataTable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    public function index(): View
    {
        return view('permissions.index');
    }

    public function data(Request $request, PermissionDataTable $dataTable): JsonResponse
    {
        return $dataTable->getDataTable();
    }

    public function create(): View
    {
        return view('permissions.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:permissions,name',
            'guard_name' => 'nullable|string|max:255',
        ]);

        try {
            Permission::create([
                'name' => $validated['name'],
                'guard_name' => $validated['guard_name'] ?? 'web',
            ]);

            return redirect()->route('permissions.index')
                ->with('success', __('Permission created successfully'));
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', __('Failed to create permission: ') . $e->getMessage())
                ->withInput();
        }
    }

    public function edit(Permission $permission): View
    {
        $roles = Role::all();
        $permissionRoles = $permission->roles->pluck('id')->toArray();

        return view('permissions.edit', [
            'permission' => $permission,
            'roles' => $roles,
            'permissionRoles' => $permissionRoles,
        ]);
    }

    public function update(Request $request, Permission $permission): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:permissions,name,' . $permission->id,
            'guard_name' => 'nullable|string|max:255',
            'roles' => 'nullable|array',
            'roles.*' => 'exists:roles,id',
        ]);

        try {
            DB::beginTransaction();

            $permission->update([
                'name' => $validated['name'],
                'guard_name' => $validated['guard_name'] ?? 'web',
            ]);

            // Sync roles - assign this permission to selected roles
            if (isset($validated['roles'])) {
                $permission->syncRoles($validated['roles']);
            } else {
                $permission->syncRoles([]);
            }

            DB::commit();

            return redirect()->route('permissions.index')
                ->with('success', __('Permission updated successfully'));
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->back()
                ->with('error', __('Failed to update permission: ') . $e->getMessage())
                ->withInput();
        }
    }

    public function destroy(Permission $permission): RedirectResponse
    {
        try {
            // Remove permission from all roles before deleting
            $permission->roles()->detach();

            $permission->delete();

            return redirect()->route('permissions.index')
                ->with('success', __('Permission deleted successfully'));
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', __('Failed to delete permission: ') . $e->getMessage());
        }
    }
}
