<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUurroosterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uurrooster', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('klas');
            $table->text('dag');
            $table->time('beginuur');
            $table->time('einduur');
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
        Schema::dropIfExists('uurrooster');
    }
}
