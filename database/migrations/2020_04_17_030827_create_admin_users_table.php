<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_users', function (Blueprint $table) {
			$table->id();
			$table->unsignedInteger('user_id')->comment('用户id');
			$table->boolean('is_super_admin')->default(false)->comment('是否超级管理员');
			$table->boolean('enable')->default(true)->comment('启用');
            $table->timestamps();
		});
		\DB::statement("ALTER TABLE `admin_users` comment '后台用户表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_users');
    }
}
