<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients_addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('id_client');
            $table->foreign('id_client')->references('id')->on('clients');
            $table->string('street');
            $table->string('number');
            $table->string('floor')->nulleable();            
            $table->string('apartment')->nulleable();
            $table->string('right_street')->nulleable();
            $table->string('left_street')->nulleable();            
            $table->string('observations')->nulleable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients__addresses');
    }
}
