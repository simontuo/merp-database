<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_permissions', function (Blueprint $table) {
			$table->id();
			$table->string('name', 100)->unique()->comment('名称');
            $table->string('label', 100)->unique()->comment('标签');
            $table->string('des')->nullable()->comment('描述');
            $table->timestamps();
		});
		
		\DB::statement("ALTER TABLE `admin_permissions` comment '后台权限表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_permissions');
    }
}
