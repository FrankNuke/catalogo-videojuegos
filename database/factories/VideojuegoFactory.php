<?php

namespace Database\Factories;

use App\Models\Videojuego;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Videojuego>
 */
class VideojuegoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
   public function definition(): array
    {
        return [
        'titulo' => $this->faker->words(3, true), 
        'plataforma' => $this->faker->randomElement(['PC', 'PS5', 'Xbox Series X', 'Nintendo Switch']), 
        'anio' => $this->faker->numberBetween(2010, 2026), 
        'descripcion' => $this->faker->paragraph(), 
        'imagen_url' => 'https://via.placeholder.com/150', 
        ];
    }
}
