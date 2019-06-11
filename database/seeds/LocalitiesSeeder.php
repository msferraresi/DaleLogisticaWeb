<?php

use Illuminate\Database\Seeder;

class LocalitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        profiles::create([
            'id' => 1,
            'id_zone' => 1,
            'name' => 'X',
            'distance' => 1,
        ]);
    }
}
