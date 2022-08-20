<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Services\Categories\FindAllService;
use Exception;
use Illuminate\Http\JsonResponse;

class CategoriesController extends Controller
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
            $categories = $this->find_all_service->execute();

            return response()->json(['categories' => $categories], 200);
        }catch (Exception $e){
            return response()->json(['errors' => $e->getMessage()], $e->getCode());
        }
    }
}
