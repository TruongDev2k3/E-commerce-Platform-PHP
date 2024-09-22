<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/Images/Image/Favicon.png">
    <title>Details Bill</title>
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
                <h2> <i class="fa-solid fa-circle-arrow-right" style="font-size: 30px; color: blue; margin-top: 10px;"></i>&nbsp;&nbsp;CHI TIẾT HÓA ĐƠN</h2>
                <a href="./AddCustomer.html" class="btn btn-primary mb-3" style="font-size: 20px;  margin-top: 10px; margin-left: 20px; margin-bottom: 10px;"> Create Customer</a>
                <a href="./admin.html" class="btn btn-primary mb-3" style="font-size: 20px;  margin-top: 10px; margin-left: 20px; margin-bottom: 10px;">Home Page </a>
                <div class="dialog overlay" id="my-dialog">
                    <a href="#" class="overlay-close"></a>
                </div>

            </div>
            <table border="1" style="border-collapse: collapse; border: 1px solid #fff; margin-left: 20px; ">
                <thead>
                    <tr>
                        <th class="stt" style="width:120px;">IDCTHD</th>
                        <th class="stt"style="width:120px;">MaHoaDon</th>
                        <th class="stt"style="width:120px;">IDSP</th>
                        <th class="stt" style="width:220px;">AnhSanPham</th>
                        <th class="stt" style="width:500px;">TenSanPham</th>
                        <th class="name">SoLuong</th>
                        <th class="seri" style="width:120px;">DonGia</th>
                        <th class="nameproduct" style="width:120px;">ThanhTien</th>
                        
                        <th class="edit" style="width:190px;">Thao tác</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($chitietHoaDon as $customer)
                    <tr>
                        <td>{{ $customer->MaChiTietHoaDon }}</td>
                        <td>{{ $customer->MaHoaDon }}</td>
                        <td>{{ $customer->IDSP }}</td>
                        <td><img src="{{ $customer->AnhSanPham }}" alt="profile" width="120" height="100"></td>

                        <td>{{ $customer->TenSanPham }}</td>
                        <td>{{ $customer->SoLuong }}</td>
                        <td>{{ number_format((float) str_replace('đ', '', $customer->DonGia), 0, ',', '.') }}đ</td>
<td>{{ number_format((float) str_replace('đ', '', $customer->ThanhTien), 0, ',', '.') }}đ</td>

                        
                        <td>
                            <a href="./UpdateCustomer.html" class="btn btn-primary btn-sm" style="width:65px; margin: 5px; font-size: 15px;" role="button">Edit</a>
                            <a href="./DeleteCustomer.html" class="btn btn-danger btn-sm" role="button" style="font-size: 15px;">Delete</a>
                            
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
    <script src="/JS/admin.js"></script>
    <script src="/JS/jquery-3.6.0.min.js"></script>
    <script src="/JS/angular.min.js"></script>
    <script src="/JS/global.js"></script>
    <script src="/JS/Customerdata.js"></script>

</body>

</html>