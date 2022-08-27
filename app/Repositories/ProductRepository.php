<?php

namespace App\Repositories;

use App\Models\Product;
use App\Repositories\Interfaces\IProductRepository;
use Illuminate\Support\Facades\Request;

class ProductRepository implements IProductRepository
{
    private Product $model;
    private string $per_page;
    private string $category_id;
    private string $search;

    public function __construct(Product $model)
    {
        $this->model = $model;
        $this->per_page = '10';
    }

    public function findAll()
    {
        if(Request::input('per_page'))
            $this->per_page = $_GET['per_page'];

        $query = $this->model->orderBy('name', 'asc');

        if(Request::input('category_id'))
            $query = $query->where('category_id', Request::input('category_id'));

        return $query->with('category', 'sizes.size', 'images')->paginate($this->per_page);
    }
}
