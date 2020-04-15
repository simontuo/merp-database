<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('seller_invoice_info_id')->comment('销售方发票信息id');
            $table->unsignedInteger('buyer_invoice_info_id')->comment('购买方发票信息id');
            $table->unsignedInteger('amount')->comment('数量');
            $table->decimal('total_amount', 10, 4)->comment('开票金额');
            $table->unsignedInteger('tax_rate')->comment('税率');
            $table->decimal('tax_total_amount', 10, 4)->comment('税金');
            $table->unsignedInteger('creator_id')->comment('创建人id');
            $table->string('status')->default('ongoing')->comment('状态');
            $table->timestamps();
        });
        \DB::statement("ALTER TABLE `invoices` comment '发票表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
