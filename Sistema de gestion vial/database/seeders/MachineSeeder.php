<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MachineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('machines')->insert([
            'type'=> 'Maquina agricola',
            'model'=> 'excavadoras',
        ]);
        DB::table('machines')->insert([
            'type'=> 'Maquina constructora',
            'model'=> 'retroexcavadora',
        ]);
    }
}
