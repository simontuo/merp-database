<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costs', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('order_id')->comment('订单id');
            $table->string('type')->comment('类型');
            $table->unsignedInteger('object_id')->comment('核算对象id');
            $table->string('object_type')->comment('核算对象类型');
            $table->string('object_name')->comment('核算对象名称');
            $table->unsignedInteger('cost_item_id')->comment('费用项目id');
            $table->string('cost_item_name')->comment('费用项目名称');
            $table->unsignedInteger('amount')->comment('数量');
            $table->decimal('unit_price', 10 ,4)->comment('单价');
            $table->decimal('total_amount', 10, 4)->comment('金额');
            $table->string('desc')->nullable()->comment('描述');
            $table->timestamps();
        });
        \DB::statement("ALTER TABLE `costs` comment '费用表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('costs');
    }
}
