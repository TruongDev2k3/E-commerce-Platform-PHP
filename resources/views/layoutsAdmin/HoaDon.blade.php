<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/Images/Image/Favicon.png">
    <title>BILL</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/CSS/admin.css">
    <link rel="stylesheet" href="/CSS/Customers.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
</head>

<body ng-app="AppBanHang" ng-controller="CustomerCtrl">
    <div id="frame">
        <div id="content-page">
            <div class="product">
                <h2 style="color: red;">
                    <i class="fa-solid fa-circle-arrow-right" style="font-size: 30px; color: red; margin-top: 10px; margin-left:20px;"></i>&nbsp;&nbsp;QUẢN LÝ HÓA ĐƠN
                </h2>
                <!-- <a href="./AddCustomer.html" class="btn btn-primary mb-3" style="font-size: 20px; margin-top: 10px; margin-left: 20px; margin-bottom: 10px;">Create Customer</a>
                <a href="./admin.html" class="btn btn-primary mb-3" style="font-size: 20px; margin-top: 10px; margin-left: 20px; margin-bottom: 10px;">Home Page</a> -->
                <div class="dialog overlay" id="my-dialog">
                    <a href="#" class="overlay-close"></a>
                </div>
            </div>
            <table border="1" style="border-collapse: collapse; border: 1px solid #fff; margin-left: 20px; width:1490px; margin-top:20px;">
                <thead>
                    <tr>
                        <th class="stt">IDHD</th>
                        <th class="stt" style="width:120px;">Ngày Tạo</th>
                        <th class="stt" style="width:120px;">Ngày Duyệt</th>
                        <th class="stt" style="width:120px;">Tổng Giá</th>
                        <th class="stt">IDKH</th>
                        <th class="name">Tên khách hàng</th>
                        <th class="seri">Giới tính</th>
                        <th class="nameproduct">Địa chỉ</th>
                        <th class="cate-gory">Số điện thoại</th>
                        <th class="date" style="width:220px;">Email khách hàng</th>
                        <th class="tt" style="width:220px;text-align: center;">Trạng Thái</th>
                        <th class="edit" style="width:230px;">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bills as $customer)
                    <tr>
                        <td>{{ $customer->hoadon_id }}</td>
                        <td>{{ \Carbon\Carbon::parse($customer->NgayTao)->format('d-m-Y') }}</td>
                        <td>{{ \Carbon\Carbon::parse($customer->NgayDuyet)->format('d-m-Y') }}</td>
                        <td>{{ number_format($customer->TongGia, 0, ',', '.') }}đ</td>
                        <td>{{ $customer->khachhang_id }}</td>
                        <td>{{ $customer->TenKH }}</td>
                        <td>{{ $customer->GioiTinh }}</td>
                        <td>{{ $customer->DiaChi }}</td>
                        <td>{{ $customer->SDT }}</td>
                        <td>{{ $customer->Email }}</td>
                        <td>
                            @if ($customer->TrangThai == 'Đang xử lý')
                            <span style="color: red;">
                                {{ $customer->TrangThai }} <i class="fa fa-spinner fa-spin"></i>
                            </span>
                            @elseif ($customer->TrangThai == 'Đã xác nhận')
                            <span style="color: green;">
                                {{ $customer->TrangThai }} <i class="fa fa-check"></i>
                            </span>
                            @elseif ($customer->TrangThai == 'Yêu cầu hủy')
                            <span style="color: red;">
                                {{ $customer->TrangThai }} <i class="fa fa-spinner fa-spin"></i>
                            </span>
                            @elseif ($customer->TrangThai == 'Đã thanh toán')
                            <span style="color: green;">
                                {{ $customer->TrangThai }} <i class="fa fa-check"></i>
                            </span>
                            @else
                            {{ $customer->TrangThai }}
                            @endif
                        </td>
                        <td>
                            @if ($customer->TrangThai == 'Đang xử lý')
                            <form id="update-form-{{ $customer->hoadon_id }}" action="{{ route('updateStatus', $customer->hoadon_id) }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="button" class="btn btn-primary btn-sm" style="width:95px; margin: 5px; font-size: 15px;text-align:center;" onclick="confirmUpdate(<?php echo $customer->hoadon_id; ?>)">Xác Nhận</button>
                            </form>
                            @elseif ($customer->TrangThai == 'Yêu cầu hủy')
                            <form id="cancel-form-{{ $customer->hoadon_id }}" action="{{ route('ConfirmCancelOrder', $customer->hoadon_id) }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="button" class="btn btn-primary btn-sm" style="width:95px; margin: 5px; font-size: 15px;text-align:center;" onclick="confirmCancel(<?php echo $customer->hoadon_id; ?>)">Hủy ĐH</button>
                            </form>
                            @endif
                            <a href="/customer/DetailsBill/{{ $customer->hoadon_id }}" class="btn btn-danger btn-sm" role="button" style="margin-left:5px;font-size: 15px;width:65px;text-align:center;">DETAIL</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
        function confirmUpdate(id) {
            if (confirm('Xác nhận đơn hàng có mã đơn hàng là ' + id + ' ?')) {
                document.getElementById('update-form-' + id).submit();
            }
        }
        function confirmCancel(id) {
            if (confirm('Xác nhận hủy đơn hàng có mã đơn hàng là ' + id + ' ?')) {
                document.getElementById('cancel-form-' + id).submit();
            }
        }
    </script>

    <script src="/JS/admin.js"></script>
    <script src="/JS/jquery-3.6.0.min.js"></script>
    <script src="/JS/angular.min.js"></script>
    <script src="/JS/global.js"></script>
    <script src="/JS/Customerdata.js"></script>
</body>

</html>