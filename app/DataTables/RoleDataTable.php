<?php

namespace App\DataTables;

use Illuminate\Http\JsonResponse;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\DataTables;

class RoleDataTable
{
    public const TABLE_ID = 'roles-table';

    public function getDataTable(): JsonResponse
    {
        $query = Role::query()->withCount('permissions', 'users');

        return DataTables::of($query)
            ->filterColumn('name', function ($query, $keyword) {
                $query->where('name', 'like', "%{$keyword}%");
            })
            ->addColumn('name', function (Role $role) {
                return '<div class="d-flex flex-column">'.
                    '<a href="'.route('roles.edit', $role).'" class="text-gray-800 text-hover-primary mb-1 fw-bold">'.e(ucwords(str_replace('-', ' ', $role->name))).'</a>'.
                    '<span class="text-muted fs-7">'.e($role->name).'</span>'.
                '</div>';
            })
            ->addColumn('permissions_count', function (Role $role) {
                if ($role->permissions_count == 0) {
                    return '<span class="badge badge-light-secondary">0 permissions</span>';
                }

                return '<span class="badge badge-light-primary">'.$role->permissions_count.' '.($role->permissions_count == 1 ? 'permission' : 'permissions').'</span>';
            })
            ->addColumn('users_count', function (Role $role) {
                if ($role->users_count == 0) {
                    return '<span class="text-muted">0 users</span>';
                }

                return '<span class="fw-semibold">'.$role->users_count.' '.($role->users_count == 1 ? 'user' : 'users').'</span>';
            })
            ->editColumn('created_at', function (Role $role) {
                return $role->created_at->format('d M Y');
            })
            ->addColumn('actions', function (Role $role) {
                $editUrl = route('roles.edit', $role);
                $deleteUrl = route('roles.destroy', $role);

                $deleteButton = '';
                // Don't allow deleting roles that have users assigned
                if ($role->users_count == 0) {
                    $deleteButton = '<button type="button"
                           class="btn btn-icon btn-light btn-active-light-danger btn-sm"
                           data-bs-toggle="tooltip"
                           title="'.__('Delete Role').'"
                           onclick="confirmDelete(\''.$deleteUrl.'\')">
                            <i class="ki-duotone ki-trash fs-4">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </button>';
                }

                return '
                    <div class="d-flex justify-content-end gap-1">
                        <a href="'.$editUrl.'"
                           class="btn btn-icon btn-light btn-active-light-primary btn-sm"
                           data-bs-toggle="tooltip"
                           title="'.__('Edit Role').'">
                            <i class="ki-duotone ki-notepad-edit fs-4">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </a>
                        '.$deleteButton.'
                    </div>
                ';
            })
            ->rawColumns(['name', 'permissions_count', 'users_count', 'actions'])
            ->make(true);
    }
}
