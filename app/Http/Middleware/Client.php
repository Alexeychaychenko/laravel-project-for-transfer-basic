<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Client
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        
        if(auth()->user()->role == 1){
            return redirect()->route('admin.home');
        }elseif(auth()->user()->role == 2 && auth()->user()->status == 1){
            return $next($request);
        }elseif(auth()->user()->role == 3){
            return redirect()->route('employer.home');
        }elseif(auth()->user()->role == 4){
            return redirect()->route('locationmanager.home');
        }elseif(auth()->user()->role == 5){
            return redirect()->route('warehouse.home');
        }
        auth()->logout();
        return redirect()->route('index');
    }
}
