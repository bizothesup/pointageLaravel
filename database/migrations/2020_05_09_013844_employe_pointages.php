<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EmployePointages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employe_pointages', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('employe_id');
            $table->string('date-service');
            $table->string('num_carte');
            $table->string('matricule_employe');
            $table->string('mois');
            $table->string('annees');
            $table->time('heure_debut_service');
            $table->time('heure_fin_service');
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
        Schema::drop('employe_pointages');
    }
}
