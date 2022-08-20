<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Services\Auth\LoginService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Throwable;

class AuthController extends Controller
{
    private LoginService $login_service;

    public function __construct(
        LoginService $login_service
    )
    {
        $this->login_service = $login_service;
    }

    public function login(Request $request): JsonResponse
    {
        try {
            $credentials = request(['email', 'password']);
            $res = $this->login_service->execute($credentials);

            return response()->json($res, 200);
        }catch (Exception $e){
            return response()->json(['errors' => $e->getMessage()], 401);
        } catch (Throwable $e) {
            return response()->json(['errors' => $e->getMessage()], 401);
        }
    }
}
