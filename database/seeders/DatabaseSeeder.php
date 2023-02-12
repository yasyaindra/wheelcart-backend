<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Transaction;
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
        // \App\Models\User::factory(10)->create();

        User::factory(5)->create();
        Transaction::factory(5)->create();
        Product::create([
            'name' => 'Apple iPhone',
            'slug' => 'apple-iphone',
            'category_id' => rand(1,5),
            'price' => 100.00
        ]);

        Product::create([
            'name' => 'Adidas Originals',
            'slug' => 'adidas-originals',
            'category_id' => rand(1,5),
            'price' => 200.00
        ]);

        Product::create([
            'name' => 'Keurig K-Elite',
            'slug' => 'keurig-k-elite',
            'category_id' => rand(1,5),
            'price' => 300.00
        ]);

        Product::create([
            'name' => 'Nike Air Max',
            'slug' => 'nike-air-max',
            'category_id' => rand(1,5),
            'price' => 150.00
        ]);

        Product::create([
            'name' => 'Fitbit Fitness Tracker',
            'slug' => 'fitbit-fitness-tracker',
            'category_id' => rand(1,5),
            'price' => 199.99
        ]);

        Category::create([
            'name' => 'Fashion',
            'slug' => 'fashion'
        ]);

        Category::create([
            'name' => 'Electronics',
            'slug' => 'electronics'
        ]);

        Category::create([
            'name' => 'Health & Beauty',
            'slug' => 'health-beauty'
        ]);


    }
}
