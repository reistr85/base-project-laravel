<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Services\Products\FindAllService;
use Exception;
use Illuminate\Http\JsonResponse;

class ProductsController extends Controller
{
    private FindAllService $find_all_service;

    public function __construct(
        FindAllService $find_all_service
    )
    {
        $this->find_all_service = $find_all_service;
    }

    public function index(): JsonResponse
    {
        try {
            $products = $this->find_all_service->execute();

            return response()->json($products, 200);
        }catch (Exception $e){
            return response()->json(['errors' => $e->getMessage()], 500);
        }
    }
}
