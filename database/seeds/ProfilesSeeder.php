<?php

use Illuminate\Database\Seeder;
use App\Profiles;
class ProfilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Profiles::create([
            'name' => 'Administrador'
        ]);

        Profiles::create([
            'name' => 'Usuario'
        ]);

        Profiles::create([
            'name' => 'Cliente'
        ]);

    }
}
