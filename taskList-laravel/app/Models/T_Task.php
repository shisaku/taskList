<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class T_Task extends Model
{
    use HasFactory;
    protected $table = 'T_TASK';

    public function getTaskList(){
        return DB::table('T_TASK')
        ->join('M_PROJECT','T_TASK.PROJECT_ID','=','M_PROJECT.PROJECT_ID')
        ->join('T_TASK_DETAIL','T_TASK.TASK_ID','=','T_TASK_DETAIL.TASK_ID')
        ->get();
    }
}
