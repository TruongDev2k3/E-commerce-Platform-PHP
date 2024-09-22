<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class CartController extends Controller
{
        /////// GIỎ HÀNG
    ////// FUNCTION THÊM GIỎ HÀNG //////////

    public function addToCart(Request $request)
    {
        // Kiểm tra xem người dùng đã đăng nhập chưa
        if (session()->has('usernames')) {
            // Lấy MaTaiKhoan từ session
            $userId = session('MaTaiKhoan');
        } else {
            // Người dùng chưa đăng nhập, bạn có thể thực hiện các hành động như yêu cầu họ đăng nhập
            return redirect('/')->with('error', 'Vui lòng đăng nhập để thêm sản phẩm vào giỏ hàng.');
        }

        // Lấy dữ liệu sản phẩm từ request
        $productData = [
            'MaTaiKhoan' => $userId,
            'MaSanPham' => $request->input('PrdID'),
            'TenSanPham' => $request->input('TenSanPham'),
            'AnhSanPham' => $request->input('AnhSanPham'),
            'Gia' => $request->input('GiaGiam'),
            'SoLuong' => $request->input('SoLuong'),
            'TamTinh' => $request->input('SoLuong') * $request->input('GiaGiam') // Tính toán cột TamTinh
        ];
        // dd($productData);
        // Thực hiện truy vấn SQL để thêm dữ liệu vào bảng "Cart"
        DB::table('cart')->insert($productData);

        // Redirect về trang trước đó hoặc trang khác
        return redirect()->back()->with('success', 'Sản phẩm đã được thêm vào giỏ hàng');
    }

    public function updateCart(Request $request)
    {
        $productId = $request->productId;
        $newQuantity = $request->newQuantity;

        // Lấy MaTaiKhoan từ session
        $userId = session('MaTaiKhoan');

        // Cập nhật số lượng và giá trị TamTinh trong bảng cart
        DB::table('cart')
            ->where('MaTaiKhoan', $userId)
            ->where('MaSanPham', $productId)
            ->update([
                'SoLuong' => $newQuantity,
                'TamTinh' => DB::raw('Gia * ' . $newQuantity) // Tính toán lại TamTinh
            ]);
        return response()->json(['success' => true]);
    }
    /// FUNCTION XÓA GIỎ HÀNG
    public function removeFromCart(Request $request, $productId)
    {
        // Lấy MaTaiKhoan từ session
        $userId = session('MaTaiKhoan');

        // Thực hiện truy vấn SQL để xóa sản phẩm khỏi bảng cart
        DB::table('cart')
            ->where('MaTaiKhoan', $userId)
            ->where('MaSanPham', $productId)
            ->delete();

        // Redirect về trang trước đó hoặc trang khác
        return redirect('http://127.0.0.1:8000/cart')->with('success', 'XÓA SẢN PHẨM THÀNH CÔNG');
    }

    public function removeAllFromCart(Request $request)
    {
        // Lấy MaTaiKhoan từ session
        $userId = session('MaTaiKhoan');

        // Thực hiện truy vấn SQL để xóa sản phẩm khỏi bảng cart
        DB::table('cart')
            ->where('MaTaiKhoan', $userId)

            ->delete();

        // Redirect về trang trước đó hoặc trang khác
        return redirect('http://127.0.0.1:8000/cart')->with('success', 'XÓA SẢN PHẨM THÀNH CÔNG');
    }


    public function ViewCart()
    {
        // Lấy MaTaiKhoan từ session
        $userId = session('MaTaiKhoan');

        // Thực hiện truy vấn SQL để lấy thông tin giỏ hàng
        $cartItems = DB::table('cart')
            ->where('MaTaiKhoan', $userId)
            ->get();

        // Trả về kết quả
        return view('layouts.CartDetails', ['cartItems' => $cartItems]);
    }

}
