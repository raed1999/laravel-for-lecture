<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AgeValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $age)
    {
         $age =  $request->route($age);

         if($age > 18){
            return redirect(route('validVoter'));
         }

         if($age < 18 && $age > 0){
            return redirect(route('invalidVoter'));
         }

         return redirect(route('add.index'));

    }
}
