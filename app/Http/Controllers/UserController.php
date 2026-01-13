<?php

namespace App\Http\Controllers;

use App\DataTables\UserDataTable;
use App\Enums\Role;
use App\Enums\UserStatus;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        return view('users.index', [
            'statuses' => UserStatus::options(),
            'roles' => Role::options(),
        ]);
    }

    public function data(Request $request, UserDataTable $dataTable): JsonResponse
    {
        return $dataTable->getDataTable();
    }

    public function create(): View
    {
        return view('users.create', [
            'roles' => Role::options(),
            'statuses' => UserStatus::values(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'nullable|string|max:32',
            'phone_extension' => 'nullable|integer',
            'password' => 'required|string|min:8',
            'roles' => 'required|array',
            'roles.*' => 'in:' . Role::validationRule(),
            'status' => 'required|in:' . UserStatus::validationRule(),
        ]);

        try {
            DB::beginTransaction();

            $user = User::create([
                'first_name' => $validated['first_name'],
                'last_name' => $validated['last_name'],
                'name' => $validated['first_name'] . ' ' . $validated['last_name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'] ?? null,
                'phone_extension' => $validated['phone_extension'] ?? null,
                'password' => $validated['password'],
                'status' => $validated['status'],
                'email_verified_at' => now(),
            ]);

            // Assign roles
            $user->syncRoles($validated['roles']);

            DB::commit();

            return redirect()->route('users.index')->with('success', 'User created successfully');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->back()
                ->with('error', 'Failed to create user: ' . $e->getMessage())
                ->withInput();
        }
    }

    public function edit(User $user): View
    {
        $userRoles = $user->roles->pluck('name')->toArray();

        return view('users.edit', [
            'user' => $user,
            'userRoles' => $userRoles,
            'roles' => Role::options(),
            'statuses' => UserStatus::values(),
        ]);
    }

    public function update(Request $request, User $user): RedirectResponse
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone' => 'nullable|string|max:32',
            'phone_extension' => 'nullable|integer',
            'password' => 'nullable|string|min:8',
            'roles' => 'required|array',
            'roles.*' => 'in:' . Role::validationRule(),
            'status' => 'required|in:' . UserStatus::validationRule(),
        ]);

        try {
            DB::beginTransaction();

            $updateData = [
                'first_name' => $validated['first_name'],
                'last_name' => $validated['last_name'],
                'name' => $validated['first_name'] . ' ' . $validated['last_name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'] ?? null,
                'phone_extension' => $validated['phone_extension'] ?? null,
                'status' => $validated['status'],
            ];

            // Only update password if provided
            if (!empty($validated['password'])) {
                $updateData['password'] = $validated['password'];
            }

            $user->update($updateData);

            // Sync roles
            $user->syncRoles($validated['roles']);

            DB::commit();

            return redirect()->route('users.index')->with('success', 'User updated successfully');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->back()
                ->with('error', 'Failed to update user: ' . $e->getMessage())
                ->withInput();
        }
    }

    public function destroy(User $user): RedirectResponse
    {
        try {
            $user->delete();

            return redirect()->route('users.index')->with('success', 'User deleted successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete user: ' . $e->getMessage());
        }
    }
}
