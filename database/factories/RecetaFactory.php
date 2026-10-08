<?php

namespace Database\Factories;

use App\Models\Receta;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Receta>
 */
class RecetaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'categoria_id' => \App\Models\Categoria::all()->random()->id,
            'user_id' => \App\Models\User::all()->random()->id,
            'titulo' => $this->faker->sentence(),
            'descripcion' => $this->faker->text(),
            'ingredientes' => $this->faker->text(),
            'instrucciones' => $this->faker->text(),
            'imagen' => $this->faker->imageUrl(),
            
        ];
    }
}
