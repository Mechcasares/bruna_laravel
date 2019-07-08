<?php

use App\Product;
use App\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $categories = factory(Category::class)->times(10)->create();
        $products = factory(Product::class)->times(10)->create([
            'category_id' => $categories->random()->id
        ]);
    }
}
