<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;
//use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Player>
 */
class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name=$this->faker->unique()->word(20);
        return [
            'firstname'=>$name,
            'lastname'=>$name,
            'document'=>$this->faker->text(250),
            'cellphone'=>$this->faker->randomElement([1,9]),
            'email' => $this->faker->unique()->safeEmail(),
            'number'=>$this->faker->numberBetween(1,20),
            'birthdate'=>$this->faker->date(),
            'team_id'=>Team::all()->random()->id,

        ];
    }
}
