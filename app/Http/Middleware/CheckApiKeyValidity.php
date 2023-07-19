<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;

class CheckApiKeyValidity
{
    public function handle(Request $request, Closure $next)
    {
        $apiKey = $request->header('X-API-KEY');
        $user = User::where('api_key', $apiKey)->first();

        if (!$user) {
            return response()->json([
                'code' => 400,
                'message' => 'Invalid API key'
            ], 401);
        }

        return $next($request);
    }
}