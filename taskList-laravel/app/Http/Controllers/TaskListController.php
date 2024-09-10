<?php

namespace App\Http\Controllers;
use App\Models\T_Task;

use Illuminate\Http\Request;

class TaskListController extends Controller
{
    //初期表示
    public function display(){
        $T_Task = new T_Task();
        $taskList = $T_Task->getTaskList();
        
        return view('taskList/taskListDisplay',compact('taskList'));
    }
}
