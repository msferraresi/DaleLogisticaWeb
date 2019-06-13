<?php

use Illuminate\Database\Seeder;
use App\Zones;

class ZonesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Zones::create([
            'name' => 'Norte'
        ]);
        Zones::create([
            'name' => 'Oeste'
        ]);
        Zones::create([
            'name' => 'Sur'
        ]);
    }
}
