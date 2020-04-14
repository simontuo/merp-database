<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContainerTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('container_types', function (Blueprint $table) {
			$table->id();
			$table->string('name', 100)->comment('名称');
			$table->string('mnemonic_code', 100)->comment('助记码');
			$table->unsignedInteger('size')->comment('尺寸');
			$table->string('desc')->nullable()->comment('描述');
            $table->timestamps();
		});
		\DB::statement("ALTER TABLE `container_types` comment '集装箱类型表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('container_types');
    }
}
