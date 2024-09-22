<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{

    // hàm lấy ra sản phẩm theo loại (lấy ra tất cả sản phẩm có tên Iphone)
    public function getall_spdetail($tensp)
    {
        // Sử dụng query builder để truy vấn dữ liệu
        $products = DB::table('sanphams')
            ->where('TenSanPham', 'like', "%$tensp%")
            ->get();

        // Chia nhóm sản phẩm thành từng dòng, mỗi dòng có 5 sản phẩm
        $chunkedProducts = $products->chunk(5);
        $categories = $this->getAllCategories();
        
        return view('layouts.PrdPage', compact('chunkedProducts', 'categories'));
    }

    // hàm lấy ra tất cả sản phẩm theo tên sản phẩm
    public function getall_sp($tensp)
    {
        // Sử dụng query builder để truy vấn dữ liệu
        $products = DB::table('sanphams')
            ->where('TenSanPham', 'like', "%$tensp%")
            ->get();

        // Trả về kết quả
        return $products;
    }

    
    // hàm lấy ra 10 sản phẩm
    public function gettop_sp($tensp)
    {
        // Sử dụng query builder để truy vấn dữ liệu
        $products = DB::table('sanphams')
            ->where('TenSanPham', 'like', "%$tensp%")
            ->orderBy('SoLuongDaBan', 'desc') // Sắp xếp theo số lượng đã bán giảm dần
            ->take(10) // Giới hạn số lượng sản phẩm trả về là 10
            ->get();

        // Trả về kết quả
        return $products;
    }

    // func lấy ra tất cả các tên chuyên mục


    // lấy sản phẩm theo tên chuyên mục
    public function AllFunctionView()
    {
        // Lấy sản phẩm MacBook
        $macbookProducts = $this->getall_sp('MACBOOK');

        // Lấy danh sách tất cả các danh mục sản phẩm
        $categories = $this->getAllCategories();

        // Khởi tạo mảng chứa các sản phẩm khác theo danh mục
        $otherProducts = [];
        $advertisements = DB::table('quangcao')->get();
        // Lặp qua từng danh mục để lấy các sản phẩm tương ứng
        foreach ($categories as $category) {
            // Kiểm tra danh mục có phải là MACBOOK hay không, nếu phải thì bỏ qua vì đã lấy ở trên rồi
            if ($category == 'MACBOOK') {
                continue;
            }

            // Lấy các sản phẩm thuộc danh mục hiện tại và thêm vào mảng otherProducts
            $products = $this->gettop_sp($category);
            $otherProducts[$category] = $products;
        }
        $topSellingProducts = DB::table('sanphams')
        ->orderBy('SoLuongDaBan', 'desc')
        ->limit(10)
        ->get();
        $chunkedProduct = $topSellingProducts->chunk(5);
        // Trả về kết quả và truyền chunkedProducts vào view
        // Truyền dữ liệu sản phẩm vào view và hiển thị
        
        return view('layouts.homepage', [
            'macbookProducts' => $macbookProducts,
            'otherProducts' => $otherProducts,
            'categories' => $categories,
            'advertisements' => $advertisements,
            'chunkedProduct' => $chunkedProduct,
        ]);
    }

    // hàm lấy ra tất cả các chuyên mục
    public function getAllCategories()
    {
        // Sử dụng query builder để truy vấn dữ liệu
        $categories = DB::table('chuyenmucs')->pluck('TenChuyenMuc')->toArray();

        // Trả về kết quả
        return $categories;
        
    }

    // Lấy ra tên chuyên mục
    public function getCMByMSP($masp)
    {
        $chuyenmuc = DB::table('sanphams')
            ->join('chuyenmucs', 'sanphams.MaChuyenMuc', '=', 'chuyenmucs.MaChuyenMuc')
            ->where('sanphams.MaSanPham', $masp)
            ->select('chuyenmucs.MaChuyenMuc', 'chuyenmucs.TenChuyenMuc')
            ->first();
        return $chuyenmuc;
    }

    // LẤY RA SẢN PHẨM THEO MÃ CHUYÊN MỤC , LẤY SẢN PHẨM THEO CHUYÊN MỤC
    public function getSPByMaCM($MaCM)
    {
        // Thực hiện truy vấn để lấy thông tin sản phẩm từ cơ sở dữ liệu dựa trên mã chuyên mục
        $products = DB::table('sanphams')
            ->where('MaChuyenMuc', $MaCM)
            ->get();

        // Trả về kết quả
        return $products;
    }
    
    // GET CHI TIẾT SẢN PHẨM THEO MÃ SẢN PHẨM
    public function getDetailPrd($MaSP)
    {
        // Lấy thông tin sản phẩm
        $product = DB::table('SanPhams')
            ->join('ChiTietSanPham', 'SanPhams.MaSanPham', '=', 'ChiTietSanPham.MaSanPham')
            ->select('SanPhams.*', 'ChiTietSanPham.*')
            ->where('SanPhams.MaSanPham', $MaSP)
            ->first();
        // Lấy mã chuyên mục từ kết quả trả về


        // Lấy mã chuyên mục và tên chuyên mục
        $chuyenMuc = $this->getCMByMSP($MaSP);
        $maChuyenMuc = $chuyenMuc->MaChuyenMuc;
        $prd = $this->getSPByMaCM($maChuyenMuc);
        if ($product && $chuyenMuc) {
            // Trả về view để hiển thị chi tiết sản phẩm và thông tin chuyên mục
            return view('layouts.PrdDetails', ['product' => $product, 'chuyenMuc' => $chuyenMuc, 'prd' => $prd]);
        } else {
            // Trả về một trang lỗi hoặc thông báo lỗi nếu không tìm thấy sản phẩm hoặc chuyên mục
            return redirect()->back()->with('error', 'Không tìm thấy sản phẩm hoặc thông tin chuyên mục.');
        }
    }

    // LẤY TẤT CẢ SẢN PHẨM THEO TÊN CHUYÊN MỤC
    public function getall_spdetailByTenCM(Request $request)
    {
        // Lấy tên sản phẩm từ URL
        $tensp = $request->segment(count($request->segments()));

        // Sử dụng query builder để truy vấn dữ liệu
        $products = DB::table('sanphams')
            ->where('TenSanPham', 'like', "%$tensp%")
            ->get();
        $categories = DB::table('chuyenmucs')->pluck('TenChuyenMuc')->toArray();
        // Trả về kết quả và truyền products vào view
        return view('layoutsAdmin.Product', compact('products', 'categories'));
    }

    // hàm hiển thị chuyên mục và hiển thị sản phẩm
    public function showCategories(Request $request)
    {
        // Lấy danh sách các danh mục
        $categories = DB::table('chuyenmucs')->pluck('TenChuyenMuc')->toArray();

        // Khởi tạo biến $products
        $products = [];

        // Kiểm tra xem có giá trị category đã được chọn hay không
        // Nếu có, lấy dữ liệu sản phẩm theo category đã chọn
        $products = DB::table('sanphams')->get();

        // Trả về view với dữ liệu categories, selectedCategory và products
        return view('layoutsAdmin.Product', compact('categories', 'products'));
    }





    ////////////////////////////THÊM SỬA XÓA SẢN PHẨM
    public function showAddForm($category)
    {
        $category = DB::table('chuyenmucs')
            ->where('TenChuyenMuc', $category)
            ->first();
        // Truyền giá trị category vào view để sử dụng trong input MaCM
        return view('layoutsAdmin.AddPrd', ['category' => $category->MaChuyenMuc]);
    }


    // THÊM SẢN PHẨM
    public function store(Request $request, $category)
    {
        // Validate form data
        $validatedData = $request->validate([
            'TenSP' => 'required|string|max:255',
            'GiaSP' => 'required|numeric',
            'GiaGiam' => 'nullable|numeric',
            'SoLuong' => 'required|numeric',
            'SoLuongDaBan' => 'nullable|numeric',
            'user_profile' => 'nullable|file|mimes:jpeg,png,jpg,gif,webp|max:2048', // Chỉ chấp nhận các loại tệp được chỉ định
        ]);
        $namecm = DB::table('chuyenmucs')
            ->where('MaChuyenMuc', '=', $category)
            ->select('TenChuyenMuc')
            ->first();

        // Check if $namecm is not null before accessing its property
        if ($namecm) {
            $tenChuyenMuc = $namecm->TenChuyenMuc;
        } else {
            // Handle the case where $namecm is null or empty
            $tenChuyenMuc = ''; // Default value or handle error
        }
        // Kiểm tra xem file được tải lên có tồn tại không và có hợp lệ không
        if ($request->hasFile('user_profile')) {
            $filename = $request->file('user_profile')->getClientOriginalName();
            $anhSanPham = '/Images/Image/' . $tenChuyenMuc . '/' . $filename;
        } else {
            $filename = '/Images/user.jpg';
            $anhSanPham = $filename;
        }

        // Insert data into the database
        DB::table('sanphams')->insert([
            'TenSanPham' => $request->input('TenSP'),
            'Gia' => $request->input('GiaSP'),
            'GiaGiam' => $request->input('GiaGiam'),
            'SoLuong' => $request->input('SoLuong'),
            'SoLuongDaBan' => $request->input('SoLuongDaBan'),
            'AnhSanPham' => $anhSanPham,
            'MaChuyenMuc' => $request->input('MaCM')
        ]);
        Session::flash('success_messages', ['Thêm sản phẩm thành công']);
        // Redirect to a specific route or page after successful product addition
        // dùng urlencode để xóa các kí tự trống và các kí tự thừa ví dụ chữ mac book thì đường dẫn sẽ hiển thị max%20book nên dùng hàm urlencode để xóa đi %20 cho link chính xác
        return redirect('http://127.0.0.1:8000/product/' . urlencode($tenChuyenMuc))->with('success', 'THÊM SẢN PHẨM THÀNH CÔNG');
    }


    /// UPDATE SẢN PHẨM
    public function edit($category, $idsp)
    {
        // Retrieve the product from the database
        $product = DB::table('sanphams')->where('MaSanPham', $idsp)->first();

        // Pass the product data to the view for rendering
        return view('layoutsAdmin.UpdatePrd', compact('product', 'category', 'idsp'));
    }

    public function update(Request $request, $category, $idsp)
    {
        // Validate the incoming request data
        $request->validate([
            'TenSanPham' => 'required|string|max:255',
            'Gia' => 'required|numeric',
            'GiaGiam' => 'nullable|numeric', // You can add more validation rules for other fields if needed
            'user_profile' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Example validation for image upload
            'SoLuong' => 'required|integer|min:0',
            'SoLuongDaBan' => 'required|integer|min:0',
        ]);

        // Get the input data from the request
        $inputData = $request->only(['TenSanPham', 'Gia', 'GiaGiam', 'SoLuong', 'SoLuongDaBan']);

        // Process the uploaded image if provided
        if ($request->hasFile('user_profile')) {
            $filename = $request->file('user_profile')->getClientOriginalName();
            // Concatenate $filename and $category
            $anhSanPham = '/Images/Image/' . $category . '/' . $filename;
            $inputData['AnhSanPham'] = $anhSanPham;
        } else {
            // Nếu không có tệp được tải lên, gán giá trị mặc định cho $filename
            $oldProduct = DB::table('sanphams')->where('MaSanPham', $idsp)->first();
            if ($oldProduct) {
                $anhSanPham = $oldProduct->AnhSanPham;
                $inputData['AnhSanPham'] = $anhSanPham;
            } else {
                // Xử lý trường hợp không tìm thấy sản phẩm
            }
        }
        // Perform the update operation in the database
        DB::table('sanphams')->where('MaSanPham', $idsp)->update($inputData);
        Session::flash('success_messages', ['Cập nhập sản phẩm thành công']);
        // Redirect back with a success message
        return redirect('http://127.0.0.1:8000/product/' . urlencode($category))->with('success', 'SỬA SẢN PHẨM THÀNH CÔNG');
    }

    // xóa sản phẩm
    public function delete(Request $request, $category, $idsp)
    {
        $idsp = $request->idsp;
        // Kiểm tra nếu tồn tại sản phẩm với MaSanPham tương ứng trong cơ sở dữ liệu
        $product = DB::table('sanphams')->where('MaSanPham', $idsp)->first();
        // Chèn dữ liệu vào cơ sở dữ liệu

        // Nếu sản phẩm tồn tại
        if ($product) {
            // Thực hiện xóa sản phẩm
            DB::table('sanphams')->where('MaSanPham', $idsp)->delete();
            Session::flash('success_messages', ['Xóa sản phẩm thành công']);
            // Redirect về trang danh sách sản phẩm với thông báo xóa thành công
            return redirect('http://127.0.0.1:8000/product/' . urlencode($category))->with('success', 'XÓA SẢN PHẨM THÀNH CÔNG');
        } else {
            // Nếu sản phẩm không tồn tại, redirect về trang danh sách sản phẩm với thông báo lỗi
            return redirect()->back()->with('error', 'Không tìm thấy sản phẩm để xóa.');
        }
    }

    /// TÌM KIẾM SẢN PHẨM
    public function searchprd($tensp)
    {
        // Sử dụng query builder để truy vấn dữ liệu
        $products = DB::table('sanphams')
            ->where('TenSanPham', 'like', "%$tensp%")
            ->get();

        // Chia nhóm sản phẩm thành từng dòng, mỗi dòng có 5 sản phẩm
        $chunkedProducts = $products->chunk(5);

        // Trả về kết quả và truyền chunkedProducts vào view
        return view('layouts.SearchPrd', compact('chunkedProducts'))->with('success', 'TÌM KIẾM SẢN PHẨM SẢN PHẨM THÀNH CÔNG');
    }

   
}
