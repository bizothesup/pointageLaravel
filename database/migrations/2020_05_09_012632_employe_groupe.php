<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EmployeGroupe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employe_groupe', function (Blueprint $table) {
            $table->unsignedInteger('employe_id');
            $table->unsignedInteger('groupe_id');

            $table->foreign('employe_id')
                ->references('id')
                ->on('employes')
                ->onDelete('cascade');

            $table->foreign('groupe_id')
                ->references('id')
                ->on('groupes')
                ->onDelete('cascade');

            $table->primary(['employe_id', 'groupe_id']);

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
        //
    }
}
