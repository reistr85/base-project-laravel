<?php

namespace App\Http\Middleware\Api\v1;

use Closure;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ApiKey
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return JsonResponse|mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->header('ApiKey') == 'base64:6I1OujF9xO5xqw1msbZozKzwVX64Fh2pp+G7N32D8I8=')
            return $next($request);

        return response()->json(['errors' => 'ApiKey invalid'], 401);
    }
}
