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
            return response()->json(['user' => $res['user'], 'token' => $res['token']], 200);
        }catch (Exception $e){
            return response()->json(['errors' => $e->getMessage()], 401);
        } catch (Throwable $e) {
            return response()->json(['errors' => $e->getMessage()], 401);
        }

//        $email = $request->input('email');
//        $password = $request->input('password');
//
//        if($email === 'admin@gmail.com' && $password === '12345678') {
//            return response()->json([
//                'user' => ['id' => 1, 'name' => 'Administrador', 'email' => 'admin@gmail.com', 'user_type' => 'wholesale'],
//                'token' => 'base64:0b9n0RaASRq8pFIGh1VjN7KtNxcj6wB2BYQy1rNUpnU='], 200);
//        } else if ($email === 'user@gmail.com' && $password === '12345678') {
//            return response()->json([
//                'user' => ['id' => 1, 'name' => 'Usuário Padrão', 'email' => 'user@gmail.com', 'user_type' => 'retail'],
//                'token' => 'base64:0b9n0RaASRq8pFIGh1VjN7KtNxcj6wB2BYQy1rNUpnU='], 200);
//        }else{
//            return response()->json(['message' => 'Not authorized'], 401);
//        }
    }

    public function register(Request $request): JsonResponse
    {
        $user = $request->all();
        $this->users[] = $user;
        return response()->json(['user' => $this->users, 'token' => 'base64:0b9n0RaASRq8pFIGh1VjN7KtNxcj6wB2BYQy1rNUpnU='], 201);
    }
}
