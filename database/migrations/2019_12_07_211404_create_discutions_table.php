<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discutions', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('emeteur')->unsigned();
            $table->foreign('emeteur')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('recepteur')->unsigned();
            $table->foreign('recepteur')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
           
           
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
        Schema::dropIfExists('discutions');
    }
}
