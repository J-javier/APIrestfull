<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user'=>fake()->userName(),
            'clave'=>fake()->password(),
            'habilitado'=>fake()->randomElement(['activo','inactivo']),
            'fecha'=>fake()->date(),
            'id_persona'=>fake()->numberBetween(1,10),
            'id_rol'=>fake()->numberBetween(1,3),
            'usuario_creacion'=>fake()->numberBetween(1,10),
            'usuario_modificacion'=>fake()->numberBetween(1,10)
        ];
    }
}
