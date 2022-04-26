<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\city>
 */
class CityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        // return [
        //     "name" => Str::ucfirst($this->faker->unique()->sentence(1, true)),
        //     "nCitizens" => $this->faker->randomDigit(20,500),
        // ];
    }
}
