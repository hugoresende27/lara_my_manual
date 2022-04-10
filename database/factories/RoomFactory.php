<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'house_id'=>1,
            'name'=>$this->faker->name(),
            'size'=>rand(1,999)

        ];
    }
}
