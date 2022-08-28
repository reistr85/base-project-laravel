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

        ProductImage::create(['product_id' => 4, 'url' => 'https://ladeluxe.s3.amazonaws.com/app-mobile/products/4-calcinha_alta_cavada-1-630x740.jpg']);
        ProductImage::create(['product_id' => 4, 'url' => 'https://ladeluxe.s3.amazonaws.com/app-mobile/products/4-calcinha_alta_cavada-5-630x740.jpg']);

        ProductImage::create(['product_id' => 5, 'url' => 'https://ladeluxe.s3.amazonaws.com/app-mobile/products/5-calcinha-com-renda-e-elastico-sport-seraphine-3-630x740.jpg']);
        ProductImage::create(['product_id' => 5, 'url' => 'https://ladeluxe.s3.amazonaws.com/app-mobile/products/5-calcinha-com-renda-e-elastico-sport-seraphine-630x740.jpg']);

        ProductImage::create(['product_id' => 6, 'url' => 'https://ladeluxe.s3.amazonaws.com/app-mobile/products/6-fio_strappy_duplo_com_renda_costas-630x740.jpg']);
        ProductImage::create(['product_id' => 6, 'url' => 'https://ladeluxe.s3.amazonaws.com/app-mobile/products/6-fio_strappy_duplo_com_renda-630x740.jpg']);

        ProductImage::create(['product_id' => 7, 'url' => 'https://ladeluxe.s3.amazonaws.com/app-mobile/products/7-calcinha_toda_em_renda_audrey_costas-630x740.jpg']);
        ProductImage::create(['product_id' => 7, 'url' => 'https://ladeluxe.s3.amazonaws.com/app-mobile/products/7-calcinha_toda_em_renda_audrey-2-1-630x740.jpg']);

        ProductImage::create(['product_id' => 8, 'url' => 'https://ladeluxe.s3.amazonaws.com/app-mobile/products/8-sutian-a-28-630x740.jpg']);
        ProductImage::create(['product_id' => 8, 'url' => 'https://ladeluxe.s3.amazonaws.com/app-mobile/products/8-sutian-b-25-630x740.jpgs']);

        ProductImage::create(['product_id' => 9, 'url' => 'https://ladeluxe.s3.amazonaws.com/app-mobile/products/9-soutien-de-bojo-3-630x740.jpg']);
        ProductImage::create(['product_id' => 9, 'url' => 'https://ladeluxe.s3.amazonaws.com/app-mobile/products/9-soutien-de-bojo-4-630x740.jpg']);
    }
}
