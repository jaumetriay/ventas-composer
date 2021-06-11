<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [ 
            'nombre' => $this->faker->firstName(),
            'apellido' => $this->faker->lastName(), 
            'tel' => $this->faker->phoneNumber(), 
            'nacimiento' => $this->faker->dateTimeBetween($startDate = '-100 years', $endDate = '-25 years', $timezone = null), // password
            'fecha' => $this->faker->dateTimeBetween($startDate = '-50 years', $endDate = 'now', $timezone = null),
            'cantidad'=> $this->faker->numberBetween($min = 0, $max = 10000) 
        ];
    }
}
