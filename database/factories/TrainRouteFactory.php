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
            'azienda' => faker->company,
            'stazione di partenza' => faker->city,
            'stazione di arrivo'=> faker->city,
            'orario di partenza'=> faker->unixTime(),
            'orario di arrivo'=> faker->unixTime(),
            'codice treno'=> faker->unique()->randomNumber(4),
            'numero carrozze'=> faker->numberBetween(0, 100),
            'in orario'=> faker->boolean,
            'cancellato'=> faker->boolean,
            
        ];
    }
}
