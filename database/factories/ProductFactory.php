<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'desc'=>$this->faker->paragraph(),
            'image'=>$this->faker->imageUrl(640, 480, 'animals', true),
            'price'=>$this->faker->randomDigit(),
            'quantity'=>$this->faker->numberBetween(1,100),
        ];
    }
}
