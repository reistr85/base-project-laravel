<?php

namespace App\Services\Products;

use App\Repositories\Interfaces\IProductRepository;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Request;

class FindAllService
{
    private IProductRepository $product_repository;

    public function __construct(
        IProductRepository $product_repository
    )
    {
        $this->product_repository = $product_repository;
    }

    public function execute(): array
    {
        $productsPaginate = $this->product_repository->findAll();

        $itemsTransformed = $productsPaginate
            ->getCollection()
            ->map(function($item) {
                return [
                    'id' => $item->id,
                    'name' => $item->name,
                    'description' => $item->description,
                    'price_wholesale' => $item->price_wholesale,
                    'price_retail' => $item->price_retail,
                    'ref' => $item->ref,
                    'category' => ['id' => $item->category->id, 'name' => $item->category->name],
                    'sizes' => $item->sizes->map(function($item) {
                        return $item->size->label;
                    }),
                    'images' => $item->images->map(function($item) {
                        return $item->url;
                    }),
                    'created_by' => $item->created_by,
                    'updated_by' => $item->updated_by,
                    'deleted_at' => null,
                    'created_at' => $item->created_at,
                    'updated_at' => $item->updated_at,
                ];
            })->toArray();

        $products = new LengthAwarePaginator(
            $itemsTransformed,
            $productsPaginate->total(),
            $productsPaginate->perPage(),
            $productsPaginate->currentPage(), [
                'path' => Request::url(),
                'query' => [
                    'page' => $productsPaginate->currentPage()
                ]
            ]
        );

        return $products->toArray();
    }
}
