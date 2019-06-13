<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesDetailesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices_detailes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_header');
            $table->foreign('id_header')->references('id')->on('invoices_headers');
            $table->string('from_adress');
            $table->string('to_adress');
            $table->decimal('partial_coast')->default(0);
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
        Schema::dropIfExists('invoices_detailes');
    }
}
