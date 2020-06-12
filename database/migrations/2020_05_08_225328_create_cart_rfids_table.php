<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCartRfidsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_rfids', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('employe_id');
            $table->boolean('is_valid');
            $table->string('matricule');
            $table->string('numero_carte')->unique();
            $table->string('identifiant_carte')->unique();
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
        Schema::drop('cart_rfids');
    }
}
