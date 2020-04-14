<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenant_user', function (Blueprint $table) {
			$table->id();
			$table->unsignedInteger('tenant_id')->comment('租户id');
			$table->unsignedInteger('user_id')->comment('用户id');
            $table->timestamps();
		});
		\DB::statement("ALTER TABLE `tenant_user` comment '租户用户关联表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tenant_user');
    }
}
