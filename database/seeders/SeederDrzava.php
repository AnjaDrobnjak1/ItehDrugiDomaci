<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Drzava;

class SeederDrzava extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Drzava::factory()->count(50)->create();
    }
}
