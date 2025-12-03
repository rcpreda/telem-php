<?php

namespace App\DataTables;

use Illuminate\Http\JsonResponse;
use Spatie\Permission\Models\Permission;
use Yajra\DataTables\DataTables;

class PermissionDataTable
{
    public const TABLE_ID = 'permissions-table';

    public function getDataTable(): JsonResponse
    {
        $query = Permission::query()->withCount('roles');

        return DataTables::of($query)
            ->filterColumn('name', function ($query, $keyword) {
                $query->where('name', 'like', "%{$keyword}%");
            })
            ->addColumn('name', function (Permission $permission) {
                return '<div class="d-flex flex-column">'.
                    '<a href="'.route('permissions.edit', $permission).'" class="text-gray-800 text-hover-primary mb-1 fw-bold">'.e(ucwords(str_replace('-', ' ', $permission->name))).'</a>'.
                    '<span class="text-muted fs-7">'.e($permission->name).'</span>'.
                '</div>';
            })
            ->addColumn('roles_count', function (Permission $permission) {
                if ($permission->roles_count == 0) {
                    return '<span class="text-muted">0 roles</span>';
                }

                $rolesList = $permission->roles->pluck('name')->map(function ($name) {
                    return ucwords(str_replace('-', ' ', $name));
                })->take(3)->implode(', ');

                $moreCount = $permission->roles_count - 3;
                $moreText = $moreCount > 0 ? ' +' . $moreCount : '';

                return '<span class="fw-semibold">'.$permission->roles_count.' '.($permission->roles_count == 1 ? 'role' : 'roles').'</span>'.
                    '<br><span class="text-muted fs-7">'.$rolesList.$moreText.'</span>';
            })
            ->editColumn('created_at', function (Permission $permission) {
                return $permission->created_at->format('d M Y');
            })
            ->addColumn('actions', function (Permission $permission) {
                $editUrl = route('permissions.edit', $permission);
                $deleteUrl = route('permissions.destroy', $permission);

                return '
                    <div class="d-flex justify-content-end gap-1">
                        <a href="'.$editUrl.'"
                           class="btn btn-icon btn-light btn-active-light-primary btn-sm"
                           data-bs-toggle="tooltip"
                           title="'.__('Edit Permission').'">
                            <i class="ki-duotone ki-notepad-edit fs-4">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </a>
                        <button type="button"
                           class="btn btn-icon btn-light btn-active-light-danger btn-sm"
                           data-bs-toggle="tooltip"
                           title="'.__('Delete Permission').'"
                           onclick="confirmDelete(\''.$deleteUrl.'\')">
                            <i class="ki-duotone ki-trash fs-4">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </button>
                    </div>
                ';
            })
            ->rawColumns(['name', 'roles_count', 'actions'])
            ->make(true);
    }
}
