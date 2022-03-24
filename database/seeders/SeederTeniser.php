<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Teniser;

class SeederTeniser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Teniser::factory()->count(80)->create();
    }
}
