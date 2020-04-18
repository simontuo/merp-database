<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenants', function (Blueprint $table) {
			$table->id();
			$table->string('name')->unique()->comment('名称');
			$table->string('mnemonic_code')->comment('助记码');
			$table->string('contact')->comment('联系人');
			$table->string('contact_phone')->comment('联系电话');
			$table->string('contact_address')->comment('联系地址');
			$table->unsignedInteger('size')->comment('规模');
			$table->unsignedInteger('creator_id')->comment('创建人id');
			$table->date('contract_start_at')->nullable()->comment('合约开始日期');
			$table->date('contract_end_at')->nullable()->comment('合约结束日期');
			$table->boolean('enable')->default(false)->comment('启用');
            $table->timestamps();
		});
		\DB::statement("ALTER TABLE `tenants` comment '租户表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tenants');
    }
}
