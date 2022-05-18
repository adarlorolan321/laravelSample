<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'firstname' => $this->faker->text(5),
            'middlename' => $this->faker->text(5),
            'lastname' => $this->faker->text(5),
            'birthdate' => $this->faker->dateTime(),
            'age' =>$this->faker->numberBetween($min = 18, $max = 60),
            'sex' =>$this->faker->randomElement(['Male', 'Female']),
            'address' =>$this->faker->word(5),
            'employedDate' =>$this->faker->dateTime(),
            'department_id' =>$this->faker->numberBetween($min = 1, $max = 60),
            'position_id' => $this->faker->numberBetween($min = 1, $max = 60),
        ];
    }
}
