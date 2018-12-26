<?php

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

Route::group(['prefix' => 'manager', 'namespace' => 'Admin', 'as' => 'admin.', 'middleware' => ['auth', 'permission:access-admin']], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');

    Route::post('/logout', 'DashboardController@logout')->name('dashboard.logout');
    
    Route::resource('permissions', 'PermissionController');
    
    Route::resource('roles', 'RoleController');
    
    Route::resource('users', 'UserController');
    Route::get('/users/delete/image', 'UserController@deleteImage')->name('users.delete.image');

    Route::resource('projects', 'ProjectController');
    Route::resource('tasks', 'TaskController');
    
    Route::get('/passport', 'PassportTokenController@index')->name('passport');
});
