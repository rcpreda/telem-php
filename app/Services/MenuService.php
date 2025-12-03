<?php

namespace App\Services;

use Spatie\Menu\Laravel\Menu;

class MenuService
{
    /**
     * Build the main dashboard sidebar menu
     */
    public static function buildSidebar()
    {
        $menu = Menu::new()
            ->addClass('menu menu-column menu-rounded menu-sub-indention fw-semibold')
            ->setAttribute('id', 'kt_app_sidebar_menu')
            ->setAttribute('data-kt-menu', 'true')
            ->setAttribute('data-kt-menu-expand', 'true');

        $user = auth()->user();
        $isSuperAdmin = $user->hasRole('super-admin');

        // Dashboard - Always visible for authenticated users
        $menu->html(view('components.menu.item', [
            'url' => route('dashboard'),
            'icon' => 'ki-element-11',
            'paths' => 4,
            'title' => __('menu.dashboard'),
            'active' => request()->routeIs('dashboard'),
        ])->render());

        // ===== CONFIG SECTION =====
        // Super-admin always sees this section, others see it only if they have access
        if ($isSuperAdmin || $user->can('view-users') || $user->can('view-roles') || $user->can('view-permissions')) {
            $menu->html(view('components.menu.heading', [
                'title' => __('menu.config'),
            ])->render());
        }

        // User Management submenu - Super-admin always sees this
        if ($isSuperAdmin || $user->can('view-users')) {
            $menu->html(view('components.menu.submenu', [
                'icon' => 'ki-profile-circle',
                'paths' => 3,
                'title' => __('menu.users_management'),
                'items' => [
                    [
                        'url' => route('users.index'),
                        'title' => __('menu.users'),
                        'active' => request()->routeIs('users.*'),
                    ],
                ],
            ])->render());
        }

        // Settings submenu - Build items based on permissions
        $settingsItems = [];

        // General Settings - Super-admin always sees this
        if ($isSuperAdmin || $user->can('manage-settings')) {
            $settingsItems[] = [
                'url' => route('settings.general'),
                'title' => __('menu.general_settings'),
                'active' => request()->routeIs('settings.general*'),
            ];
        }

        // Roles - Super-admin always sees this
        if ($isSuperAdmin || $user->can('view-roles')) {
            $settingsItems[] = [
                'url' => route('roles.index'),
                'title' => __('menu.roles'),
                'active' => request()->routeIs('roles.*'),
            ];
        }

        // Permissions - Super-admin always sees this
        if ($isSuperAdmin || $user->can('view-permissions')) {
            $settingsItems[] = [
                'url' => route('permissions.index'),
                'title' => __('menu.permissions'),
                'active' => request()->routeIs('permissions.*'),
            ];
        }

        // My Profile - Always visible for authenticated users
        $settingsItems[] = [
            'url' => route('profile.edit'),
            'title' => __('menu.my_profile'),
            'active' => request()->routeIs('profile.edit'),
        ];

        // Only show Settings submenu if there are items
        if (!empty($settingsItems)) {
            $menu->html(view('components.menu.submenu', [
                'icon' => 'ki-setting-2',
                'paths' => 2,
                'title' => __('menu.settings'),
                'items' => $settingsItems,
            ])->render());
        }

        // ===== UTILS SECTION =====
        $menu->html(view('components.menu.heading', [
            'title' => __('menu.utils'),
        ])->render());



        // Document Types
        /*$menu->html(view('components.menu.item', [
            'url' => route('document-types.index'),
            'icon' => 'ki-document',
            'paths' => 2,
            'title' => __('menu.document_types'),
            'active' => request()->routeIs('document-types.*'),
        ])->render());*/





        return $menu;
    }
}
