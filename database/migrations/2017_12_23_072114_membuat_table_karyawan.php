<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MembuatTableKaryawan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('nama');
            $table->integer('nik')->unique();
            $table->string('status_pernikahan');
            $table->string('agama');
            $table->string('jenis_kelamin');
            $table->string('pendidikan');
            $table->date('tgl_lahir');
            $table->text('alamat');
            $table->text('pengalaman_kerja')->nullable();
            $table->string('jabatan');
            $table->date('tahun_masuk');
            $table->double('tunjangan_status')->nullable();
            $table->double('tunjangan_konsumsi')->nullable();
            $table->double('tunjangan_transfortasi')->nullable();
            $table->double('gaji_pokok');            
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
        Schema::dropIfExists('karyawan');
    }
}
