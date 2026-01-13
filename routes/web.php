<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// SEO Routes
Route::get('/robots.txt', function () {
    $content = "User-agent: *\n";
    $content .= "Disallow: /admin\n";
    $content .= "Disallow: /dashboard\n";
    $content .= "Disallow: /settings\n";
    $content .= "Disallow: /users\n";
    $content .= "\n";
    $content .= "Sitemap: " . url('/sitemap.xml');

    return response($content)->header('Content-Type', 'text/plain');
});

// Presentation Site Routes
Route::get('/', function () {
    return view('presentation.home');
})->name('home');

Route::get('/about', function () {
    return view('presentation.about');
})->name('about');

Route::get('/services', function () {
    return view('presentation.services');
})->name('services');

Route::get('/case-studies', function () {
    return view('presentation.case-studies');
})->name('case-studies');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])
    ->middleware('throttle:5,1') // 5 attempts per minute
    ->name('contact.send');

Route::get('/privacy-policy', function () {
    return view('presentation.privacy-policy');
})->name('privacy-policy');

Route::get('/cookie-policy', function () {
    return view('presentation.cookie-policy');
})->name('cookie-policy');

Route::get('/terms-of-service', function () {
    return view('presentation.terms-of-service');
})->name('terms-of-service');

// Language Switcher
Route::get('language/{locale}', [LanguageController::class, 'switch'])->name('language.switch');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Settings
    Route::prefix('settings')->group(function () {
        Route::middleware(['permission:manage-settings|role:super-admin'])->group(function () {
            Route::get('general', [SettingsController::class, 'general'])->name('settings.general');
            Route::patch('general', [SettingsController::class, 'updateGeneral'])->name('settings.general.update');

            Route::get('contact', [SettingsController::class, 'contact'])->name('settings.contact');
            Route::patch('contact', [SettingsController::class, 'updateContact'])->name('settings.contact.update');
        });

        // Roles Management
        Route::middleware(['permission:view-roles|role:super-admin'])->group(function () {
            Route::get('roles/data', [RoleController::class, 'data'])->name('roles.data');
            Route::get('roles', [RoleController::class, 'index'])->name('roles.index');
        });

        Route::middleware(['permission:create-roles|role:super-admin'])->group(function () {
            Route::get('roles/create', [RoleController::class, 'create'])->name('roles.create');
            Route::post('roles', [RoleController::class, 'store'])->name('roles.store');
        });

        Route::middleware(['permission:edit-roles|role:super-admin'])->group(function () {
            Route::get('roles/{role}/edit', [RoleController::class, 'edit'])->name('roles.edit');
            Route::put('roles/{role}', [RoleController::class, 'update'])->name('roles.update');
            Route::patch('roles/{role}', [RoleController::class, 'update']);
        });

        Route::middleware(['permission:delete-roles|role:super-admin'])->group(function () {
            Route::delete('roles/{role}', [RoleController::class, 'destroy'])->name('roles.destroy');
        });

        Route::get('roles/{role}', [RoleController::class, 'show'])->name('roles.show')->middleware(['permission:view-roles|role:super-admin']);

        // Permissions Management
        Route::middleware(['permission:view-permissions|role:super-admin'])->group(function () {
            Route::get('permissions/data', [PermissionController::class, 'data'])->name('permissions.data');
            Route::get('permissions', [PermissionController::class, 'index'])->name('permissions.index');
        });

        Route::middleware(['permission:create-permissions|role:super-admin'])->group(function () {
            Route::get('permissions/create', [PermissionController::class, 'create'])->name('permissions.create');
            Route::post('permissions', [PermissionController::class, 'store'])->name('permissions.store');
        });

        Route::middleware(['permission:edit-permissions|role:super-admin'])->group(function () {
            Route::get('permissions/{permission}/edit', [PermissionController::class, 'edit'])->name('permissions.edit');
            Route::put('permissions/{permission}', [PermissionController::class, 'update'])->name('permissions.update');
            Route::patch('permissions/{permission}', [PermissionController::class, 'update']);
        });

        Route::middleware(['permission:delete-permissions|role:super-admin'])->group(function () {
            Route::delete('permissions/{permission}', [PermissionController::class, 'destroy'])->name('permissions.destroy');
        });

        Route::get('permissions/{permission}', [PermissionController::class, 'show'])->name('permissions.show')->middleware(['permission:view-permissions|role:super-admin']);
    });

    // Users Management
    Route::middleware(['permission:view-users|role:super-admin'])->group(function () {
        Route::get('users/data', [UserController::class, 'data'])->name('users.data');
        Route::get('users', [UserController::class, 'index'])->name('users.index');
    });

    Route::middleware(['permission:create-users|role:super-admin'])->group(function () {
        Route::get('users/create', [UserController::class, 'create'])->name('users.create');
        Route::post('users', [UserController::class, 'store'])->name('users.store');
    });

    Route::middleware(['permission:edit-users|role:super-admin'])->group(function () {
        Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
        Route::put('users/{user}', [UserController::class, 'update'])->name('users.update');
        Route::patch('users/{user}', [UserController::class, 'update']);
    });

    Route::middleware(['permission:delete-users|role:super-admin'])->group(function () {
        Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    });

    Route::get('users/{user}', [UserController::class, 'show'])->name('users.show')->middleware(['permission:view-users|role:super-admin']);

    // Cars Management (Fleet)
    // Static routes first (before {car} parameter routes)
    Route::get('cars/data', [CarController::class, 'data'])->name('cars.data')->middleware(['permission:view-cars|role:super-admin']);
    Route::get('cars/create', [CarController::class, 'create'])->name('cars.create')->middleware(['permission:create-cars|role:super-admin']);

    Route::middleware(['permission:view-cars|role:super-admin'])->group(function () {
        Route::get('cars', [CarController::class, 'index'])->name('cars.index');
        Route::get('cars/{car}', [CarController::class, 'show'])->name('cars.show');
        Route::get('cars/{car}/trips', [CarController::class, 'trips'])->name('cars.trips');
        Route::get('cars/{car}/daily-stats', [CarController::class, 'dailyStats'])->name('cars.daily-stats');
    });

    Route::middleware(['permission:create-cars|role:super-admin'])->group(function () {
        Route::post('cars', [CarController::class, 'store'])->name('cars.store');
    });

    Route::middleware(['permission:edit-cars|role:super-admin'])->group(function () {
        Route::get('cars/{car}/edit', [CarController::class, 'edit'])->name('cars.edit');
        Route::put('cars/{car}', [CarController::class, 'update'])->name('cars.update');
        Route::patch('cars/{car}', [CarController::class, 'update']);
    });

    Route::middleware(['permission:delete-cars|role:super-admin'])->group(function () {
        Route::delete('cars/{car}', [CarController::class, 'destroy'])->name('cars.destroy');
    });
});

require __DIR__.'/auth.php';
