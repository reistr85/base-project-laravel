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
        //Conjuntos
        Product::create(
            [
                'category_id' => 9,
                'name' => 'Conjunto de Lingerie com Renda e Laço – Janice',
                'description' => 'Essa peça é um verdadeiro charme, um mimo para seu momento especial e seu guarda-roupa. Com maravilhoso toque de SENSUALIDADE, o Conjunto de Lingerie com Renda e Laço.',
                'ref' => 'REF001',
                'price_wholesale' => '29.90',
                'price_retail' => '59.90'
            ],
        );

        Product::create(
            [
                'category_id' => 9,
                'name' => 'Conjunto Strappy Sensual com Aro – Isabel',
                'description' => 'E o tema do momento é CHARME! Cheio de sensualidade, transparência e estilo, o Conjunto Strappy Sensual com Aro – Isabel chegou para te fazer ainda mais sua.',
                'ref' => 'REF002',
                'price_wholesale' => '27.90',
                'price_retail' => '62.90'
            ],
        );

        Product::create(
            [
                'category_id' => 9,
                'name' => 'Conjunto com transparência – Natalia',
                'description' => 'O Conjunto com transparência – Natalia é definitivamente lindo. Confeccionamos este modelo pensando em cada mínimo detalhe para garantir o melhor da moda íntima a você.',
                'ref' => 'REF002',
                'price_wholesale' => '26.90',
                'price_retail' => '53.90'
            ]
        );

        //Sutians
        Product::create(
            [
                'category_id' => 4,
                'name' => 'Soutien Plus Size Amamentação – Mônica',
                'description' => 'Esse momento ESPECIAL merece um peça ESPECIAL, né? Pensando em todo o carinho e atenção que existe no momento da amamentação, a Click Sophia criou o Soutien Plus Size Amamentação – Mônica.',
                'ref' => 'REF003',
                'price_wholesale' => '31.90',
                'price_retail' => '65.90'
            ]
        );

        Product::create(
            [
                'category_id' => 4,
                'name' => 'Soutien de bojo – Helida',
                'description' => 'O Soutien de bojo – Helida foi confeccionado para garantir a você ainda mais charme e muito conforto. Afinal, nós sempre confeccionamos o melhor da moda íntima para você.',
                'ref' => 'REF004',
                'price_wholesale' => '21.90',
                'price_retail' => '45.90'
            ]
        );

        Product::create(
            [
                'category_id' => 4,
                'name' => 'Soutien Reforçado – Dani',
                'description' => 'O Soutien Reforçado – Dani, além de proporcionar conforto, vai garantir a você ainda mais charme. E para esta peça ficar ainda mais perfeita, nós a confeccionamos.',
                'ref' => 'REF005',
                'price_wholesale' => '31.90',
                'price_retail' => '55.90'
            ]
        );

        //Calcinhas
        Product::create(
            [
                'category_id' => 6,
                'name' => 'Calcinha Alta Cavada – Cirleia',
                'description' => 'Essa é perfeita para quem não abre mão do CONFORTO no seu dia-a-dia! Aliás, vocês sabem que seu bem-estar é nossa maior prioridade, não é? E com esse mesmo foco de sempre.',
                'ref' => 'REF005',
                'price_wholesale' => '21.90',
                'price_retail' => '55.90'
            ]
        );

        Product::create(
            [
                'category_id' => 6,
                'name' => 'Calcinha com renda e elástico sport – Seraphine',
                'description' => 'A união perfeita de charme e conforto você só encontra aqui na Click Sophia comprando a Calcinha com renda e elástico sport – Seraphine. Confeccionamos este modelo com um design inovador.',
                'ref' => 'REF006',
                'price_wholesale' => '31.90',
                'price_retail' => '55.90'
            ]
        );

        Product::create(
            [
                'category_id' => 6,
                'name' => 'Calcinha toda em renda – Audrey',
                'description' => 'A Calcinha toda em renda – Audrey é perfeita para te deixar ainda mais sexy para arrasar naqueles momentos mais especiais. E para garantir ainda mais a sua satisfação, a composição.',
                'ref' => 'REF006',
                'price_wholesale' => '51.90',
                'price_retail' => '75.90'
            ]
        );
    }
}
