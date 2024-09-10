<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskListController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/taskList/display',[TaskListController::class,'display'])->name('taskListDisplay');