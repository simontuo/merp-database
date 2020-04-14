<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
			$table->string('name')->comment('名称');
			$table->string('phone', 11)->unique()->comment('手机');
			$table->string('email')->unique()->nullable()->comment('邮箱');
            // $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->comment('密码');
            $table->rememberToken();
            $table->timestamps();
		});
		
		\DB::statement("ALTER TABLE `users` comment '用户表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
