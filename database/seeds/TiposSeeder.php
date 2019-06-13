<?php

use Illuminate\Database\Seeder;
use App\Tipos;

class TiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipos::create([
            'name' => 'Principal'
        ]);
        Tipos::create([
            'name' => 'Secundario'
        ]);
        Tipos::create([
            'name' => 'Personal'
        ]);
        Tipos::create([
            'name' => 'Laboral'
        ]);
        Tipos::create([
            'name' => 'Otro'
        ]);
    }
}
