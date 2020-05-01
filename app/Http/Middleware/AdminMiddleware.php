<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class AdminMiddleware
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
        //get the logged in user
        $user = auth()->user();

        if($user->level == User::ADMINISTRATOR)
            return $next($request);
        else {
            return redirect()->route('home');
        }
    }
}
