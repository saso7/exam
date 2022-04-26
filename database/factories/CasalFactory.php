<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\city;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\casal>
 */
class CasalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // $cities = city::all();
        // $city = $cities->random();
        // $city_id = $city->id;
        // return [
        //     'name' => Str::ucfirst($this->faker->unique()->sentence(2, true)),
        //     'initDate' => '06/2022/01',
        //     'endDate'=> '09/2022/01',
        //     'places' => $this->faker->randomDigit(10,200),
        //     'id_city' => $this->faker->randomDigit(1,3),
        // ];
    }
}
