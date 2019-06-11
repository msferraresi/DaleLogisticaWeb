<?php

use Illuminate\Database\Seeder;

class ZonesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        zones::create([
            'id' => 1,
            'name' => 'Norte'
        ]);
        zones::create([
            'id' => 2,
            'name' => 'Sur'
        ]);
        zones::create([
            'id' => 3,
            'name' => 'Oeste'
        ]);
    }
}
