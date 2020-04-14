<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cost_items', function (Blueprint $table) {
			$table->id();
			$table->string('name', 100)->comment('名称');
			$table->string('mnemonic_code', 100)->comment('助记码');
			$table->string('desc')->nullable()->comment('描述');
            $table->timestamps();
		});
		\DB::statement("ALTER TABLE `cost_items` comment '费用项目表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cost_items');
    }
}
