<?php

namespace Database\Factories;

use App\Models\eleves;
use Illuminate\Database\Eloquent\Factories\Factory;

class ElevesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = eleves::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom_eleves'=>$this->faker->lastName(),
            'prenom_eleves'=>$this->faker->firstName(),
            'age'=>$this->faker->randomNumber(2),
            'etat'=>$this->faker->boolean(),
            
        ];
    }
}
