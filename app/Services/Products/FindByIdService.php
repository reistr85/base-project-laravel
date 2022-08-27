<?php

namespace App\Services\Products;

use App\Repositories\Interfaces\IProductRepository;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Request;

class FindByIdService
{
    private IProductRepository $product_repository;

    public function __construct(
        IProductRepository $product_repository
    )
    {
        $this->product_repository = $product_repository;
    }

    public function execute(int $id): array
    {
        $product = $this->product_repository->findById($id);
        return ['product' => [
            'id' => $product->id,
            'name' => $product->name,
            'description' => $product->description,
            'price_wholesale' => $product->price_wholesale,
            'price_retail' => $product->price_retail,
            'category' => ['id' => $product->category->id, 'name' => $product->category->name],
            'sizes' => $product->sizes->map(function($item) {
                return $item->size->label;
            }),
            'images' => $product->images->map(function($item) {
                return $item->url;
            }),
            'created_by' => $product->created_by,
            'updated_by' => $product->updated_by,
            'deleted_at' => null,
            'created_at' => $product->created_at,
            'updated_at' => $product->updated_at,
        ]];
    }
}
