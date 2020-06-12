<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeSortiePointagesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employe_sortie_pointages', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('employe_id');
            $table->string('jour');
            $table->string('mois');
            $table->string('annes');
            $table->time('heure_sortie');
            $table->time('heure_retour');
            $table->string('numero_carte');
            $table->string('matricule_employe');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('employe_id')->references('id')->on('employes')->onDelete('cascade')->onUpdate('cascade');
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employe_sortie_pointages');
    }
}
