<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKlubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('klubs', function (Blueprint $table) {
            $table->id();
            $table->string('nazivKluba');
            $table->bigInteger('godinaOsnivanja');
            $table->bigInteger('brojTitula');
            $table->foreignId('grad_id')->constrained('grads');
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
        Schema::dropIfExists('klubs');
    }
}
