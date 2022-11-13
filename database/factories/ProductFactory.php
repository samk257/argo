<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Product;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'quantity' => $this->faker->randomFloat(2, 0, 999999.99),
            'price' => $this->faker->randomFloat(2, 0, 999999.99),
            'img' => $this->faker->regexify('[A-Za-z0-9]{250}'),
            'details' => $this->faker->text,
        ];
    }
}
