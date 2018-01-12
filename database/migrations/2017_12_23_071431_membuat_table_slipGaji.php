<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MembuatTableSlipGaji extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slipgaji', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');            
            $table->integer('nik');
            $table->string('nama');
            $table->string('jabatan');
            $table->double('gaji_pokok');
            $table->double('tunjangan_jabatan')->nullable();
            $table->double('tunjangan_status')->nullable();
            $table->double('tunjangan_konsumsi')->nullable();
            $table->double('tunjangan_transfortasi')->nullable();
            $table->double('total_gaji');  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slipgaji');
    }
}
