<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
			$table->id();
			$table->string('name', 100)->comment('名称');
			$table->string('mnemonic_code', 100)->comment('助记码');
			$table->string('desc')->nullable()->comment('描述');
            $table->timestamps();
		});
		\DB::statement("ALTER TABLE `goods` comment '货物名称表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('goods');
    }
}
