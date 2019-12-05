<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNaamVoornaamPersoneels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::table('personeels', function (Blueprint $table) {
            $table->text('naam'); // Voegt een VARCHAR toe.
            $table->text('voornaam'); // Voegt een VARCHAR toe.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('personeels', 'naam')) {
          Schema::table('personeels', function (Blueprint $table) {
              $table->dropColumn('naam');
          });
        }
        if (Schema::hasColumn('personeels', 'voornaam')) {
          Schema::table('personeels', function (Blueprint $table) {
              $table->dropColumn('voornaam');
          });
        }
    }
}
