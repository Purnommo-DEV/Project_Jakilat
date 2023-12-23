<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_user', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user')->unsigned();
            $table->text('pendidikan_terakhir');
            $table->text('keahlian');
            $table->text('wilayah');
            $table->text('alamat');
            $table->text('deskripsi_diri');
            $table->string('nomor_hp');
            $table->string('ktp');
            $table->string('berkas_persyaratan');
            $table->string('sertifikat_keterampilan');
            $table->string('rekomendasi');
            $table->string('foto_diri');
            $table->string('status',1);
            $table->string('terima_order',1);
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_user');
    }
}
