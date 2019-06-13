<?php

use Illuminate\Database\Seeder;
use App\Types_Data;

class TypesDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Types_Data::create([
            'name' => 'Principal'
        ]);
        Types_Data::create([
            'name' => 'Secundario'
        ]);
        Types_Data::create([
            'name' => 'Personal'
        ]);
        Types_Data::create([
            'name' => 'Laboral'
        ]);
        Types_Data::create([
            'name' => 'Otros'
        ]);
    }
}
