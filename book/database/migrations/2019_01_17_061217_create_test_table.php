<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // 创建数据表
    public function up()
    {
        Schema::create('test', function (Blueprint $table) {
            $table->increments('id');  //主键ID
            $table->string('name',64); //varchar(64)
            $table->char('password',32); //char(32)
            $table->timestamps();         //添加时间 更加时间 created_at updated_at (列)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    // 删除
    public function down()
    {
        Schema::dropIfExists('test');
    }
}
