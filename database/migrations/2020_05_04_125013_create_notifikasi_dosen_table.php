<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotifikasiDosenTable extends Migration
{
    public function up()
    {
        Schema::create('notifikasi_dosen', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->string('link', 255);
            $table->string('dibaca', 10)->default('tidak');
            $table->string('jenis', 100);
            $table->text('deskripsi');

            // foreign key
            $table->bigInteger('id_dosen')->unsigned()->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('notifikasi_dosen');
    }
}
