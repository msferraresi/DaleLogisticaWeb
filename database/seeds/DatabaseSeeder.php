<?php

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
        $this->call(ProfilesSeeder::class);
        $this->call(ZonesSeeder::class);
        $this->call(LocalitiesSeeder::class);
    }
}
