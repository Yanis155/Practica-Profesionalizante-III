<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('works')->insert([
            'name'=> 'Ruta 40, Tramo 1" (Salta)',
            'start_date'=> '2024-04-15',
            'end_date'=> '2024-05-15',
            'province_id'=> '1',
        ]);
         DB::table('works')->insert([
            'name'=> 'Autopista Córdoba" (Córdoba',
            'start_date'=> '2024-03-21',
            'end_date'=> '2024-05-15',
            'province_id' => '2',
        ]);
    }
}
