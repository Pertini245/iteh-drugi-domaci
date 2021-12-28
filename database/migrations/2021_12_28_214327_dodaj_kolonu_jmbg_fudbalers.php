<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DodajKolonuJmbgFudbalers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fudbalers', function (Blueprint $table) {
            $table->after('prezime', function ($table) {
                $table->string('jmbg')->unique();
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fudbalers', function (Blueprint $table) {
            $table->dropColumn('jmbg');
        });
    }
}
