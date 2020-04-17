<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique()->comment('名称');
            $table->string('mnemonic_code', 100)->comment('助记码');
            $table->string('contact', 100)->comment('联系人');
            $table->string('contact_phone', 100)->comment('联系电话');
            $table->string('contact_address', 100)->comment('联系地址');
            $table->unsignedInteger('creator_id')->comment('创建人id');
            $table->boolean('is_audited')->default(false)->comment('是否审核');
            $table->unsignedInteger('auditor')->nullable()->comment('审核人');
            $table->time('audited_at')->nullable()->comment('审核人id');
            $table->boolean('enable')->default(true)->comment('启用');
            $table->timestamps();
        });
        \DB::statement("ALTER TABLE `suppliers` comment '服务商表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suppliers');
    }
}
