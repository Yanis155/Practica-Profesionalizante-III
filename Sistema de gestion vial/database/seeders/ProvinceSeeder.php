<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Province;
class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $provinces= [
            ['name' => 'Buenos Aires'],
            ['name' => 'Catamarca'],
            ['name' => 'Chaco'],
            ['name' => 'Chubut'],
            ['name' => 'Córdoba'],
            ['name' => 'Corrientes'],
            ['name' => 'Entre Ríos'],
            ['name' => 'Formosa'],
            ['name' => 'Jujuy'],
            ['name' => 'La Pampa'],
            ['name' => 'La Rioja'],
            ['name' => 'Mendoza'],
            ['name' => 'Misiones'],
            ['name' => 'Neuquén'],
            ['name' => 'Río Negro'],
            ['name' => 'Salta'],
            ['name' => 'San Juan'],
            ['name' => 'San Luis'],
            ['name' => 'Santa Cruz'],
            ['name' => 'Santa Fe'],
            ['name' => 'Santiago del Estero'],
            ['name' => 'Tierra del Fuego, Antártida e Islas del Atlántico Sur'],
            ['name' => 'Tucumán'],
        ];
            foreach ($provinces as $province) {
                Province::updateOrCreate(
                ['name' => $province['name']],
                $province
            );
        }
    }
    
}
