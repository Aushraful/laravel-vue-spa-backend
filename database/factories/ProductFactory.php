<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

use File;

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
        $imgDir = public_path('storage\images');
        if(!\File::exists($imgDir)){
            \File::makeDirectory($imgDir);  // Create new directory if not exists!
        }

        $filepath = public_path('storage\images\products');
        if(!\File::exists($filepath)){
            \File::makeDirectory($filepath);  // Create new directory if not exists!
        }

        $image = $this->faker->image($filepath,400,300, null, false);

        return [
            'title'         => $this->faker->word,
            'description'   => $this->faker->paragraph,
            'price'         => $this->faker->numberBetween(100, 1000),
            'image'         => $image,
        ];
    }
}
