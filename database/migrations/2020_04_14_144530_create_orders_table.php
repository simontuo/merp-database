<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('no')->unique()->comment('订单号');
            $table->unsignedInteger('customer_id')->comment('客户id');
            $table->string('customer_name')->comment('客户名称');
            $table->string('container_type_name')->comment('集装箱类型名称');
            $table->unsignedInteger('amount')->comment('数量');
            // $table->decimal('total_amount', 10, 4)->comment('总金额');
            $table->timestamps();
        });
        \DB::statement("ALTER TABLE `orders` comment '订单表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
