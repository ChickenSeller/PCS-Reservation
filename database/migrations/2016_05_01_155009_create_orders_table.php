<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');//姓名
            $table->string('stu_num');//学号
            $table->string('phone_num');//手机号
            $table->string('location');//外勤地址
            $table->boolean('if_errands');//是否外勤
            $table->string('description');//问题描述
            $table->boolean('if_completed');//是否完成
            $table->boolean('if_allocated');//是否已经指派
            $table->date('appointment_date');//预约日期
            $table->time('start_time');//预约时间段起点
            $table->time('end_time');//预约时间段终点
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
    }
}
