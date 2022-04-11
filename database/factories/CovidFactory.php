<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CovidFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();
        return [
            //
            'report_date'=>$this->faker->dateTime(),
            'cases'=>rand(12,9991)
        ];
    }
}
