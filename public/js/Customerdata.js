var app = angular.module('AppBanHang', []);
/// API GET danh sách khách hàng
app.controller("CustomerCtrl", function ($scope, $http, $window) { 
	$scope.ListCustomer;
    $scope.user = JSON.parse(localStorage.getItem("user")) || {};

    $scope.GetListCustomer = function () {
        if ($scope.user.token && $scope.user.loai === "ADMIN") {
            $http({
                method: 'GET', 
                url: current_url + '/api/KhachHang/getlistkh',
                headers: {
                    'Authorization': 'Bearer ' + $scope.user.token
                }
            }).then(function (response) {  
                $scope.ListCustomer = response.data;  
            });
        } else {
            // Xử lý trường hợp người dùng không có quyền ADMIN
            console.log('Không có quyền truy cập');
            // Ví dụ chuyển hướng đến trang đăng nhập
            // $window.location.href = '/login';
        }
    };   
     

    $scope.GetListCustomer();

    $scope.getPages = function (items, pageSize) {
        var pages = [];
        for (var i = 0; i < items.length; i += pageSize) {
            pages.push(items.slice(i, i + pageSize));
        }
        return pages;
    };


    $scope.fullname = "";
    $scope.gender = "";
    $scope.address = "";
    $scope.phone = "";
    $scope.email = "";
    $scope.filePath = "";
    $scope.fileInputChanged = function (event) {
        // Lấy tên của file
        $scope.filePath = event.target.files[0].name;
        console.log($scope.filePath);
    };
    // console.log($scope.filePath);
    $scope.pushdata = function () {
        
        var loginData = {
            "tenKH": $scope.fullname,
            "gioiTinh": $scope.gender,
            "diaChi": $scope.address,
            "sdt": $scope.phone,
            "email": $scope.email,
        };

        $http({
            method: 'POST',
            url: current_url + '/api/KhachHang/create-kh',
            headers: {
                'Authorization': 'Bearer ' + $scope.user.token
            },
            data: loginData
        }).then(function (response) {
            var data = response.data;
            if (data != null || data.success) {
                alert('Thêm thông tin khách hàng thành công');
                
                $window.location.href = "Customer.html";
            } else {
                alert('Thêm khách hàng không thành công');
            }
        }, function (error) {
            alert(error);
        });
    };

    $scope.getInfoCustomer = function (Customer) {  
        // Lưu thông tin sản phẩm vào localStorage
        var customersInfo = {
            id: Customer.id,
            tenKH: Customer.tenKH,
            gioiTinh: Customer.gioiTinh,
            diaChi: Customer.diaChi,
            sdt: Customer.sdt,
            email: Customer.email,
        };
        
        // Chuyển đối tượng thành chuỗi JSON và lưu vào localStorage
        localStorage.setItem('CustomerInfo', JSON.stringify(customersInfo));
    
        // Thêm logic xử lý khác nếu cần
    };


        // UPDATE KHÁCH HÀNG
    $scope.customerInfo = JSON.parse(localStorage.getItem('CustomerInfo')) || {};
    $scope.updateCustomer = function () {
        // Gọi API cập nhật thông tin khách hàng
        var isConfirmed = confirm('Bạn có chắc chắn muốn cập nhập thông tin không?');
        if (isConfirmed) {
            // Nếu người dùng chọn "OK" trong cửa sổ xác nhận, thực hiện xóa
            $http({
                method: 'PUT',
                url: current_url + '/api/KhachHang/update-kh', // Thay đổi đường dẫn API theo yêu cầu của bạn
                headers: {
                    'Authorization': 'Bearer ' + $scope.user.token
                },
                data: $scope.customerInfo
            }).then(function (response) {
                // Xử lý thành công
                alert('Cập nhật thông tin khách hàng thành công');
                $window.location.href = "Customer.html";
            }, function (error) {
                // Xử lý lỗi
                alert('Lỗi khi cập nhật thông tin khách hàng');
            });
        } else {
            // Nếu người dùng chọn "Cancel", không làm gì cả
            console.log('Xóa đã bị hủy.');
        }
        
    };


    // DELETE CUSTOMERS
    $scope.DeleteCustomer = function (customerId) {
        // Gọi API cập nhật thông tin khách hàng
        var isConfirmed = confirm('Bạn có chắc chắn muốn xóa không?');
        if (isConfirmed) {
            // Nếu người dùng chọn "OK" trong cửa sổ xác nhận, thực hiện xóa
            $http({
                method: 'DELETE',
                url: current_url + '/api/KhachHang/delete-kh/' + customerId, // Thay đổi đường dẫn API theo yêu cầu của bạn
                headers: {
                    'Authorization': 'Bearer ' + $scope.user.token
                },
                data: $scope.customerInfo.id
            }).then(function (response) {
                // Xử lý thành công
                alert('Xóa thông tin khách hàng thành công');
                $window.location.href = "Customer.html";
            }, function (error) {
                // Xử lý lỗi
                alert('Lỗi khi cập nhật thông tin khách hàng');
            });
        } else {
            // Nếu người dùng chọn "Cancel", không làm gì cả
            console.log('Xóa đã bị hủy.');
        }
    };      
});
