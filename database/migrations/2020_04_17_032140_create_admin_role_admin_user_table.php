<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminRoleAdminUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_role_admin_user', function (Blueprint $table) {
			$table->id();
			$table->unsignedInteger('admin_role_id')->comment('后台角色id');
            $table->unsignedInteger('admin_user_id')->comment('后台用户id');
            $table->timestamps();
		});
		
		\DB::statement("ALTER TABLE `admin_role_admin_user` comment '后台角色后台用户关联表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_role_admin_user');
    }
}
