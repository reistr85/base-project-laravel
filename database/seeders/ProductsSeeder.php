<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create(
            [
                'category_id' => 9,
                'name' => 'Conjunto de Lingerie com Renda e Laço – Janice',
                'description' => 'Essa peça é um verdadeiro charme, um mimo para seu momento especial e seu guarda-roupa. Com maravilhoso toque de SENSUALIDADE, o Conjunto de Lingerie com Renda e Laço.',
                'price_wholesale' => '29.90',
                'price_retail' => '59.90'
            ],
        );

        Product::create(
            [
                'category_id' => 9,
                'name' => 'Conjunto Strappy Sensual com Aro – Isabel',
                'description' => 'E o tema do momento é CHARME! Cheio de sensualidade, transparência e estilo, o Conjunto Strappy Sensual com Aro – Isabel chegou para te fazer ainda mais sua.',
                'price_wholesale' => '27.90',
                'price_retail' => '62.90'
            ],
        );

        Product::create(
            [
                'category_id' => 9,
                'name' => 'Conjunto com transparência – Natalia',
                'description' => 'O Conjunto com transparência – Natalia é definitivamente lindo. Confeccionamos este modelo pensando em cada mínimo detalhe para garantir o melhor da moda íntima a você.',
                'price_wholesale' => '26.90',
                'price_retail' => '53.90'
            ]
        );
    }
}
