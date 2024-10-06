<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskListController;
use App\Http\Controllers\TaskListDetailController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/taskList/display',[TaskListController::class,'display'])->name('taskListDisplay');

Route::post('/taskList/registerTaskList',[TaskListController::class,'registerTaskList'])->name('taskListRegister');

Route::get('/taskListDetail/fetchTaskListDetailNo',[TaskListDetailController::class,'fetchTaskListDetailNo'])->name('fetchTaskListDetailNo');

Route::get('/test1', function () {
    return phpinfo();
});