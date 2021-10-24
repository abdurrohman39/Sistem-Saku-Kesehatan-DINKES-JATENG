<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKkiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kki', function (Blueprint $table) {
            $table->increments('id');
            $table->String('no_pegawai');
            $table->String('nama');
            $table->String('jabatan');
            $table->String('jenis_kelamin');
            $table->String('agama');
            $table->String('alamat');
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
        Schema::dropIfExists('kki');
    }
}
