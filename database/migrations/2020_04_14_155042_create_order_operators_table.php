<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderOperatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_operators', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('order_id')->comment('订单id');
            $table->unsignedInteger('user_id')->comment('用户id');
            $table->boolean('is_creator')->default(false)->comment('是否创建人');
            $table->timestamps();
        });
        \DB::statement("ALTER TABLE `order_operators` comment '订单作业人员表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_operators');
    }
}
