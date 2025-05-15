<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('provinces')->insert([
            'name'=> 'Entre rios',
        ]);
        DB::table('provinces')->insert([
            'name'=> 'Santa fe',
        ]);
        DB::table('provinces')->insert([
            'name'=> 'Cordoba',
        ]);
        DB::table('provinces')->insert([
            'name'=> 'Buenos aires',
        ]);
         DB::table('provinces')->insert([
            'name'=> 'Corrientes',
        ]);
        DB::table('provinces')->insert([
            'name'=> 'Misiones',
        ]);
    }
    
}
