<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    ///////////////////////////////////////CUSTOMER

    // DANH SÁCH KHÁCH HÀNG
    public function ListKH()
    {
        // Truy vấn tất cả thông tin khách hàng từ bảng khachhang
        $customers = DB::table('khachhang')->get();

        return view('layoutsAdmin.Customer', ['customers' => $customers]);
    }

    // HÀM HIỂN THỊ HÓA ĐƠN
    public function HoaDon($id)
    {
        $bills = DB::table('hoadons')
            ->join('khachhang', 'hoadons.Id', '=', 'khachhang.Id')
            ->select(
                'hoadons.MaHoaDon as hoadon_id',
                'hoadons.NgayTao',
                'hoadons.NgayDuyet',
                'hoadons.TongGia',
                'hoadons.TrangThai',
                'khachhang.Id as khachhang_id',
                'khachhang.TenKH',
                'khachhang.GioiTinh',
                'khachhang.DiaChi',
                'khachhang.Email',
                'khachhang.SDT'
            )
            ->where('hoadons.Id', $id)
            ->whereIn('hoadons.TrangThai', ['Đang xử lý', 'Đã xác nhận','Yêu cầu hủy','Đã thanh toán'])
            ->get();

        return view('layoutsAdmin.HoaDon', ['bills' => $bills]);
    }


    // CHI TIẾT HÓA ĐƠN
    public function ChiTietHoaDon($MaHoaDon)
    {
        $chitietHoaDon = DB::table('chitiethoadons')
            ->where('MaHoaDon', $MaHoaDon)
            ->get();

        return view('layoutsAdmin.ChiTietHoaDon', ['chitietHoaDon' => $chitietHoaDon]);
    }

    // TẠO ĐƠN HÀNG THƯỜNG ( THANH TOÁN KHI NHẬN HÀNG )
    public function createDH(Request $request)
    {
        if (session()->has('usernames')) {
            // Lấy MaTaiKhoan từ session
            $userId = session('MaTaiKhoan');
        } else {
            // Người dùng chưa đăng nhập, bạn có thể thực hiện các hành động như yêu cầu họ đăng nhập
            return redirect('/')->with('error', 'Vui lòng đăng nhập để thêm sản phẩm vào giỏ hàng.');
        }
        // Lấy dữ liệu từ request
        $ngaytao = now(); // Lấy ngày hiện tại
        $ngayduyet = now(); // Lấy ngày hiện tại
        $idkhachhang = $userId; // Lấy ID khách hàng từ form
        $hoten = $request->input('txt_hoten');
        $gioitinh = $request->input('gender');
        $diachi = $request->input('txt_diachi');
        $email = $request->input('txt_email');
        $sdt = $request->input('txt_sdt');
        $total = $request->input('TongTien');
        $status = $request->input('status') ?? 'Đang xử lý';
        // Lấy danh sách sản phẩm từ Session Storage hoặc từ request nếu đã gửi lên từ form

        $existingCustomer = DB::table('khachhang')->where('Id', $userId)->first();

        // Nếu khách hàng đã tồn tại, lấy id của khách hàng
        if ($existingCustomer) {
            $idkhachhangs = $existingCustomer->Id;
        } else {
            // Nếu không tồn tại, thêm thông tin mới vào bảng khách hàng và lấy id của khách hàng mới
            $idkhachhangs = DB::table('khachhang')->insert([
                'Id' => $userId,
                'TenKH' => $hoten,
                'GioiTinh' => $gioitinh,
                'DiaChi' => $diachi,
                'Email' => $email,
                'SDT' => $sdt,
            ]);
        }
        // Thêm hóa đơn mới vào cơ sở dữ liệu
        $hoadonId = DB::table('hoadons')->insertGetId([
            'NgayTao' => $ngaytao,
            'NgayDuyet' => $ngayduyet,
            'TongGia' => $total,
            'Id' => $idkhachhang,
            'TrangThai' => $status,

        ]);
        // Lấy danh sách sản phẩm từ request và thêm vào bảng chi tiết hóa đơn
        // dùng json_decode để giải mã chuỗi json thành mảng để lặp và hiển thị
        $listprd = json_decode($request->input('listprd'), true);
        foreach ($listprd as $product) {
            DB::table('chitiethoadons')->insert([
                'MaHoaDon' => $hoadonId,
                'IDSP' => $product['id'],
                'AnhSanPham' => $product['image'],
                'TenSanPham' => $product['name'],
                'SoLuong' => $product['quantity'],
                'DonGia' => $product['price'],
                'ThanhTien' => $product['tempTotal'],
            ]);
        }
        return redirect('http://127.0.0.1:8000/Pending')->with('success', ' ĐƠN HÀNG ĐÃ ĐƯỢC ĐẶT, VUI LÒNG ĐỢI XÁC NHẬN');
    }

    

    // lấy ra các đơn đang xử lý
    public function GetPending()
    {
        if (session()->has('usernames')) {
            // Lấy MaTaiKhoan từ session
            $userId = session('MaTaiKhoan');
        } else {
            // Người dùng chưa đăng nhập, bạn có thể thực hiện các hành động như yêu cầu họ đăng nhập
            return redirect('/')->with('error', 'Vui lòng đăng nhập để xem hóa đơn.');
        }



        $invoices = DB::table('hoadons')
            ->where('Id', $userId)
            ->whereIn('TrangThai', ['Đang xử lý', 'Yêu cầu hủy'])
            ->get();


        // Lặp qua từng hóa đơn để lấy chi tiết sản phẩm
        foreach ($invoices as $invoice) {
            $details = DB::table('chitiethoadons')
                ->where('MaHoaDon', $invoice->MaHoaDon)
                ->get();

            // Gán danh sách chi tiết sản phẩm vào thuộc tính 'details' của hóa đơn
            $invoice->details = $details;
        }
        // dd($invoice->details);
        // dd($details);
        return view('layouts.pending', ['invoices' => $invoices]);
    }

    // lấy ra đơn đã đặt thành công
    public function GetSuccess()
    {
        if (session()->has('usernames')) {
            // Lấy MaTaiKhoan từ session
            $userId = session('MaTaiKhoan');
        } else {
            // Người dùng chưa đăng nhập, bạn có thể thực hiện các hành động như yêu cầu họ đăng nhập
            return redirect('/')->with('error', 'Vui lòng đăng nhập để xem hóa đơn.');
        }



        $invoices = DB::table('hoadons')
            ->where('Id', $userId)
            ->where('TrangThai', 'Đã xác nhận')
            ->get();

        // Lặp qua từng hóa đơn để lấy chi tiết sản phẩm
        foreach ($invoices as $invoice) {
            $details = DB::table('chitiethoadons')
                ->where('MaHoaDon', $invoice->MaHoaDon)
                ->get();

            // Gán danh sách chi tiết sản phẩm vào thuộc tính 'details' của hóa đơn
            $invoice->details = $details;
        }
        // dd($invoice->details);
        // dd($details);
        return view('layouts.BillSuccess', ['invoices' => $invoices]);
    }

    // lấy ra đơn đã hủy
    public function GetOrderCancel()
    {
        if (session()->has('usernames')) {
            // Lấy MaTaiKhoan từ session
            $userId = session('MaTaiKhoan');
        } else {
            // Người dùng chưa đăng nhập, bạn có thể thực hiện các hành động như yêu cầu họ đăng nhập
            return redirect('/')->with('error', 'Vui lòng đăng nhập để xem hóa đơn.');
        }



        $invoices = DB::table('hoadons')
            ->where('Id', $userId)
            ->where('TrangThai', 'Đã hủy đơn')
            ->get();

        // Lặp qua từng hóa đơn để lấy chi tiết sản phẩm
        foreach ($invoices as $invoice) {
            $details = DB::table('chitiethoadons')
                ->where('MaHoaDon', $invoice->MaHoaDon)
                ->get();

            // Gán danh sách chi tiết sản phẩm vào thuộc tính 'details' của hóa đơn
            $invoice->details = $details;
        }
        // dd($invoice->details);
        // dd($details);
        return view('layouts.DonHuy', ['invoices' => $invoices]);
    }
    // hủy đơn hàng
    public function cancelOrder($id)
    {
        // Sử dụng Query Builder để cập nhật trạng thái đơn hàng
        $updated = DB::table('hoadons')
            ->where('MaHoaDon', $id)
            ->update(['TrangThai' => 'Yêu cầu hủy']);

        // Kiểm tra nếu cập nhật thành công
        if ($updated) {
            return redirect('http://127.0.0.1:8000/Pending')->with('success', 'Đơn hàng đã được yêu cầu hủy.');
        } else {
            return redirect()->back()->with('error', 'Không tìm thấy đơn hàng hoặc cập nhật thất bại.');
        }
    }
    // update trạng thái đơn hàng
    public function updateStatus($id)
    {
        DB::table('hoadons')
            ->where('MaHoaDon', $id)
            ->update([
                'TrangThai' => 'Đã xác nhận',
                'NgayDuyet' => now()
            ]);

        return redirect()->back()->with('success', 'Đơn hàng đã được xác nhận thành công');
    }

    // xác nhận hủy đơn hàng
    public function ConfirmCancelOrder($id)
    {
        DB::table('hoadons')
            ->where('MaHoaDon', $id)
            ->update([
                'TrangThai' => 'Đã hủy đơn',
                'NgayDuyet' => now()
            ]);

        return redirect()->back()->with('success', 'Đơn hàng đã được xác nhận thành công');
    }
    

    // mua lại đơn hàng đã hủy
    public function OrderBillCancel($id)
    {
        // Sử dụng Query Builder để cập nhật trạng thái đơn hàng
        $updated = DB::table('hoadons')
            ->where('MaHoaDon', $id)
            ->update(['TrangThai' => 'Đang xử lý']);

        // Kiểm tra nếu cập nhật thành công
        if ($updated) {
            return redirect('http://127.0.0.1:8000/Pending')->with('success', 'Đơn hàng đã được đặt, chờ xác nhận.');
        } else {
            return redirect()->back()->with('error', 'Không tìm thấy đơn hàng hoặc cập nhật thất bại.');
        }
    }


    // lấy ra đơn hàng mua đã thanh toán
    public function GetBillPaid()
    {
        if (session()->has('usernames')) {
            // Lấy MaTaiKhoan từ session
            $userId = session('MaTaiKhoan');
        } else {
            // Người dùng chưa đăng nhập, bạn có thể thực hiện các hành động như yêu cầu họ đăng nhập
            return redirect('/')->with('error', 'Vui lòng đăng nhập để xem hóa đơn.');
        }



        $invoices = DB::table('hoadons')
            ->where('Id', $userId)
            ->where('TrangThai', 'Đã thanh toán')
            ->get();


        // Lặp qua từng hóa đơn để lấy chi tiết sản phẩm
        foreach ($invoices as $invoice) {
            $details = DB::table('chitiethoadons')
                ->where('MaHoaDon', $invoice->MaHoaDon)
                ->get();

            // Gán danh sách chi tiết sản phẩm vào thuộc tính 'details' của hóa đơn
            $invoice->details = $details;
        }
        // dd($invoice->details);
        // dd($details);
        return view('layouts.BillPaid', ['invoices' => $invoices]);
    }
}
