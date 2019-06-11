<?php

use Illuminate\Database\Seeder;

class ProfilesSeeder extends Seeder
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
            'name' => 'Administrador'
        ]);

        profiles::create([
            'id' => 2,
            'name' => 'Usuario'
        ]);

        profiles::create([
            'id' => 3,
            'name' => 'Clientes'
        ]);

    }
}
