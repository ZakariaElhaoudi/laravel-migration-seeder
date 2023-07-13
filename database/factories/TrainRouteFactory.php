<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TrainRoute>
 */
class TrainRouteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'azienda' => fake()->company,
            'stazione di partenza' => fake()->city,
            'stazione di arrivo'=> fake()->city,
            'orario di partenza'=> fake()->dateTime(),
            'orario di arrivo'=> fake()->dateTime(),
            'codice treno'=> fake()->unique()->randomNumber(4),
            'numero carrozze'=> fake()->numberBetween(0, 100),
            'in orario'=> fake()->boolean,
            'cancellato'=> fake()->boolean,
            
        ];
    }
}
