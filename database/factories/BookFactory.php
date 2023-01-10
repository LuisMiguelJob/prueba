<?php

namespace Database\Factories;

use App\Models\Autor;
use App\Models\Gender;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->sentence(),
            'fecha_creacion'=>$this->faker->date('Y-m-d', now()),
            'copias'=>$this->faker->numberBetween(0, 1000),
            'precio'=>$this->faker->randomFloat(2, 0, 10000),
            'autor_id'=>Autor::inRandomOrder()->first()->id,
            'gender_id'=>Gender::inRandomOrder()->first()->id
        ];
    }
}
