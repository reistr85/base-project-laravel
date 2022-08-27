<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if(env('APP_ENV') === 'local') {
            $this->call(UsersSeeder::class);
            $this->call(CategoriesSeeder::class);
            $this->call(SizesSeeder::class);
            $this->call(ProductsSeeder::class);
            $this->call(ProductSizesSeeder::class);
            $this->call(ProductImagesSeeder::class);
        }
    }
}
