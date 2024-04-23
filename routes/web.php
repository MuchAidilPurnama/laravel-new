<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\AdminTaskController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

Route::get('/', [AuthController::class, 'index']);

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

    Route::middleware('auth')->group(function () {
        Route::get('dashboard', function() {
            return view ('dashboard');
        })->name('dashboard');
        Route::get('admin', function() {
            return view ('admin');
        })->name('admin');


    Route::controller(TaskController::class)->prefix('users')->group (function() {
        Route::get('tasks', 'index')->name('users.tasks');
        Route::get('tasks/create', 'create')->name('users.tasks.create');
        Route::post('tasks/store', 'store')->name('users.tasks.store');
        Route::get('tasks/show/{id}', 'show')->name('users.tasks.show');
        Route::get('tasks/edit/{id}', 'edit')->name('users.tasks.edit');
        Route::put('tasks/edit/{id}', 'update')->name('users.tasks.update');
        Route::delete('tasks/destroy/{id}', 'destroy')->name('users.tasks.destroy');
        Route::post('tasks/{id}/complete', 'completed')->name('users.tasks.complete');
        Route::get('tasks/taskshow', 'showCompleted')->name('users.taskshow');
    });

    Route::controller(AdminTaskController::class)->prefix('admin')->group (function() {
        Route::get('tasks', 'index')->name('admin.tasks');
        Route::get('tasks/create', 'create')->name('admin.tasks.create');
        Route::post('tasks/store', 'store')->name('admin.tasks.store');
        Route::get('tasks/show/{id}', 'show')->name('admin.tasks.show');
        Route::get('tasks/edit/{id}', 'edit')->name('admin.tasks.edit');
        Route::put('tasks/edit/{id}', 'update')->name('admin.tasks.update');
        Route::delete('tasks/destroy/{id}', 'destroy')->name('admin.tasks.destroy');
        Route::post('tasks/tasks/{id}/complete', 'completed')->name('admin.tasks.complete');
        Route::get('tasks/taskshow', 'showCompleted')->name('admin.taskshow');
    });


    Route::controller(ProjectController::class)->prefix('project')->group (function() {
        Route::get('', 'index')->name('project');
        Route::get('project/{id}','project')->name('project.show');
    });

    Route::controller(UserController::class)->prefix('users')->group (function() {
    Route::get('', 'index')->name('users');
    Route::get('create', 'create')->name('users.create');
    Route::post('store', 'store')->name('user.0s.store');
    Route::get('edit/{id}', 'edit')->name('users.edit');
    Route::put('edit/{id}', 'update')->name('users.update');
    Route::delete('destroy/{id}', 'destroy')->name('users.destroy');
    });

    Route::controller(ProfileController::class)->prefix('profile')->group (function() {
        Route::get('','profile')->name('profile');
        Route::post('profile/update', 'updateProfile')->name('profile.update');
    });
    

});