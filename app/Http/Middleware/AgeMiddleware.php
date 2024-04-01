<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AgeMiddleware
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
          
        
        //return "middleware";  
            if($request->age>10)  
            {  
                $token= "Age is greater than 10";  
            }  
            else  
            {  
               $token ="Age is not greater than 10";  
            }  

        $request->attributes->add(['token' => $token]);
        return $next($request);
    }
    
}
