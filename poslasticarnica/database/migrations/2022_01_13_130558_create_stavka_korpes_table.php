<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStavkaKorpesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stavka_korpes', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('korpa_id');
            $table->unsignedInteger('proizvod_id');
            $table->foreign('korpa_id')->references('id')->on('korpas')->onDelete('cascade');
            $table->foreign('proizvod_id')->references('id')->on('proizvods')->onDelete('cascade');
            $table->double('cena');
            $table->int('kolicina');
          
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
        Schema::dropIfExists('stavka_korpes');
    }
}
