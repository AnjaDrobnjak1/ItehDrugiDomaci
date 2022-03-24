<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NoviNazivBrojTitula extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tenisers', function (Blueprint $table) {
            $table->renameColumn('osvojeni_turniri', 'broj_titula');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tenisers', function (Blueprint $table) {
            $table->renameColumn('broj_titula', 'osvojeni_turniri');
        });
    }
}
