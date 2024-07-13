<?php

use App\Http\Controllers\Backend\AdminsController;
use App\Http\Controllers\Backend\AthleteController;
use App\Http\Controllers\Backend\BackendLoginController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\SettingsController;
use App\Http\Controllers\Backend\SportTypeController;
use App\Http\Controllers\Frontend\PostController as FrontendPostController;
use App\Http\Controllers\Backend\TagController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\PermissionsController;
use App\Http\Controllers\Backend\RolesController;
use App\Http\Controllers\Frontend\HomeController;
use App\Models\Tag;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['splade'])->group(function () {
    Route::get('/', fn() => view('home'))->name('home');
    Route::get('/docs', fn() => view('docs'))->name('docs');

    // Registers routes to support the interactive components...
    Route::spladeWithVueBridge();

    // Registers routes to support password confirmation in Form and Link components...
    Route::spladePasswordConfirmation();

    // Registers routes to support Table Bulk Actions and Exports...
    Route::spladeTable();

    // Registers routes to support async File Uploads with Filepond...
    Route::spladeUploads();

    // Dashboard
    Route::view('backend/login', 'backend.pages.auth.login')
        ->name('backend.login');
    Route::post('backend/logout', [BackendLoginController::class, 'logout'])
        ->name('backend.logout');
    Route::view('reset_password', 'auth/login')
        ->name('backend.reset_password');
    Route::post('admin/login', [BackendLoginController::class, 'login'])
        ->name('backend.auth');
    Route::get('backend/profile/edit', [BackendLoginController::class, 'edit'])
        ->name('profile.edit');
    Route::put('backend/profile/update', [BackendLoginController::class, 'update'])
        ->name('profile.update');

    Route::prefix('backend')->middleware('admin')->group(function () {

        // Dashboard

        Route::get('/', [DashboardController::class, 'backend'])
            ->name('backend.dashboard.backend');

        Route::get('dashboard', [DashboardController::class, 'index'])
            ->name('backend.dashboard');

        // Administrators
        Route::resource('administrators', AdminsController::class)->except('show');

        // Roles
        Route::resource('roles', RolesController::class)->except('show');

        // Permissions
        Route::resource('permissions', PermissionsController::class)->except('show');

    });

    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('/about-us', [HomeController::class, 'about'])->name('home.about');
    Route::post('/saveForm', [HomeController::class, 'saveForm'])->name('home.saveForm');
    Route::get('/cities/{country_id}', [HomeController::class, 'getCities'])->name('home.cities');

});
