<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterventionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Intervention', function (Blueprint $table) {
            $table->Increments('id');
            $table->date('date_debut');
            $table->string('lieu');
            $table->string('intervenent');
            $table->string('titre');
            $table->string('rapport');
            $table->string('etat');
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
        Schema::dropIfExists('Intervention');
    }
}
