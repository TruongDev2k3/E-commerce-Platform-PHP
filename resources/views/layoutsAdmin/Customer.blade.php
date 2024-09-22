
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/Images/Image/Favicon.png">
    <title>Customers</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/CSS/admin.css">
    <link rel="stylesheet" href="/CSS/Customers.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
</head>
<body ng-app="AppBanHang" ng-controller ="CustomerCtrl">
    <div id="frame">
        
        <div id="content-page">
            
            <div class="product">
                <h2> <i class="fa-solid fa-circle-arrow-right" style="font-size: 30px; color: blue; margin-top: 10px;"></i>&nbsp;&nbsp;QUẢN LÝ KHÁCH HÀNG</h2>
                <a href="./AddCustomer.html" class="btn btn-primary mb-3" style="font-size: 20px;  margin-top: 10px; margin-left: 20px; margin-bottom: 10px;"> Create Customer</a>
                <a href="./admin.html" class="btn btn-primary mb-3" style="font-size: 20px;  margin-top: 10px; margin-left: 20px; margin-bottom: 10px;">Home Page </a>
                <div class="dialog overlay" id="my-dialog">
                 <a href="#" class="overlay-close"></a>             
             </div>
                
           </div>
            <table border="1" style="border-collapse: collapse; border: 1px solid #fff; margin-left: 20px; ">
                <thead>
                  <tr>
                    <th class="stt">ID</th>                   
                    <th class="name">Tên khách hàng</th>
                    <th class="seri">Giới tính</th>
                    <th class="nameproduct">Địa chỉ</th>
                    <th class="cate-gory">Số điện thoại</th>
                    <th class="date">Email khách hàng</th>
                    <th class="edit" style="width:190px;">Thao tác</th>
                    
                  </tr>
                </thead>
                <tbody>  
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer->Id }}</td>
                        <td>{{ $customer->TenKH }}</td>
                        <td>{{ $customer->GioiTinh }}</td>
                        <td>{{ $customer->DiaChi }}</td>
                        <td>{{ $customer->Email }}</td>
                        <td>{{ $customer->SDT }}</td>
                        <td>
                            <a href="./UpdateCustomer.html" class="btn btn-primary btn-sm" style="width:65px; margin: 5px; font-size: 15px;" role="button" >Edit</a>
                            <a  href="./DeleteCustomer.html" class="btn btn-danger btn-sm" role="button" style="font-size: 15px;width:65px;">Delete</a>
                            <a  href="/customer/{{ $customer->Id }}" class="btn btn-danger btn-sm" role="button" style="font-size: 15px;width:65px;margin-left:10px;">BILL</a>
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