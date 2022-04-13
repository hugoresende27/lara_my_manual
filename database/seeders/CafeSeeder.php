<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CafeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Cafe::factory(25)->create();
    }
}
