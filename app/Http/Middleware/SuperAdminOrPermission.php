<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class SuperAdminOrPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $permission): Response
    {
        // Check if user is authenticated and is super admin
        if (Auth::check() && Auth::user()->is_super_admin) {
            return $next($request);
        }

        // If not super admin, check the permission using Laratrust
        return app(\Laratrust\Middleware\Permission::class)->handle($request, $next, $permission);
    }
}
