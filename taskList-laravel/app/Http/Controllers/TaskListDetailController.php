<?php

namespace App\Http\Controllers;

use App\Models\T_Task_Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TaskListDetailController extends Controller
{
    //最大のTASK_DETAIL_IDを取得
    public function fetchTaskListDetailNo(){
            $T_Task_Detail = new T_Task_Detail();
            $currentMaxTaskDetailNo = $this->taskDetailNoPlusOne($T_Task_Detail->fetchTaskListDetailNo());
            dd($currentMaxTaskDetailNo);
            return $currentMaxTaskDetailNo;
    }

    //TASK_DETAIL_IDを+1する
    public function taskDetailNoPlusOne($currentMaxTaskDetailNo){
        $number = intval(substr($currentMaxTaskDetailNo, 1));
        $number++;
        $newNumber = str_pad($number, 5, '0', STR_PAD_LEFT);
        return 'D' . $newNumber;
    }
}
