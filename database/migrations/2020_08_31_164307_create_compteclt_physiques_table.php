<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComptecltPhysiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compteclt_physiques', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_physiques_id')->unsigned();
            $table->foreign('client_physiques_id')->references('id')->on('client_physiques');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('agences_id')->unsigned();
            $table->foreign('agences_id')->references('id')->on('agences');
            $table->integer('type_comptes_id')->unsigned();
            $table->foreign('type_comptes_id')->references('id')->on('type_comptes');
            $table->string('numerocompte');
            $table->string('solde');
            $table->string('clerib');
            $table->string('frais');
            $table->dateTime('date');
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
        Schema::dropIfExists('compteclt_physiques');
    }
}
