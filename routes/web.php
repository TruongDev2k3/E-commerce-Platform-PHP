<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\CustomerController;


// VIEW MẶC ĐỊNH TRẢ RA VIEW LOGIN
Route::get('/', function () {
    return view('layouts.Login');
});


// route kiểm tra login, nếu là admin thì cấp quyền mở trang admin
Route::get('/AdminPage', function () {
    // Kiểm tra xem người dùng có quyền truy cập admin hay không
    if (session('role') == 1) {
        // Nếu có quyền, hiển thị trang admin
        return view('layoutsAdmin.index');
    } else {
        // Nếu không có quyền, chuyển hướng về trang không được phép
        return redirect('/')->with('error', 'Bạn không có quyền truy cập vào trang này.');
    }
});

// ROUTE CHECKLOGIN
Route::post('/login', [LoginController::class, 'checkLogin'])->name('login');

// VIEW TRANG CHỦ
Route::get('/homepage', [ProductController::class, 'AllFunctionView'])->name('homepage');

// VIEW TRANG SẢN PHẨM
Route::get('/homepage/{product}', [ProductController::class, 'getall_spdetail']);

// ROUTE RETURN VIEW PRODUCT DETAILS
Route::get('/product/prdID={MaSP}', [ProductController::class, 'getDetailPrd'])->name('layouts.PrdDetails');

// ROUTE HIỂN THỊ DANH SÁCH SẢN PHẨM ADMIN
Route::get('/product', [ProductController::class, 'showCategories'])->name('layoutsAdmin.Product');

// ROUTE HIỂN THỊ SẢN PHẨM THEO CHUYÊN MỤC 
Route::get('/product/{category}', [ProductController::class, 'getall_spdetailByTenCM'])->name('layoutsAdmin.Product');

// ROUTE FORM THÊM SẢN PHẨM
Route::get('/product/{category}/add', [ProductController::class, 'showAddForm'])->name('product.show');

// ROUTE FUNCTION ADD PRODUCT
Route::post('/product/{category}/add', [ProductController::class, 'store'])->name('product.add');

// ROUTE LẤY RA THÔNG TIN SẢN PHẨM THEO ID VÀ HIỂN THỊ LÊN THANH INPUT ĐỂ SỬA
Route::get('/product/{category}/edit/idsp/{idsp}', [ProductController::class, 'edit'])->name('product.edit');

// ROUTE FUNCTION UPDATE 
Route::post('/product/{category}/edit/idsp/{idsp}', [ProductController::class, 'update'])->name('product.update');

// ROUTE DELETE PRODUCT
Route::any('/product/{category}/delete/idsp/{idsp}', [ProductController::class, 'delete'])->name('product.delete');

// ROUTE SEARCH PRODUCT (TÌM KIẾM SẢN PHẨM)
Route::get('/searchPrd/{tensp}', [ProductController::class, 'searchprd'])->name('product.search');

// ROUTE RETURN VIEW BLOGS
Route::get('/Blogs', [BlogController::class, 'showBlogs'])->name('blogs');

// ROUTE RETURN VIEW PAYPAL
Route::get('/Paypal', function () {
    // $cartItems = Session::get('cart.items', []); // Lấy dữ liệu sản phẩm từ session
    return view('layouts.Paypal'); // Truyền dữ liệu session vào view
});


/// GIỎ HÀNG

// ROUTE RETURN VIEW CART
Route::get('/cart', [CartController::class, 'ViewCart']);

// ROUTE ADD TO CART
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('add.to.cart');

// ROUTE DELETE PRODUCT CART BY ID
Route::any('/remove-from-cart/{productId}', [CartController::class, 'removeFromCart'])->name('remove-from-cart');

// ROUTE DELETE ALL PRODUCT CART
Route::any('/remove-all-from-cart', [CartController::class, 'removeAllFromCart'])->name('remove-all-from-cart');

// ROUTE UPDATE CART
Route::post('/update-cart', [CartController::class, 'updateCart']);


// Tạo đơn hàng



/////////////         CUSTOMER

// ROUTE RETURN VIEW CUSTOMER
Route::get('/customers', [CustomerController::class, 'ListKH'])->name('LISTKH');

// ROUTE ĐẶT HÀNG
Route::post('/create-invoice', [CustomerController::class, 'createDH']);

// ROUTE GET HOADON BY ID CUSTOMER
Route::get('/customer/{id}', [CustomerController::class, 'HoaDon'])->name('HoaDon');

// ROUTE GET DETAILSBILL BY MAHOADON
Route::get('/customer/DetailsBill/{MaHoaDon}', [CustomerController::class, 'ChiTietHoaDon'])->name('ChiTietHoaDon');

// update status đơn hàng từ xuwyr lý sang đã xác nhận
Route::post('/update-status/{id}', [CustomerController::class, 'updateStatus'])->name('updateStatus');

// lấy ra đơn hàng đang xử lý
Route::get('/Pending', [CustomerController::class, 'GetPending']);

// lấy ra đơn hàng đặt thành công
Route::get('/BillSuccess', [CustomerController::class, 'GetSuccess']);

// gửi yêu cầu hủy đơn hàng
Route::post('/cancel-order/{id}', [CustomerController::class, 'cancelOrder'])->name('cancel-order');

// xác nhận hủy đơn hàng 
Route::post('/cancelOrder/{id}', [CustomerController::class, 'ConfirmCancelOrder'])->name('ConfirmCancelOrder');

// lấy ra các đơn hàng đã hủy
Route::get('/OrderCancel', [CustomerController::class, 'GetOrderCancel']);

// gửi yêu cầu mua lại đơn đã hủy
Route::post('/OrderBillCancel/{id}', [CustomerController::class, 'OrderBillCancel'])->name('OrderBillCancel');


/// route thêm đơn hàng cho người dùng mua hàng online
Route::post('/createDHOnline', [CustomerController::class, 'createDHOnline'])->name('createDHOnline');

// route lấy ra các đơn hàng đã thanh toán
Route::get('/BillPaid', [CustomerController::class, 'GetBillPaid']);

