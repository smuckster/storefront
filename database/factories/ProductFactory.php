<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\ProductGroup;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'product_group_id' => ProductGroup::factory(),
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'image' => $this->faker->word . ".png",
            'code' => strtoupper($this->faker->word),
            'price' => $this->faker->randomFloat(2, 0, 1000)
        ];
    }

}
