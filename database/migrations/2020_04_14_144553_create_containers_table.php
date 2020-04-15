<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('containers', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('order_id')->comment('订单id');
            $table->string('container_number')->nullable()->comment('集装箱号码');
            $table->string('seal_number')->nullable()->comment('封条号码');
            $table->string('waybill_number')->nullable()->commen('运单号码');
            $table->timestamps();
        });
        \DB::statement("ALTER TABLE `containers` comment '集装箱表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('containers');
    }
}
