<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\hilo>
 */
class HiloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'titulo' => "titulo por defecto",
            // 'contenido' => "contenido random",
            'titulo' => $this->faker->catchPhrase(),
            'contenido' => $this->faker->text(),
        ];
    }
}
