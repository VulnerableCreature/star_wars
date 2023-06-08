<?php

namespace App\Http\Middleware\Admin;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if ((int)auth()->user()->role_id !== User::ROLE_ADMIN) {
            abort(404);
        }
        return $next($request);
    }
}
