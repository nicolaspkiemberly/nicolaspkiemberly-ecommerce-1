<?php

namespace Database\Factories;

use App\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
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
        $faker = Faker::create();
        return [
            'name' => $faker->firstNameMale,
            'category_id' => $faker->numberBetween(1, 5),
            'price' => $faker->numberBetween(100000, 1000000),
            'desc' => $faker->paragraph($nbSentences = 1, $variableNbSentences = true),
            'image' => '/images/product.jpg'

        ];
    }
}
