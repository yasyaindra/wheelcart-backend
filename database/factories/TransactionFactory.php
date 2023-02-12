<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'product_id' => rand(1, 5),
            'total' => fake()->randomNumber(5, true),
            'quantity' => fake()->randomNumber(2, true),
            'first_address' => fake()->streetName(),
            'second_address' => fake()->streetAddress(),
            'city' => fake()->city(),
            'country' => fake()->country(),
            'user_id' => rand(1, 5)
        ];
    }
}
