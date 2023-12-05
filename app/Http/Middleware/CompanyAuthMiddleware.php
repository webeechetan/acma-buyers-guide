<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CompanyAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

       
        if (Auth::guard('company')->check()) {
            return $next($request);
        }
        return redirect()->route('company.login')->with('alert', [
            'type' => 'danger',
            'msg' => 'Unauthorized access',
            'body' => 'You are not Authorized to access this page',
        ]);
        
    }
}
