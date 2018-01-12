<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('alamat');
            $table->string('status_kerja');
            $table->string('pendidikan');
            $table->date('tgl_lahir');
            $table->string('agama');
            $table->string('work_experience');
            $table->integer('no_ktp');
            $table->string('jabatan');
            $table->date('wkt_masuk');
            $table->string('jenis_kelamin');
            $table->string('status_menikah');
            $table->integer('gaji_pokok');
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
