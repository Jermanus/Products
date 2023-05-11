<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Clear existing records (optional)
        Product::truncate();

        $products = [
            [
                'name' => 'Apple iPhone 14',
                'price' => 150000,
                'stripe_id' => 'price_1N69zLSHoynuqxhKBAcB4SMM',
                'description' => '15.40 cm (6.1-inch) Super Retina XDR display.',
            ],
            [
                'name' => 'Allen Solly Slim Fit Shirt',
                'price' => 800,
                'stripe_id' => 'price_1N6A0lSHoynuqxhKX7aD4oBX',
                'description' => 'Care Instructions: Machine Wash.',
            ],
            [
                'name' => 'Campus Crysta Running Shoes',
                'price' => 1000,
                'stripe_id' => 'price_1N6A2GSHoynuqxhK9GN7HLTn',
                'description' => 'Do not use polish or shiner.',
            ],
            [
                'name' => 'Skybags',
                'price' => 3000,
                'stripe_id' => 'price_1N6A3RSHoynuqxhKEu1FzxBK',
                'description' => '2 Compartments, 1 Zip Pocket.',
            ],
            [
                'name' => 'ASUS VivoBook 14 ',
                'price' => 50000,
                'stripe_id' => 'price_1N6A4lSHoynuqxhK1L2Kq8pJ',
                'description' => 'Processor: Intel Pentium Silver N6000, 1.1 GHz Base speed.',
            ]
            // Add more sample products as needed
        ];

        foreach ($products as $productData) {
            Product::create($productData);

        }
    }
}
