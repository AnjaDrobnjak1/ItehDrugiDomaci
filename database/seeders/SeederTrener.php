<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Trener;

class SeederTrener extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trener::factory()->count(100)->create();
    }
}
