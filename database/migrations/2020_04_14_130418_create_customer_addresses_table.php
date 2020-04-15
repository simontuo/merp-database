<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('customer_id')->comment('客户id');
            $table->string('name')->comment('名称');
            $table->string('contact', 100)->comment('联系人');
            $table->string('contact_phone', 100)->comment('联系电话');
            $table->string('contact_address', 100)->comment('联系地址');
            $table->timestamps();
        });
        \DB::statement("ALTER TABLE `customer_addresses` comment '客户地址表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_addresses');
    }
}
