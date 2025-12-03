<?php

namespace App\DataTables;

use App\Enums\Role;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Yajra\DataTables\DataTables;

class UserDataTable
{
    public const TABLE_ID = 'users-table';

    public function getDataTable(): JsonResponse
    {
        $query = User::query()->with('roles');

        return DataTables::of($query)
            ->filter(function ($query) {
                // Status filter
                if (request()->has('status') && request('status') != '') {
                    $query->where('status', request('status'));
                }

                // Role filter - adapted for our enum-based system
                if (request()->has('role') && request('role') != '') {
                    $query->whereHas('roles', function ($q) {
                        $q->where('name', request('role'));
                    });
                }
            }, true)
            ->filterColumn('name', function ($query, $keyword) {
                $query->where(function ($q) use ($keyword) {
                    $q->where('first_name', 'like', "%{$keyword}%")
                        ->orWhere('last_name', 'like', "%{$keyword}%")
                        ->orWhere('email', 'like', "%{$keyword}%")
                        ->orWhereRaw("CONCAT(first_name, ' ', last_name) like ?", ["%{$keyword}%"]);
                });
            })
            ->addColumn('name', function (User $user) {
                $name = $user->name ?? $user->first_name.' '.$user->last_name;
                $initial = strtoupper(substr($name, 0, 1));

                $avatarHtml = '<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                    <div class="symbol-label bg-light-primary text-primary fw-bold">'.$initial.'</div>
                </div>';

                $isSelf = $user->id == auth()->id() ? ' <span class="badge badge-light-info">You</span>' : '';

                return '<div class="d-flex align-items-center">'.
                    $avatarHtml.
                    '<div class="d-flex flex-column">'.
                        '<a href="'.route('users.edit', $user).'" class="text-gray-800 text-hover-primary mb-1">'.e($name).'</a>'.
                        '<span class="text-muted">'.e($user->email).'</span>'.
                    '</div>'.
                    $isSelf.
                '</div>';
            })
            ->addColumn('role', function (User $user) {
                if ($user->roles->isEmpty()) {
                    return '<span class="badge badge-light-secondary">No Role</span>';
                }

                $badgeColors = [
                    Role::SUPER_ADMIN->value => 'danger',
                    Role::AGENT->value => 'info',
                ];

                $badges = [];
                foreach ($user->roles as $role) {
                    $color = $badgeColors[$role->name] ?? 'secondary';
                    $badges[] = '<span class="badge badge-light-'.$color.' me-1">'.ucwords(str_replace('-', ' ', $role->name)).'</span>';
                }

                return implode('', $badges);
            })
            ->addColumn('status', function (User $user) {
                $status = $user->status ?? 'inactive';
                $color = $status === 'active' ? 'success' : 'danger';

                return '<span class="badge badge-light-'.$color.'">'.ucfirst($status).'</span>';
            })
            ->orderColumn('status', function ($query, $order) {
                $query->orderBy('status', $order);
            })
            ->editColumn('created_at', function (User $user) {
                return $user->created_at->format('d M Y');
            })
            ->addColumn('actions', function (User $user) {
                $editUrl = route('users.edit', $user);

                return '
                    <div class="d-flex justify-content-end gap-1">
                        <a href="'.$editUrl.'"
                           class="btn btn-icon btn-light btn-active-light-primary btn-sm"
                           data-bs-toggle="tooltip"
                           title="Edit User">
                            <i class="ki-duotone ki-notepad-edit fs-4">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </a>
                    </div>
                ';
            })
            ->rawColumns(['name', 'role', 'status', 'actions'])
            ->make(true);
    }
}
