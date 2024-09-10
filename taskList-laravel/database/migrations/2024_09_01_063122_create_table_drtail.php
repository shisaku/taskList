<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::dropIfExists('T_TASK_DETAIL');
        Schema::create('T_TASK_DETAIL', function (Blueprint $table) {
            $table->string('TASK_ID')->notNull()->comment('タスクID');;
            $table->string('TASK_DETAIL_NO')->notNull()->comment('タスク詳細NO');;
            $table->string('SUB_TASK_NM',30)->notNull()->comment('サブタスク名');;
            $table->string('DETAIL_TASK_NM',30)->notNull()->comment('詳細タスク名');;
            $table->integer('STATUS')->length(1)->default(0)->notNull()->comment('ステータス');;
            $table->timestamp('UPDATE_DATE')->nullable()->comment('更新日時');;
            $table->timestamp('CREATE_DATE')->nullable()->comment('作成日時');;
            $table->unique(['TASK_ID', 'TASK_DETAIL_NO']); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_drtail');
    }
};
