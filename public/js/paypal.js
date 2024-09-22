var app = angular.module('AppBanHang', []);

app.controller("CustomerCtrl", function ($scope, $http, $window) { 
    // Lấy danh sách sản phẩm từ local storage
    var listProduct = JSON.parse(localStorage.getItem('ListProductCarts')) || [];

    // Khởi tạo biến để tính tổng giá giảm
    var totalGiaGiam = 0;

    // Duyệt qua từng sản phẩm trong danh sách
    listProduct.forEach(function(product) {
        // Kiểm tra xem sản phẩm có giá giảm không
        if (product.giaGiam) {
            // Tính tổng giá giảm cho từng sản phẩm
            totalGiaGiam += product.giaGiam * product.soluong;
        }
    });

    console.log(totalGiaGiam.toLocaleString());
    
    // Gán giá trị tổng giá giảm cho $scope.tongGia
    $scope.tongGia = totalGiaGiam;
    console.log($scope.tongGia);
    $scope.txt_hoten = "";
    $scope.gender = "";
    $scope.txt_diachi = "";
    $scope.txt_sdt = "";
    $scope.txt_email = "";
    $scope.listProduct = localStorage.getItem("ListProductCarts");

    
    $scope.pushdata = function () {
        // Kiểm tra xem các trường thông tin có được nhập đầy đủ không
        if (!$scope.txt_hoten || !$scope.gender || !$scope.txt_diachi || !$scope.txt_sdt || !$scope.txt_email) {
            alert('Vui lòng nhập đầy đủ thông tin');
            return;
        }

        // Kiểm tra định dạng số điện thoại
        var phoneRegex = /^[0-9]{10}$/;
        if (!phoneRegex.test($scope.txt_sdt)) {
            alert('Số điện thoại không hợp lệ. Vui lòng nhập 10 số.');
            return;
        }

        // Kiểm tra định dạng email
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test($scope.txt_email)) {
            alert('Email không hợp lệ. Vui lòng nhập đúng định dạng.');
            return;
        }
        var loginData = {
            "tenKH": $scope.txt_hoten,
            "gioiTinh": $scope.gender,
            "diaChi": $scope.txt_diachi,
            "sdt": $scope.txt_sdt,
            "email": $scope.txt_email,
            "tongGia": $scope.tongGia,
            "listProduct": $scope.listProduct
        };

        $http({
            method: 'POST',
            url: 'https://localhost:7077/api/Order',
            data: loginData
        }).then(function (response) {
            var data = response.data;
            if (data != null || data.success) {
                alert('Đặt hàng thành công');
                localStorage.removeItem('ListProductCarts');
                $window.location.href = "MACBOOK.html";
            } else {
                alert('Thêm khách hàng không thành công');
            }
        }, function (error) {
            alert('Vui lòng nhập thông tin khách hàng hợp lệ');
        });
    };
});
