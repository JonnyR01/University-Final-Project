<?php

namespace Database\Factories;

use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Products::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() //faker to place the data into the database for testing
    {
        return [
            'name'=> $this->faker->sentence(3),
            'price'=>$this->faker->randomFloat(2,0,5),
            'type'=>$this->faker->randomElement(["main course","house special","deserts","breakfast"])
        ];
    }
}
