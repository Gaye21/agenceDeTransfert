<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpediteurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expediteurs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->string('prenom');
            $table->integer('tel');
            $table->integer('nni')->unique();
            $table->string('email')->default('');
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
        Schema::dropIfExists('expediteur');
    }
}
