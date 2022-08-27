<?php

namespace Database\Seeders;

use App\Models\ProductImage;
use Illuminate\Database\Seeder;

class ProductImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductImage::create(['product_id' => 1, 'url' => 'https://ladeluxe.s3.amazonaws.com/app-mobile/products/1-Conjunto_de_lingerie_com_renda_e_laco_costas-630x740.jpg']);
        ProductImage::create(['product_id' => 1, 'url' => 'https://ladeluxe.s3.amazonaws.com/app-mobile/products/1-Conjunto_de_Lingerie_com_Renda_e_Laco-1-630x740.jpg']);

        ProductImage::create(['product_id' => 2, 'url' => 'https://ladeluxe.s3.amazonaws.com/app-mobile/products/2-Conjunto-Strappy-Sensual-com-Aro-telso-630x740.jpg']);
        ProductImage::create(['product_id' => 2, 'url' => 'https://ladeluxe.s3.amazonaws.com/app-mobile/products/2-Conjunto-Strappy-Sensual-com-Aro-telso-costas-630x740.jpg']);

        ProductImage::create(['product_id' => 3, 'url' => 'https://ladeluxe.s3.amazonaws.com/app-mobile/products/3-Conjunto_com_transparencia-1-630x740.jpg']);
    }
}
