<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\EngineerController;

//Route::get('/', function () {
//    return view('authorization.authorization');
//});
Route::get('/', [LoginController::class, 'authorization'])->name('authorization');

Route::post('post-authorization', [LoginController::class, 'postLogin'])->name('authorization.post');

Route::get('registration', [LoginController::class, 'registration'])->name('registration');
Route::post('post-registration', [LoginController::class, 'postRegistration'])->name('registration.post');

Route::middleware('checkUserRole:Админ')->group(function () {
    Route::get('admin/staff-admin', [AdminController::class, 'staff']);
    Route::get('admin/project-admin', [AdminController::class, 'project']);
    Route::get('admin/setting-admin', [AdminController::class, 'setting']);
    Route::post('staff-admin/edit/{user_id}', [AdminController::class, 'editStaff'])->name('edit.staff');
    Route::post('staff-admin/delete/{user_id}', [AdminController::class, 'deleteStaff'])->name('delete.staff');
    Route::post('project-admin/comment/{project_id}', [AdminController::class, 'commentProject'])->name('comment.project');
    Route::post('project-admin/edit/{project_id}', [AdminController::class, 'editProject'])->name('edit.project');
    Route::post('project-admin/add', [AdminController::class, 'addProject'])->name('add.project');
    Route::post('project-admin/delete/{project_id}', [AdminController::class, 'deleteStaff'])->name('delete.staff');
});

Route::middleware('checkUserRole:Менеджер')->group(function () {
    Route::get('manager/staff-manager', [ManagerController::class, 'staff']);
    Route::get('manager/project-manager', [ManagerController::class, 'project']);
    Route::get('manager/setting-manager', [ManagerController::class, 'setting']);
    Route::post('staff-manager/edit/{user_id}', [ManagerController::class, 'editStaff'])->name('edit.staff');
});

Route::middleware('checkUserRole:ИТР')->group(function () {
    Route::get('engineer/staff-engineer', [EngineerController::class, 'staff']);
    Route::get('engineer/project-engineer', [EngineerController::class, 'project']);
    Route::get('engineer/setting-engineer', [EngineerController::class, 'setting']);
});

Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::view('/authorization', 'staff')->middleware('auth')->name('staff');



