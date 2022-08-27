<?php

namespace Database\Seeders;

use App\Models\ProductSize;
use Illuminate\Database\Seeder;

class ProductSizesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductSize::create(['product_id' => 1, 'size_id' => 1]);
        ProductSize::create(['product_id' => 1, 'size_id' => 2]);
        ProductSize::create(['product_id' => 1, 'size_id' => 3]);

        ProductSize::create(['product_id' => 2, 'size_id' => 2]);
        ProductSize::create(['product_id' => 2, 'size_id' => 3]);
        ProductSize::create(['product_id' => 2, 'size_id' => 4]);

        ProductSize::create(['product_id' => 3, 'size_id' => 3]);
        ProductSize::create(['product_id' => 3, 'size_id' => 4]);
        ProductSize::create(['product_id' => 3, 'size_id' => 5]);
    }
}
