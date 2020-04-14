<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
			$table->id();
			$table->string('name', 100)->comment('名称');
			$table->string('mnemonic_code', 100)->comment('助记码');
			$table->string('desc')->nullable()->comment('描述');
			$table->unsignedInteger('tenant_id')->comment('租户id');
            $table->timestamps();
		});
		\DB::statement("ALTER TABLE `departments` comment '部门表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departments');
    }
}
