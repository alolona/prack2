<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            ["name" => "Orange", "cost" => 50000000, "amount" => 27],
            ["name" => "Banana", "cost" => 120000000, "amount" => 17],
            ["name" => "Bread", "cost" => 70000000, "amount" => 0],
        ];
    
        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
