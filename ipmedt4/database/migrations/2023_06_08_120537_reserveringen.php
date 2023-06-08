<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('reserveringen', function (Blueprint $table){
            $table->id();
            $table->date('reservering');
            $table->float('inkomsten');

            $table->foreign('inkomsten')->references('inkomsten')->on('inkomsten');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('reserveringen');
    }
};
