<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplierSupplierTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier_supplier_type', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('supplier_id')->comment('服务商id');
			$table->unsignedInteger('supplier_type_id')->comment('服务商类型id');
            $table->timestamps();
        });
        \DB::statement("ALTER TABLE `supplier_supplier_type` comment '服务商服务商类型关联表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supplier_supplier_type');
    }
}
