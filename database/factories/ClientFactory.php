<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Provider\Base;

class ClientFactory extends Factory
{

    protected $model = Client::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'company_id' => $this->faker->numberBetween(1,10000),
            'name' => $this->faker->name(),
            'email' => $this->faker->email(),
        ];
    }
}
