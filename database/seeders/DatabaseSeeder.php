<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\DevSeeder;

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
        // Dev helpers: seed a few products and suppliers so forms have data
        $this->call(DevSeeder::class);
    }
}
