<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Categoria;
use App\Models\Receta;
use App\Models\Etiqueta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Database\Enloquent\Factories\Factory;
use Iluminate\Database\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
     

        User::factory()->create([
            'name' => 'Carol Aranza Mora Bautista',
            'email' => 's22030144@itsch.edu.mx',
        ]);

        User::factory(29)->create();

        Categoria::factory(10)->create();
        Receta::factory(100)->create();
        Etiqueta::factory(40)->create();

        //Relacion muchos a muchos entre recetas y etiquetas
        $recetas = Receta::all();
        $etiquetas = Etiqueta::all();

        foreach ($recetas as $receta) {
            $receta->etiquetas()->attach($etiquetas->random(rand(2, 4)));    
        } 


    }
}
