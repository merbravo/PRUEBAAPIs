<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Automigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auto', function(Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->string('descripcion');
            $table->string('modelo');
            $table->string('placa');
            $table->bigInteger('marcaid')->unsigned();
            $table->foreign('marcaid')->references('id')->on('marca')->onDelete('cascade');

            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auto');
    }
}
