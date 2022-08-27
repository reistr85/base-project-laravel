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
//            /api/v1/products?category_id=1&search=cuecas&per_page=10&page=1
            $products = $this->find_all_service->execute();

            return response()->json($products, 200);
        }catch (Exception $e){
            return response()->json(['errors' => $e->getMessage()], 500);
        }
    }

//    public function index(): JsonResponse
//    {
//        return response()->json(['products' => $this->products], 200);
//    }
//
//    public function show(int $id): JsonResponse
//    {
//        if($id > 0 && $id <= 10) {
//            return response()->json(['products' => $this->products[$id - 1]], 200);
//        }else{
//            return response()->json([], 404);
//        }
//    }
//
//    private function setProducts()
//    {
//        $this->products = [
//            [
//                'id' => 1,
//                'name' => 'Conjunto de Renda',
//                'description' => Lorem::text(),
//                'price_wholesale' => 'R$80,00',
//                'price_retail' => 'R$120,00',
//                'category' => ['id' => 1, 'name' => 'Sutiãs'],
//                'sizes' => ['P', 'M', 'G'],
//                'images' => [
//                    'https://cdn.iset.io/assets/55566/produtos/1406/psx-20220724-150315.jpg',
//                    'https://cdn.iset.io/assets/55566/produtos/1306/psx-20220529-114219.jpg',
//                    'https://cdn.iset.io/assets/55566/produtos/1207/psx-20220403-211401.jpg'
//                ],
//                'created_at' => '2022-08-04 00:00:00',
//                'updated_at' => '2022-08-04 00:00:00',
//                'deleted_at' => null,
//            ],
//            [
//                'id' => 2,
//                'name' => 'Calchinhas da Moda',
//                'description' => Lorem::text(),
//                'price_wholesale' => 'R$60,00',
//                'price_retail' => 'R$160,00',
//                'category' => ['id' => 2, 'name' => 'Calchinhas'],
//                'sizes' => ['P', 'M', 'G'],
//                'images' => [
//                    'https://cdn.iset.io/assets/55566/produtos/1306/psx-20220529-114219.jpg',
//                    'https://cdn.iset.io/assets/55566/produtos/1406/psx-20220724-150315.jpg',
//                    'https://cdn.iset.io/assets/55566/produtos/1207/psx-20220403-211401.jpg'
//                ],
//                'created_at' => '2022-08-04 00:00:00',
//                'updated_at' => '2022-08-04 00:00:00',
//                'deleted_at' => null,
//            ],
//            [
//                'id' => 3,
//                'name' => 'Vestido Longo',
//                'description' => Lorem::text(),
//                'price_wholesale' => 'R$87,00',
//                'price_retail' => 'R$170,00',
//                'category' => ['id' => 3, 'name' => 'Vestidos'],
//                'sizes' => ['P', 'M', 'G'],
//                'images' => [
//                    'https://cdn.iset.io/assets/55566/produtos/1207/psx-20220403-211401.jpg',
//                    'https://cdn.iset.io/assets/55566/produtos/1406/psx-20220724-150315.jpg',
//                    'https://cdn.iset.io/assets/55566/produtos/1306/psx-20220529-114219.jpg',
//                ],
//                'created_at' => '2022-08-04 00:00:00',
//                'updated_at' => '2022-08-04 00:00:00',
//                'deleted_at' => null,
//            ],
//            [
//                'id' => 4,
//                'name' => 'Lingerrier de Paris',
//                'description' => Lorem::text(),
//                'price_wholesale' => 'R$70,00',
//                'price_retail' => 'R$110,00',
//                'category' => ['id' => 4, 'name' => 'Lingerrier'],
//                'sizes' => ['P', 'M', 'G'],
//                'images' => [
//                    'https://cdn.iset.io/assets/55566/produtos/1306/psx-20220529-114219.jpg',
//                    'https://cdn.iset.io/assets/55566/produtos/1406/psx-20220724-150315.jpg',
//                    'https://cdn.iset.io/assets/55566/produtos/1207/psx-20220403-211401.jpg'
//                ],
//                'created_at' => '2022-08-04 00:00:00',
//                'updated_at' => '2022-08-04 00:00:00',
//                'deleted_at' => null,
//            ],
//            [
//                'id' => 5,
//                'name' => 'Conjunto Cuecas',
//                'description' => Lorem::text(),
//                'price_wholesale' => 'R$89,00',
//                'price_retail' => 'R$129,00',
//                'category' => ['id' => 5, 'name' => 'Cuecas'],
//                'sizes' => ['P', 'M', 'G'],
//                'images' => [
//                    'https://cdn.iset.io/assets/55566/produtos/1406/psx-20220724-150315.jpg',
//                    'https://cdn.iset.io/assets/55566/produtos/1306/psx-20220529-114219.jpg',
//                    'https://cdn.iset.io/assets/55566/produtos/1207/psx-20220403-211401.jpg'
//                ],
//                'created_at' => '2022-08-04 00:00:00',
//                'updated_at' => '2022-08-04 00:00:00',
//                'deleted_at' => null,
//            ],
//            [
//                'id' => 6,
//                'name' => 'Conjunto de Renda',
//                'description' => Lorem::text(),
//                'price_wholesale' => 'R$80,00',
//                'price_retail' => 'R$120,00',
//                'category' => ['id' => 1, 'name' => 'Sutiãs'],
//                'sizes' => ['P', 'M', 'G'],
//                'images' => [
//                    'https://cdn.iset.io/assets/55566/produtos/1406/psx-20220724-150315.jpg',
//                    'https://cdn.iset.io/assets/55566/produtos/1306/psx-20220529-114219.jpg',
//                    'https://cdn.iset.io/assets/55566/produtos/1207/psx-20220403-211401.jpg'
//                ],
//                'created_at' => '2022-08-04 00:00:00',
//                'updated_at' => '2022-08-04 00:00:00',
//                'deleted_at' => null,
//            ],
//            [
//                'id' => 7,
//                'name' => 'Calchinhas da Moda',
//                'description' => Lorem::text(),
//                'price_wholesale' => 'R$60,00',
//                'price_retail' => 'R$160,00',
//                'category' => ['id' => 2, 'name' => 'Calchinhas'],
//                'sizes' => ['P', 'M', 'G'],
//                'images' => [
//                    'https://cdn.iset.io/assets/55566/produtos/1306/psx-20220529-114219.jpg',
//                    'https://cdn.iset.io/assets/55566/produtos/1406/psx-20220724-150315.jpg',
//                    'https://cdn.iset.io/assets/55566/produtos/1207/psx-20220403-211401.jpg'
//                ],
//                'created_at' => '2022-08-04 00:00:00',
//                'updated_at' => '2022-08-04 00:00:00',
//                'deleted_at' => null,
//            ],
//            [
//                'id' => 8,
//                'name' => 'Vestido Longo',
//                'description' => Lorem::text(),
//                'price_wholesale' => 'R$87,00',
//                'price_retail' => 'R$170,00',
//                'category' => ['id' => 3, 'name' => 'Vestidos'],
//                'sizes' => ['P', 'M', 'G'],
//                'images' => [
//                    'https://cdn.iset.io/assets/55566/produtos/1207/psx-20220403-211401.jpg',
//                    'https://cdn.iset.io/assets/55566/produtos/1406/psx-20220724-150315.jpg',
//                    'https://cdn.iset.io/assets/55566/produtos/1306/psx-20220529-114219.jpg',
//                ],
//                'created_at' => '2022-08-04 00:00:00',
//                'updated_at' => '2022-08-04 00:00:00',
//                'deleted_at' => null,
//            ],
//            [
//                'id' => 9,
//                'name' => 'Lingerrier de Paris',
//                'description' => Lorem::text(),
//                'price_wholesale' => 'R$70,00',
//                'price_retail' => 'R$110,00',
//                'category' => ['id' => 4, 'name' => 'Lingerrier'],
//                'sizes' => ['P', 'M', 'G'],
//                'images' => [
//                    'https://cdn.iset.io/assets/55566/produtos/1306/psx-20220529-114219.jpg',
//                    'https://cdn.iset.io/assets/55566/produtos/1406/psx-20220724-150315.jpg',
//                    'https://cdn.iset.io/assets/55566/produtos/1207/psx-20220403-211401.jpg'
//                ],
//                'created_at' => '2022-08-04 00:00:00',
//                'updated_at' => '2022-08-04 00:00:00',
//                'deleted_at' => null,
//            ],
//            [
//                'id' => 10,
//                'name' => 'Conjunto Cuecas',
//                'description' => Lorem::text(),
//                'price_wholesale' => 'R$89,00',
//                'price_retail' => 'R$129,00',
//                'category' => ['id' => 5, 'name' => 'Cuecas'],
//                'sizes' => ['P', 'M', 'G'],
//                'images' => [
//                    'https://cdn.iset.io/assets/55566/produtos/1406/psx-20220724-150315.jpg',
//                    'https://cdn.iset.io/assets/55566/produtos/1306/psx-20220529-114219.jpg',
//                    'https://cdn.iset.io/assets/55566/produtos/1207/psx-20220403-211401.jpg'
//                ],
//                'created_at' => '2022-08-04 00:00:00',
//                'updated_at' => '2022-08-04 00:00:00',
//                'deleted_at' => null,
//            ],
//        ];
//    }
}
