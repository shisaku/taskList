<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class T_Task_Detail extends Model
{
    use HasFactory;
    protected $table = 'T_TASK_DETAIL';

    //T_TASK_DETAILの最大TASK_DETAIL_NOを返す
    public function fetchTaskListDetailNo(){
            // $maxTaskDetailNo = DB::table('T_TASK_DETAIL')
            // ->where('TASK_DETAIL_NO','LIKE','D%')
            // ->max('TASK_DETAIL_NO');
            // return $maxTaskDetailNo;
    }
}
