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
            $table->unsignedBigInteger('owner');
            $table->date('reservering');
            $table->integer('bedrag');

            $table->foreign('owner')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('reserveringen', function (Blueprint $table) {
            $table->dropForeign('reserveringen_owner_foreign');
        });
        Schema::dropIfExists('reserveringen');
    }
};
