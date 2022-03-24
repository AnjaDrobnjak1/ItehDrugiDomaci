<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\SeederDrzava;
use Database\Seeders\SeederTrener;
use Database\Seeders\SeederTeniser;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $drs = new SeederDrzava();
        $trs = new SeederTrener();
        $tes = new SeederTeniser();

        $drs->run();
        $trs->run();
        $tes->run();
    }
}
