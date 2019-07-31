<?php

namespace App\Http\Middleware;

use Closure;

class CheckToken
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
        $age=$request->input('age',1);
        if($age<18)
        {
           // return redirect()->to('www.baidu.com');
            return redirect()->to('http//:www.baidu.com');
        }
        return $next($request);
    }
}
