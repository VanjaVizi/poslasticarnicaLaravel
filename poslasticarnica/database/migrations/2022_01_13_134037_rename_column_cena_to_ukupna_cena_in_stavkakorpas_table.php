<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameColumnCenaToUkupnaCenaInStavkakorpasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stavka_korpes', function (Blueprint $table) {
            $table->renameColumn('cena','ukupna_cena');
            //$table->double('ukupna_cena')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stavka_korpes', function (Blueprint $table) {
            $table->renameColumn('ukupna_cena','cena');
        });
    }
}
