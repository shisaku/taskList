<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class initData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $projects = [
        //     [
        //         'PROJECT_ID' => 'PROJ001',
        //         'PROJECT_NM' => 'ウェブサイトリニューアル',
        //         'STATUS' => 1,
        //         'UPDATE_DATE' => Carbon::now(),
        //         'CREATE_DATE' => Carbon::now()->subDays(30),
        //     ]
        //     ];
        //     DB::table('M_PROJECT')->insert($projects);
        //     $tasks = [
        //         [
        //             'TASK_ID' => 'TASK001',
        //             'USER_ID' => 'USER001',
        //             'PROJECT_ID' => 'PROJ001',
        //             'TASK_NM' => '実装',
        //             'UPDATE_DATE' => Carbon::now(),
        //             'CREATE_DATE' => Carbon::now()->subDays(5),
        //         ],
        //         [
        //             'TASK_ID' => 'TASK002',
        //             'USER_ID' => 'USER001',
        //             'PROJECT_ID' => 'PROJ001',
        //             'TASK_NM' => 'テスト実施',
        //             'UPDATE_DATE' => Carbon::now(),
        //             'CREATE_DATE' => Carbon::now()->subDays(4),
        //         ],
        //     ];
        //     DB::table('T_TASK')->insert($tasks);

            $taskDetails = [
                // ワイヤーフレーム作成のサブタスク
                [
                    'TASK_ID' => 'TASK001',
                    'TASK_DETAIL_NO' => 'DETAIL001',
                    'SUB_TASK_NM' => '商品マスタ開発',
                    'DETAIL_TASK_NM' => '検索部実装',
                    'STATUS' => 0,
                    'UPDATE_DATE' => Carbon::now(),
                    'CREATE_DATE' => Carbon::now()->subDays(5),
                ],
                [
                    'TASK_ID' => 'TASK001',
                    'TASK_DETAIL_NO' => 'DETAIL002',
                    'SUB_TASK_NM' => '商品マスタ開発',
                    'DETAIL_TASK_NM' => 'データ部実装',
                    'STATUS' => 0,
                    'UPDATE_DATE' => Carbon::now(),
                    'CREATE_DATE' => Carbon::now()->subDays(5),
                ],
                [
                    'TASK_ID' => 'TASK002',
                    'TASK_DETAIL_NO' => 'DETAIL002',
                    'SUB_TASK_NM' => '商品マスタテスト',
                    'DETAIL_TASK_NM' => '単体テスト',
                    'STATUS' => 0,
                    'UPDATE_DATE' => Carbon::now(),
                    'CREATE_DATE' => Carbon::now()->subDays(4),
                ],
            ];
            DB::table('T_TASK_DETAIL')->insert($taskDetails);
    }
}
