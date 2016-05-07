<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');//成员姓名
            $table->integer('duty_day');//值班日，1-7
            $table->string('free_time');//空闲时间，为json化的拥有7个成员的数组
            /*
             * free_time字段编码方法
             * 用整型数组表示
             * 下标0中的值表示是否有至少一段空闲时间，0为否，1为是
             * 下标从1到7分别对应一周的安排，其中的值如下定义
             * 0代表没有空
             * 1代表上午有空
             * 2代表下午有空
             * 如全天有空则把上下午值相加，即为3
             */
            $table->string('residence');//成员寝室
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
        Schema::drop('staffs');
    }
}
