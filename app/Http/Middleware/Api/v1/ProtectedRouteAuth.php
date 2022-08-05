<?php

namespace App\Http\Middleware\Api\v1;

use Closure;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProtectedRouteAuth
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return JsonResponse
     */
    public function handle(Request $request, Closure $next): JsonResponse
    {
        if(empty($request->header('authorization')))
            return response()->json(['error' => 'Token not found'], 401);

        if($request->header('authorization') != 'Bearer base64:0b9n0RaASRq8pFIGh1VjN7KtNxcj6wB2BYQy1rNUpnU=')
            return response()->json(['error' => 'token invalid'], 401);

        return $next($request);
    }
}
