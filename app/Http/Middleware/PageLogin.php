<?php

namespace App\Http\Middleware;

use Closure;
Use Illuminate\Support\Facades\Auth;// phải khai bảo mới hiểu được thư viên Auth


class PageLogin
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
       if(Auth::check())
        {
            $user = Auth::user();
            if($user->vai_tro == 1 || $user->vai_tro == 2 )
                return $next($request);
            else
                return redirect()->route('page.logout')->with('thongbao','Tài khoản và mật khẩu không chính xác');
            
        }       
        else
        {
            return redirect(''.Route('page.logout').'')->with('thongbao','Tài khoản và mật khẩu không chính xác');

        }
                
            
    }
}
