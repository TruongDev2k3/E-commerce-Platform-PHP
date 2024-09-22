<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/Images/Image/Favicon.png">
    <link rel="stylesheet" href="/CSS/style_home.css">
    <link rel="stylesheet" href="/CSS/style_cart.css">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="https://kit.fontawesome.com/e06076012c.js" crossorigin="anonymous"></script>
    <title>Đã Thanh Toán</title>
</head>
<body>
    <section class="main">
        <div class="list-menu" style="width: 1200px; height:45px; border:solid 1px;">
            <a href="http://127.0.0.1:8000/cart" class="title" style="padding-top:5px;text-decoration: none;width: 239px; height:45px;font-size: 20px;  color:black;float:left;text-align:center;border-right: 1px solid black;">Giỏ hàng &nbsp;<i class="fa-solid fa-cart-shopping"></i></a>
            <a href="http://127.0.0.1:8000/Pending" class="title" style="padding-top:5px;text-decoration: none;width: 239px; height:45px;font-size: 20px; color:black; float:left;text-align:center;border-right: 1px solid;">Chờ xử lý &nbsp;<i class="fa fa-spinner fa-spin"></i></a>
            <a href="http://127.0.0.1:8000/BillSuccess" class="title" style="padding-top:5px;text-decoration: none;width: 239px; height:45px;font-size: 20px; color:black; float:left;text-align:center;border-right: 1px solid;">Đơn đã đặt &nbsp;<i class="fa fa-check"></i></a>
            <a href="http://127.0.0.1:8000/OrderCancel" class="title" style="padding-top:5px;text-decoration: none;width: 239px; height:45px;font-size: 20px; color:black; float:left;text-align:center;border-right: 1px solid;">Đơn đã hủy   &nbsp;<i class="fa-solid fa-xmark"></i></a>
            <a href="http://127.0.0.1:8000/BillPaid" class="title" style="padding-top:5px;text-decoration: none;width: 239px; height:45px;font-size: 20px; color:red; float:left;text-align:center;">Đã thanh toán   &nbsp;<i class="fa fa-check"></i></a>
        </div>
        <div class="row">
            <div class="colf-9 colf-s-12 padding-table" style="padding-left: 0px; width:1300px;">
                @foreach ($invoices as $invoice)
                <h2 style="margin-left: 10px; margin-bottom:10px;margin-top:10px;text-align:left;">Bill ID: {{ $invoice->MaHoaDon }}</h2>

                @if ($invoice->details->isNotEmpty())
                @php
                    $totalAmount = 0;
                @endphp
                <table border="1" style="width:1200px;border-collapse:collapse; margin-left: 10px; height:auto; text-align:center;">
                    <thead>
                        <tr style="text-align:center;">

                            <th class="stt" style="width:220px;height:50px;background-color: #0D6EFD;color:#fff;">Ảnh Sản Phẩm</th>
                            <th class="stt" style="width:620px;background-color: #0D6EFD;color:#fff;">Tên Sản Phẩm</th>
                            <th class="name" style="background-color: #0D6EFD;color:#fff;">Số Lượng</th>
                            <th class="seri" style="width:120px;background-color: #0D6EFD;color:#fff;">Đơn Giá</th>
                            <th class="nameproduct" style="width:120px;background-color: #0D6EFD;color:#fff;">Thành Tiền</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($invoice->details as $detail)
                        <tr style="text-align:center;">

                            <td style="text-align:center;"><img src="{{ $detail->AnhSanPham }}" alt="profile" width="120" height="100"></td>
                            <td style="text-align:center;">{{ $detail->TenSanPham }}</td>
                            <td style="text-align:center;">{{ $detail->SoLuong }}</td>
                            <td style="text-align:center;">{{ number_format((float) $detail->DonGia, 0, ',', '.') }}đ</td>
                            <td style="text-align:center;">{{ number_format((float) $detail->ThanhTien, 0, ',', '.') }}đ</td>

                            @php
                                $totalAmount += (float) $detail->ThanhTien;
                            @endphp

                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <button style="display:block;margin-left:1040px;color:#fff;background-color:#0D6EFD;border: none;line-height: 35px;font-weight: bold;padding: 3px 10px;font-size: 14px;margin-top: 10px;border-radius:3px;color:#fff;">
                    Tổng tiền: {{ number_format($totalAmount, 0, ',', '.') }}đ
                </button>
                <button style="cursor: pointer;float:left;margin-left:970px;color:#fff;background-color:green;;border: none;line-height: 35px;font-weight: bold;padding: 3px 10px;font-size: 14px;margin-top: 10px;border-radius:3px;">
                    <span style="color: #FFF; font-size:15px;">
                        {{ $invoice->TrangThai }} <i class="fa fa-check"></i>
                    </span>

                </button>
                <form action="{{ route('cancel-order', ['id' => $invoice->MaHoaDon]) }}" method="POST" style="display:inline;" onsubmit="return confirmCancel('{{ $invoice->MaHoaDon }}')">
                    @csrf
                    <button type="submit" style="cursor: pointer;margin-left:5px;color:#fff;background-color:red;border: none;line-height: 35px;font-weight: bold;padding: 3px 10px;font-size: 14px;margin-top: 10px;border-radius:3px;">
                        Hủy Đơn Hàng
                    </button>
                </form>
                @else
                <p>Giỏ hàng của bạn trống.</p>
                @endif
                @endforeach
            </div>
        </div>
    </section>
    <script src="/JS/jquery-3.6.0.min.js"></script>
    <script src="/JS/angular.min.js"></script>
    <script src="/JS/global.js"></script>
    <script src="/JS/Product.js"></script>
    <script src="/JS/cart.js"></script>
    <script>
        function confirmCancel(orderId) {
            return confirm(`Bạn có chắc chắn muốn hủy đơn hàng có ID là ${orderId} không?`);
        }
    </script>
</body>
</html>
