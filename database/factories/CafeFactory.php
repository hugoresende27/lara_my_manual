<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CafeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'address'=>$this->faker->streetName,
            'city'=>$this->faker->city,
            'state'=> $this->faker->state,
            'zip'=> $this->faker->postcode                            ,
            'latitude'=> rand(1,999),
            'longitude'=> rand(1,999),
        ];
    }
}
