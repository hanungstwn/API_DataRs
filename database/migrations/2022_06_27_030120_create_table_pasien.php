<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('no_pasien');
            $table->string('nama');
            $table->string('alamat');
            $table->date('tangal_lahir');
            $table->integer('umur');
            $table->string('status');
            $table->string('diagnosa');
            $table->string('jenis_kelamin');
            $table->string('cluster');
            $table->integer('no_kamar');
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
        Schema::dropIfExists('pasien');
    }
};
