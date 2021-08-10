<?php

namespace Database\Seeders;

use App\Models\eleves;
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
        // \App\Models\User::factory(10)->create();
        $this->call(BatimentsSeeder::class);
        $this->call(FormationsSeeder::class);
        $this->call(TypeformationsSeeder::class);
        eleves::factory()->count(50)->create();
    }
}
