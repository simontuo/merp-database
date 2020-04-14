<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
			$table->id();
			$table->string('name', 100)->comment('名称');
			$table->string('label', 100)->comment('标签');
			$table->string('desc')->default('')->comment('描述');
            $table->boolean('enable')->default(true)->comment('启用');
            $table->timestamps();
		});
		
		\DB::statement("ALTER TABLE `roles` comment '角色表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
