<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_info', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('object_id')->comment('对象id');
            $table->string('object_type')->comment('对象类型');
            $table->string('tax_number')->comment('税号');
            $table->string('address')->comment('单位地址');
            $table->string('phone_number')->comment('电话号码');
            $table->string('bank')->comment('开户银行');
            $table->string('bank_account')->comment('银行账户');
            $table->timestamps();
        });
        \DB::statement("ALTER TABLE `invoice_info` comment '开票信息表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice_info');
    }
}
