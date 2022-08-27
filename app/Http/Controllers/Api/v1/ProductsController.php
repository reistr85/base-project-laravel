<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Services\Products\FindAllService;
use App\Services\Products\FindByIdService;
use Exception;
use Illuminate\Http\JsonResponse;

class ProductsController extends Controller
{
    private FindAllService $find_all_service;
    private FindByIdService $find_by_id_service;

    public function __construct(
        FindAllService $find_all_service,
        FindByIdService $find_by_id_service
    )
    {
        $this->find_all_service = $find_all_service;
        $this->find_by_id_service = $find_by_id_service;
    }

    public function index(): JsonResponse
    {
        try {
            $products = $this->find_all_service->execute();

            return response()->json($products, 200);
        }catch (Exception $e){
            return response()->json(['errors' => $e->getMessage()], $e->getCode());
        }
    }

    public function show(int $id): JsonResponse
    {
        try {
            $product = $this->find_by_id_service->execute($id);

            return response()->json($product, 200);
        }catch (Exception $e){
            return response()->json(['errors' => $e->getMessage()], 500);
        }
    }
}
