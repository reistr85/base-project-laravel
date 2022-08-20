<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Services\Users\CreateUserService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Throwable;

class UsersController extends Controller
{
    private CreateUserService $create_user_service;

    public function __construct(
        CreateUserService $create_user_service
    )
    {
        $this->create_user_service = $create_user_service;
    }

    public function create(): JsonResponse
    {

        DB::beginTransaction();
        try {
            $data = request(['name', 'email', 'password']);
            $res = $this->create_user_service->execute($data);
            DB::commit();

            return response()->json($res, 201);
        }catch (Exception $e){
            DB::rollBack();
            return response()->json(['errors' => $e->getMessage()], $e->getCode());
        } catch (Throwable $e) {
            DB::rollBack();
            return response()->json(['errors' => $e->getMessage()], $e->getCode());
        }
    }

}
