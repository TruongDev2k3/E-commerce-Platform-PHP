var myApp = angular.module('myApp', []);

myApp.controller('myController', ['$scope', '$http','$window', function ($scope, $http, $window) {


    $scope.ListProduct;
    $scope.user = JSON.parse(localStorage.getItem("user")) || {};

    $scope.GetListProduct = function () {
        if ($scope.user.token && $scope.user.loai === "ADMIN") {
            $http({
                method: 'GET', 
                url: current_url + '/api/Product/getlistsp',
                headers: {
                    'Authorization': 'Bearer ' + $scope.user.token
                }
            }).then(function (response) {  
                $scope.ListProduct = response.data;  
            });
        } else {
            // Xử lý trường hợp người dùng không có quyền ADMIN
            console.log('Không có quyền truy cập');
            // Ví dụ chuyển hướng đến trang đăng nhập
            // $window.location.href = '/login';
        }
    };   
     

    $scope.GetListProduct();

    $scope.getPages = function (items, pageSize) {
        var pages = [];
        for (var i = 0; i < items.length; i += pageSize) {
            pages.push(items.slice(i, i + pageSize));
        }
        return pages;
    };
    
    $scope.uploadFile = function () {
        
        
        if (!$scope.file) {
            console.error('Chưa chọn tệp tin.');
            return;
        }

        var formData = new FormData();
        formData.append('file', $scope.file);

        $http.post('https://localhost:7077/api/Product/upload', formData, {
        transformRequest: angular.identity,
        headers: {
            'Content-Type': undefined
        }
    }).then(function (response) {
        // Phần upload ảnh thành công
        $scope.anhSanPham = response.data.filePath;
        localStorage.setItem('imagePath', $scope.anhSanPham);
        
        // Gọi API để tạo sản phẩm
        
    }, function (error) {
        $scope.resultMessage = 'Lỗi khi tải lên tệp: ' + error.data;
    });
        
    };

    


    
    $scope.setFile = function (element) {
        $scope.$apply(function () {
            $scope.file = element.files[0];
    
            // Cập nhật xem trước ảnh
            if ($scope.file) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById('imagePreview').src = e.target.result;
                };
                reader.readAsDataURL($scope.file);
            }
        });
    };
    
    
        $scope.imgproduct = localStorage.getItem('imagePath') || {};
        $scope.AddProduct = function () {
            $scope.uploadFile();
            console.log($scope.imgproduct)
        // Gọi API cập nhật thông tin khách hàng
        var isConfirmed = confirm('Bạn có chắc chắn muốn cập nhập thông tin không?');
        if (isConfirmed) {
            $scope.maChuyenMuc;
            $scope.tenSanPham ;
            $scope.imgproduct = localStorage.getItem('imagePath') || {};
            $scope.gia ;
            $scope.giaGiam ;
            $scope.soLuong ;
            $scope.soLuongDaBan;
            var loginData = {
            "maChuyenMuc": $scope.maChuyenMuc,
            "tenSanPham": $scope.tenSanPham,
            "anhSanPham": $scope.imgproduct,
            "gia": $scope.gia,
            "giaGiam": $scope.giaGiam,
            "soLuong": $scope.soLuong,
            "soLuongDaBan": $scope.soLuongDaBan
        };
            // Nếu người dùng chọn "OK" trong cửa sổ xác nhận, thực hiện xóa
            $http({
                method: 'POST',
                url: current_url + '/api/Product/create-product', // Thay đổi đường dẫn API theo yêu cầu của bạn
                // headers: {
                //     'Authorization': 'Bearer ' + $scope.user.token
                // },
                data: loginData
            }).then(function (response) {
                // Xử lý thành công
                alert('Thêm thông tin sản phẩm thành công!');
                // $window.location.href = "Product.html";
                // $window.location.href = "Customer.html";
            }, function (error) {
                // Xử lý lỗi
                alert('Lỗi khi cập nhật thông tin sản phẩm');
            });
        } else {
            // Nếu người dùng chọn "Cancel", không làm gì cả
            console.log('Xóa đã bị hủy.');
        }
        
    };
        

    $scope.getInfoProduct = function (product) {
        // Lưu thông tin sản phẩm vào localStorage
        var productInfo = {
            maSanPham: product.maSanPham,
            maChuyenMuc: product.maChuyenMuc,
            tenSanPham: product.tenSanPham,
            anhSanPham: product.anhSanPham,
            gia: product.gia,
            giaGiam: product.giaGiam,
            soLuong: product.soLuong,
            soLuongDaBan: product.soLuongDaBan
        };
    
        // Chuyển đối tượng thành chuỗi JSON và lưu vào localStorage
        localStorage.setItem('ProductInfo', JSON.stringify(productInfo));
    
        // Thực hiện các logic xử lý khác nếu cần
    };

    $scope.ProductInfo = JSON.parse(localStorage.getItem('ProductInfo')) || {}; 
    
    // $scope.ProductInfo.imgproduct = localStorage.getItem('imagePath') || {};
    $scope.updateProduct = function () {
    // Gọi API cập nhật thông tin khách hàng
    $scope.ProductInfo.anhSanPham = localStorage.getItem('imagePath') || {};
    $scope.uploadFile();

    var isConfirmed = confirm('Bạn có chắc chắn muốn cập nhập thông tin không?');
    if (isConfirmed) {
            console.log('ProductInfo:', $scope.ProductInfo); 
            console.log('$scope.ProductInfo.anhSanPham:', $scope.ProductInfo.anhSanPham);
        // Nếu người dùng chọn "OK" trong cửa sổ xác nhận, thực hiện xóa
        $http({
            method: 'PUT',
            url: current_url + '/api/Product/update-product', // Thay đổi đường dẫn API theo yêu cầu của bạn
            // headers: {
            //     'Authorization': 'Bearer ' + $scope.user.token
            // },
            data: $scope.ProductInfo
        }).then(function (response) {
            // Xử lý thành công
            alert('Cập nhật thông tin sản phẩm thành công');
            $window.location.href = "Product.html";
        }, function (error) {
            // Xử lý lỗi
            alert('Lỗi khi cập nhật thông tin khách hàng');
        });
    } else {
        // Nếu người dùng chọn "Cancel", không làm gì cả
        console.log('Xóa đã bị hủy.');
    }
    
};
    $scope.DeleteProduct = function (ProductId) {
    // Gọi API cập nhật thông tin khách hàng
    var isConfirmed = confirm('Bạn có chắc chắn muốn xóa không?');
    if (isConfirmed) {
        // Nếu người dùng chọn "OK" trong cửa sổ xác nhận, thực hiện xóa
        $http({
            method: 'DELETE',
            url: current_url + '/api/Product/delete-product/' + ProductId, // Thay đổi đường dẫn API theo yêu cầu của bạn
            // headers: {
            //     'Authorization': 'Bearer ' + $scope.user.token
            // },
            data: $scope.ProductInfo.maSanPham
        }).then(function (response) {
            // Xử lý thành công
            alert('Xóa thông tin sản phẩm thành công');
            $window.location.href = "Product.html";
        }, function (error) {
            // Xử lý lỗi
            alert('Lỗi khi cập nhật thông tin khách hàng');
        });
    } else {
        // Nếu người dùng chọn "Cancel", không làm gì cả
        console.log('Xóa đã bị hủy.');
    }
}; 
}]);
