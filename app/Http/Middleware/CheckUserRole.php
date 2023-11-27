<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;


class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {


        if ($request->user()->post == $role) {
            return $next($request);

        }

        abort(403, 'Access denied.');
//        $user = Auth::user()->post;
//        if ($user == "Админ") {
//            return $next($request);
//        } else {
//            abort(403, 'Access denied.');
//        }

    }
}