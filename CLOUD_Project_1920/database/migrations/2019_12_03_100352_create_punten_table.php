<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePuntenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('punten', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('studentennummer');
            $table->text('vak');
            $table->text('naam');
            $table->text('voornaam');
            $table->double('behaald');
            $table->double('maximum');
            $table->double('gemiddelde');
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
        Schema::dropIfExists('punten');
    }
}
