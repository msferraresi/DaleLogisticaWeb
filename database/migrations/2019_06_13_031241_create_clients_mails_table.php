<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsMailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients_mails', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_client');
            $table->foreign('id_client')->references('id')->on('clients');
            $table->unsignedInteger('id_type');
            $table->foreign('id_type')->references('id')->on('types_data');
            $table->string('name_contact')->nulleable();
            $table->string('email');
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
        Schema::dropIfExists('clients__mails');
    }
}
