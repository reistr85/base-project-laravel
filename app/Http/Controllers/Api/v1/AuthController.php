<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    private $users;

    public function __construct()
    {
    }

    public function login(Request $request): JsonResponse
    {
        $email = $request->input('email');
        $password = $request->input('password');
        if($email === 'admin@gmail.com' && $password === '12345678') {
            return response()->json(['token' => 'base64:0b9n0RaASRq8pFIGh1VjN7KtNxcj6wB2BYQy1rNUpnU='], 200);
        }else{
            return response()->json(['message' => 'Not authorized'], 401);
        }
    }

    public function register(Request $request): JsonResponse
    {
        $user = $request->all();
        $this->users[] = $user;
        return response()->json(['user' => $this->users], 201);
    }
}