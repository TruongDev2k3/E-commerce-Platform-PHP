<?php


namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    public function showBlogs()
    {
        // Khởi tạo biến $products
        $products = [];
        // Nếu có, lấy dữ liệu sản phẩm theo category đã chọn
        $products = DB::table('blogs')->get();

        // Trả về view với dữ liệu categories, selectedCategory và products
        return view('layouts.Blogs', compact('products'));
    }
}
