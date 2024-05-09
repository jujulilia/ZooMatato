<?php

namespace Database\Seeders;

use App\Models\Animal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 100; $i++) {


            Animal::create([
                'nome' => 'Fido' . $i,
                'idade' => 5,
                'especie' => 'Macaco',
                'ra' => 'RA12345' . $i,
                'peso' => 30.5,
                'altura' => 60,
                'sexo' => 'Macho',
                'dieta' => 'Alimentos seco e carne',
                'habitat' => 'Casa'
            ]);
        }
    } 
    
}
