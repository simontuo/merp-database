<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cost_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('cost_id')->comment('费用id');
            $table->unsignedInteger('container_id')->comment('集装箱id');
            $table->decimal('total_amount', 10, 4)->comment('金额');
            $table->timestamps();
        });
        \DB::statement("ALTER TABLE `cost_details` comment '费用明细表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cost_details');
    }
}
