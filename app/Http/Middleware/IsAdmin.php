<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        // Kiểm tra nếu người dùng đã đăng nhập và vai trò là Admin
        if (Auth::check() && Auth::user()->role->role_name === 'Admin') {
            return $next($request); // Tiếp tục xử lý request
        }

        // Nếu không phải Admin, chuyển hướng về trang khác
        return redirect()->route('home')->with('error', 'Bạn không có quyền truy cập!');
    }
}
