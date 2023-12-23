<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanHargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_harga', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_proyek_penawaran')->unsigned();
            $table->bigInteger('id_penawar_user')->unsigned();
            $table->string('harga_penawar');
            $table->text('berkas_penawar');
            $table->timestamps();

            $table->foreign('id_penawar_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_proyek_penawaran')->references('id')->on('proyek_penawaran')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengajuan_harga');
    }
}
