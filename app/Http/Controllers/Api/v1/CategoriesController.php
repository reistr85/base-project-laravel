<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    private $categories;

    public function __construct()
    {
        $this->setCategories();
    }

    public function index(): array
    {
        return ['categories' => $this->categories];
    }

    private function setCategories()
    {
        $this->categories = [
            [
                'id' => 1,
                'name' => 'Sutiãs',
                'created_at' => '2022-08-04 00:00:00',
                'updated_at' => '2022-08-04 00:00:00',
                'deleted_at' => null,
            ],
            [
                'id' => 2,
                'name' => 'Calchinhas',
                'created_at' => '2022-08-04 00:00:00',
                'updated_at' => '2022-08-04 00:00:00',
                'deleted_at' => null,
            ],
            [
                'id' => 3,
                'name' => 'Vestidos',
                'created_at' => '2022-08-04 00:00:00',
                'updated_at' => '2022-08-04 00:00:00',
                'deleted_at' => null,
            ],
            [
                'id' => 4,
                'name' => 'Lingerrier',
                'created_at' => '2022-08-04 00:00:00',
                'updated_at' => '2022-08-04 00:00:00',
                'deleted_at' => null,
            ],
            [
                'id' => 5,
                'name' => 'Cuecas',
                'created_at' => '2022-08-04 00:00:00',
                'updated_at' => '2022-08-04 00:00:00',
                'deleted_at' => null,
            ]
        ];
    }
}
