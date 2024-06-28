<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'title' => 'Detective Conan',
            'description' => '(名探偵コナン, Meitantei Konan)',
            'image' => '1719575653.jpg',
            'price' => '80000',
            'category' => 'Mystery',
            'quantity' => '20',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
