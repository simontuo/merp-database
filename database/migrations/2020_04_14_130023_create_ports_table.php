<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ports', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->comment('名称');
			$table->string('mnemonic_code', 100)->comment('助记码');
			$table->string('desc')->nullable()->comment('描述');
            $table->timestamps();
        });
        \DB::statement("ALTER TABLE `ports` comment '港口表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ports');
    }
}
