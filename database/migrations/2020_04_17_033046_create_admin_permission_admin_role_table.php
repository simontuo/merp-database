<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminPermissionAdminRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_permission_admin_role', function (Blueprint $table) {
			$table->id();
			$table->unsignedInteger('admin_permission_id')->comment('后台权限id');
            $table->unsignedInteger('admin_role_id')->comment('后台角色id');
            $table->timestamps();
		});
		
		\DB::statement("ALTER TABLE `admin_permission_admin_role` comment '后台权限后台角色关联表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_permission_admin_role');
    }
}
