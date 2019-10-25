<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWechatUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wechat_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nick_name')->nullable()->comment('昵称');
            $table->string('name')->nullable()->comment('用户名');
            $table->string('password')->nullable();
            $table->string('mobile')->unique()->nullable()->comment('手机号');
            $table->string('mini_program_open_id')->unique()->nullable()->comment('小程序的openId');
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
        Schema::dropIfExists('wechat_users');
    }
}
