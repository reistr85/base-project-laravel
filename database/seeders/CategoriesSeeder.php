<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'Fitness', 'order' => 1]);
        Category::create(['name' => 'Bolsas', 'order' => 2]);
        Category::create(['name' => 'Menina Moça', 'order' => 3]);
        Category::create(['name' => 'Sutien', 'order' => 4]);
        Category::create(['name' => 'Bary', 'order' => 5]);
        Category::create(['name' => 'Calcinhas', 'order' => 6]);
        Category::create(['name' => 'Cuecas', 'order' => 7]);
        Category::create(['name' => 'Modeladores', 'order' => 8]);
        Category::create(['name' => 'Conjuntos', 'order' => 9]);
        Category::create(['name' => 'Linha Noite', 'order' => 10]);
        Category::create(['name' => 'Moda Praia', 'order' => 11]);
        Category::create(['name' => 'Brindes', 'order' => 12]);
        Category::create(['name' => 'Pad. Up', 'order' => 13]);
        Category::create(['name' => 'Shorts', 'order' => 14]);
        Category::create(['name' => 'Malas', 'order' => 15]);
        Category::create(['name' => 'Xuxas', 'order' => 16]);
        Category::create(['name' => 'Bermudas', 'order' => 17]);
        Category::create(['name' => 'Sacolas', 'order' => 18]);
        Category::create(['name' => 'Blusas', 'order' => 19]);
        Category::create(['name' => 'Gestantes', 'order' => 20]);
        Category::create(['name' => 'Acessórios', 'order' => 21]);
        Category::create(['name' => 'Promoções', 'order' => 22]);
        Category::create(['name' => 'Diversos', 'order' => 23]);
        Category::create(['name' => 'Embalagens', 'order' => 24]);
        Category::create(['name' => 'Segunda Pele', 'order' => 25]);
        Category::create(['name' => 'Máscaras', 'order' => 26]);
    }
}
