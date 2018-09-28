<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            Product::create([
                'name' => 'Product #' . $i,
                'description' => $faker->sentence,
                'price' => $faker->randomFloat,
                'image' => $faker->imageUrl,
            ]);
        }
    }
}
