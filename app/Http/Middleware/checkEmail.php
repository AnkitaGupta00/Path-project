<?php

namespace App\Http\Middleware;

use App\Models\employee;
use Closure;
use Illuminate\Http\Request;

class checkEmail
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $employee = employee::where([
            ['email',$request->input('email')] ,
            [ 'password',$request->input('password')]
        ])->get();

        $request->request->add(['user'=>$employee]);
        return $next($request);

    }
}
