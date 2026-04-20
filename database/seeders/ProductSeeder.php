<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            ['name' => 'iPhone 15 Pro Max', 'details' => 'Apple flagship smartphone', 'price' => 20499000, 'stock' => 45, 'category_id' => 1, 'image_path' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Samsung Galaxy S24 Ultra', 'details' => 'Premium Android phone', 'price' => 18799000, 'stock' => 40, 'category_id' => 1, 'image_path' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MacBook Pro M3', 'details' => 'Apple laptop M3 chip', 'price' => 33999000, 'stock' => 20, 'category_id' => 1, 'image_path' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sony WH-1000XM5', 'details' => 'Noise cancelling headphones', 'price' => 5999000, 'stock' => 55, 'category_id' => 1, 'image_path' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Uniqlo Oversized T-Shirt', 'details' => 'Comfortable cotton t-shirt', 'price' => 199000, 'stock' => 120, 'category_id' => 2, 'image_path' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Nike Tech Fleece Hoodie', 'details' => 'Lightweight athletic hoodie', 'price' => 2199000, 'stock' => 0, 'category_id' => 2, 'image_path' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Levi's 501 Original Jeans", 'details' => 'Classic straight fit denim', 'price' => 1199000, 'stock' => 80, 'category_id' => 2, 'image_path' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Atomic Habits', 'details' => 'Bestselling self-improvement book', 'price' => 299000, 'stock' => 150, 'category_id' => 3, 'image_path' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'The Psychology of Money', 'details' => 'Timeless lessons on wealth', 'price' => 249000, 'stock' => 130, 'category_id' => 3, 'image_path' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Laravel 11 From Scratch', 'details' => 'Guide to Laravel applications', 'price' => 399000, 'stock' => 70, 'category_id' => 3, 'image_path' => null, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}