<?php

namespace Database\Seeders;

use App\Models\Size;
use Illuminate\Database\Seeder;

class SizesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Size::create(['label' => 'P']);
        Size::create(['label' => 'M']);
        Size::create(['label' => 'G']);
        Size::create(['label' => 'GG']);
        Size::create(['label' => 'XG']);
        Size::create(['label' => 'PP']);
        Size::create(['label' => 'XXG']);
    }
}
