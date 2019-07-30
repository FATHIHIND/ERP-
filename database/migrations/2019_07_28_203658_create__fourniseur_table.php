<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFourniseurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Fourniseur', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('adresse');
            $table->double('telephone');
            $table->double('fax');
            $table->string('ville');
            $table->string('couriel');
            $table->boolean('active');
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
        Schema::dropIfExists('Fourniseur');
    }
}
