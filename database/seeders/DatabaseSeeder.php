<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\House::factory(10)->create();
         \App\Models\Room::factory(10)->create();
         \App\Models\User::factory(10)->create();
         \App\Models\Covid::factory(10)->create();

         $this->call(AuthorSeeder::class);
         $this->call(BookSeeder::class);
         $this->call(CafeSeeder::class);
         $this->call(TaskSeeder::class);
    }
}
