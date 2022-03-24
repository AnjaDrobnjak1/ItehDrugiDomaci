<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SpoljniKljucTreners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('treners', function (Blueprint $table) {
            $table->after('drzava_id', function ($table) {
                $table->foreignId('teniser_id')->constrained('tenisers');
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
        Schema::table('treners', function (Blueprint $table) {
            //
        });
    }
}
