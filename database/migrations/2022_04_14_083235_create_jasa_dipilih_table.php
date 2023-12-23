<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJasaDipilihTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jasa_dipilih', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_proyek_jasa')->unsigned();
            $table->bigInteger('id_user_jasa')->unsigned();
            $table->timestamps();

            $table->foreign('id_proyek_jasa')->references('id')->on('proyek_jasa')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_user_jasa')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jasa_dipilih');
    }
}
