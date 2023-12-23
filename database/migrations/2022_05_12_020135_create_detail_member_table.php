<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_member', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user')->unsigned();
            $table->text('pendidikan_terakhir');
            $table->text('keahlian');
            $table->string('harga_jasa');
            $table->bigInteger('wilayah_id')->unsigned();
            $table->text('alamat');
            $table->text('deskripsi_diri');
            $table->string('nomor_hp');
            $table->string('ktp');
            $table->string('berkas_persyaratan');
            $table->string('sertifikat_keterampilan');
            $table->string('rekomendasi');
            $table->string('foto_diri');
            $table->string('status',1);
            $table->string('siap_terima_order',1)->default(1);
            $table->string('telah_terima_orderan',1)->default(0);
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('wilayah_id')->references('id')->on('regencies')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_member');
    }
}
