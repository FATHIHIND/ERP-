<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Ticket', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('auteur');
            $table->string('lieu');
            $table->string('detaille');
            $table->date('date_debut');
            $table->string('titre');
            $table->string('contact');
            $table->string('motif');
            $table->string('etat');
            $table->date('date_fin');
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
        Schema::dropIfExists('Ticket');
    }
}
