<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CekStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // $user = \App\User::where('email', $request->email)->first();
        $user = Auth::user();
        if ($user->hasRole('User')) {
            return redirect('/a');
        }
        elseif ($user->hasRole('')) {
            return redirect('/a');
        }


        return $next($request);
    }
}
