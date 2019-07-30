<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Client', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('adresse');
            $table->string('civilite');
            $table->integer('telephone');
            $table->integer('fax');
            $table->string('couriel');
            $table->string('ville');
            $table->string('image');
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
        Schema::dropIfExists('Client');
    }
}
