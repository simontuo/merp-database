<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('department_user', function (Blueprint $table) {
			$table->id();
			$table->unsignedInteger('department_id')->comment('部门id');
			$table->unsignedInteger('user_id')->comment('用户id');
            $table->timestamps();
		});
		\DB::statement("ALTER TABLE `department_user` comment '部门用户关联表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('department_user');
    }
}
