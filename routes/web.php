<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Auth\LoginController;
use App\Http\Controllers\Backend\Admin\AdminDashboardController;
use App\Http\Controllers\Backend\Staff\StaffDashboardController;



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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
// Route::redirect('/', 'login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


/** Routes with middleware */
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => ['auth', 'is_admin']], function () {

    ## Dashboard
    Route::controller(AdminDashboardController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
    });

    ## Role
    // Route::controller(RoleController::class)->group(function () {
    //     Route::get('/roles', 'index')->name('roles')->middleware(['permission:role-list']);
    //     Route::get('/roles/create', 'create')->name('roles.create')->middleware(['permission:role-create']);
    //     Route::post('/roles/create', 'store')->name('roles.store');
    //     Route::get('/roles/edit/{id}', 'edit')->name('roles.edit')->middleware(['permission:role-edit']);
    //     Route::post('/roles/update/{id}', 'update')->name('roles.update');
    //     Route::get('/roles/destroy/{id}', 'destroy')->name('roles.destroy');
    // });

    ## user
    // Route::controller(UserController::class)->group(function () {
    //     Route::get('/users', 'index')->name('users')->middleware(['permission:user-list']);
    //     Route::get('/users/datatable', 'datatable')->name('users.datatable');
    //     Route::get('/users/create', 'create')->name('users.create')->middleware(['permission:user-create']);
    //     Route::post('/users/create', 'store')->name('users.store');
    //     Route::get('/users/edit/{id}', 'edit')->name('users.edit')->middleware(['permission:user-edit']);
    //     Route::post('/users/update/{id}', 'update')->name('users.update');
    // });


});

/** Routes with middleware */
Route::group(['as' => 'staff.', 'prefix' => 'staff', 'middleware' => ['auth', 'is_staff']], function () {

    ## Dashboard
    Route::controller(StaffDashboardController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
    });

    ## Role
    // Route::controller(RoleController::class)->group(function () {
    //     Route::get('/roles', 'index')->name('roles')->middleware(['permission:role-list']);
    //     Route::get('/roles/create', 'create')->name('roles.create')->middleware(['permission:role-create']);
    //     Route::post('/roles/create', 'store')->name('roles.store');
    //     Route::get('/roles/edit/{id}', 'edit')->name('roles.edit')->middleware(['permission:role-edit']);
    //     Route::post('/roles/update/{id}', 'update')->name('roles.update');
    //     Route::get('/roles/destroy/{id}', 'destroy')->name('roles.destroy');
    // });

    ## user
    // Route::controller(UserController::class)->group(function () {
    //     Route::get('/users', 'index')->name('users')->middleware(['permission:user-list']);
    //     Route::get('/users/datatable', 'datatable')->name('users.datatable');
    //     Route::get('/users/create', 'create')->name('users.create')->middleware(['permission:user-create']);
    //     Route::post('/users/create', 'store')->name('users.store');
    //     Route::get('/users/edit/{id}', 'edit')->name('users.edit')->middleware(['permission:user-edit']);
    //     Route::post('/users/update/{id}', 'update')->name('users.update');
    // });


});