<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    /**
     * Kiểm tra thông tin đăng nhập
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function checkLogin(Request $request)
    {
        // Validate the request data
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Retrieve the user from the database based on the username and password
        $user = DB::table('taikhoans')
            ->where('TenTaiKhoan', $request->username)
            ->where('MatKhau', $request->password)
            ->first();

        // Check if the user exists
        if ($user) {
            // Lấy vai trò của người dùng và lưu vào session
            $role = $user->role;
            session(['role' => $role]);
            session(['MaTaiKhoan' => $user->MaTaiKhoan]);
            session(['usernames' => $user->TenTaiKhoan]);
            session(['email' => $user->Email]);
            session(['anhdaidien' => $user->AnhDaiDien]);
            // Redirect to the appropriate page based on the role
            if ($role == 1) {
                // If the role is 1, redirect to the admin page
                
                return redirect('/AdminPage')->with('success', 'ĐĂNG NHẬP THÀNH CÔNG VỚI ADMIN');
            } else {
                // If the role is 0, redirect to the homepage
                
                return redirect()->route('homepage')->with('success', 'ĐĂNG NHẬP THÀNH CÔNG VỚI USER');
            }
        } else {
            // If the username or password is incorrect, redirect back with an error message
            return redirect()->back()->with('error', 'Tên đăng nhập hoặc mật khẩu không chính xác');
        }
    }
}
