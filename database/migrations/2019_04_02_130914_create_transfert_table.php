<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransfertTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transferts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('montant');
            $table->string('code_transfer');
            $table->boolean('status')->default(false);
            $table->datetime('date_recuperation');
            $table->integer('effectue_par');
            $table->integer('modifier_par');
            $table->integer('nni_beneficiaire');

            $table->integer('id_expediteur');
            $table->integer('id_beneficiaire');
            $table->integer('id_ville');
            $table->integer('id_pnt');

            $table->foreign('id_expediteur')->references('id')->on('expediteurs');
            $table->foreign('id_beneficiaire')->references('id')->on('beneficiaires');
            $table->foreign('id_ville')->references('id')->on('villes');
            $table->foreign('id_pnt')->references('id')->on('point_de_transferts');
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
        Schema::dropIfExists('transfert');
    }
}
