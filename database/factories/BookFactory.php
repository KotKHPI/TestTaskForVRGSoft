<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->city(),
            'description' => $this->faker->text(),
            'image_filename' => $this->faker->word(),
            'published_date' => $this->faker->date()

        ];
    }
}
