var myApp = angular.module('myApp', []);

myApp.controller('myController', ['$scope', '$http','$window', function ($scope, $http, $window) {


    $scope.ListACC;	
    $scope.GetAcc= function () {
        $http({
            method: 'GET', 
            url: current_url + '/api/Account/getlistacc',
        }).then(function (response) {  
            debugger;
            $scope.ListACC = response.data;  
        });
    };   
	$scope.GetAcc();

    $scope.getPages = function (items, pageSize) {
        var pages = [];
        for (var i = 0; i < items.length; i += pageSize) {
            pages.push(items.slice(i, i + pageSize));
        }
        return pages;
    }; 
       
        $scope.AddAcc = function () {
        // Gọi API cập nhật thông tin khách hàng
        var isConfirmed = confirm('Bạn có chắc chắn muốn cập nhập thông tin không?');
        if (isConfirmed) {
            $scope.maTaiKhoan;
            $scope.maLoai ;
            $scope.tenTaiKhoan ;
            $scope.matKhau ;
            $scope.email ;
            $scope.loai;
            var loginData = {
                "maLoai": 2,
                "tenTaiKhoan": $scope.tenTaiKhoan,
                "matKhau": $scope.matkhau,
                "email": $scope.email,
                "loai": "USER"
            };
            // Nếu người dùng chọn "OK" trong cửa sổ xác nhận, thực hiện xóa
            $http({
                method: 'POST',
                url: current_url + '/api/Account/create-acc', // Thay đổi đường dẫn API theo yêu cầu của bạn
                // headers: {
                //     'Authorization': 'Bearer ' + $scope.user.token
                // },
                data: loginData
            }).then(function (response) {
                // Xử lý thành công
                alert('Thêm thông tin tài khoản thành công!');
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
        

    $scope.getInfoAcc = function (acc) {
        // Lưu thông tin sản phẩm vào localStorage
        var accInfo = {
            maTaiKhoan: acc.maTaiKhoan,
            maLoai: acc.maLoai,
            tenTaiKhoan: acc.tenTaiKhoan,
            matKhau: acc.matKhau,
            email: acc.email,
            loai : acc.loai
        };
    
        // Chuyển đối tượng thành chuỗi JSON và lưu vào localStorage
        localStorage.setItem('accInfo', JSON.stringify(accInfo));
    
        // Thực hiện các logic xử lý khác nếu cần
    };

    $scope.accInfo = JSON.parse(localStorage.getItem('accInfo')) || {}; 
    
    // $scope.ProductInfo.imgproduct = localStorage.getItem('imagePath') || {};
    $scope.updateAcc = function () {

    var isConfirmed = confirm('Bạn có chắc chắn muốn cập nhập thông tin không?');
    if (isConfirmed) {

        // Nếu người dùng chọn "OK" trong cửa sổ xác nhận, thực hiện xóa
        $http({
            method: 'PUT',
            url: current_url + '/api/Account/update-acc', // Thay đổi đường dẫn API theo yêu cầu của bạn
            // headers: {
            //     'Authorization': 'Bearer ' + $scope.user.token
            // },
            data: $scope.accInfo
        }).then(function (response) {
            // Xử lý thành công
            alert('Cập nhật thông tin tài khoản thành công');
            $window.location.href = "ListAccount.html";
        }, function (error) {
            // Xử lý lỗi
            alert('Lỗi khi cập nhật thông tin khách hàng');
        });
    } else {
        // Nếu người dùng chọn "Cancel", không làm gì cả
        console.log('Xóa đã bị hủy.');
    }
    
};
    $scope.DeleteAcc = function (accid) {
    // Gọi API cập nhật thông tin khách hàng
    var isConfirmed = confirm('Bạn có chắc chắn muốn xóa không?');
    if (isConfirmed) {
        // Nếu người dùng chọn "OK" trong cửa sổ xác nhận, thực hiện xóa
        $http({
            method: 'DELETE',
            url: current_url + '/api/Account/delete-acc/' + accid, // Thay đổi đường dẫn API theo yêu cầu của bạn
            // headers: {
            //     'Authorization': 'Bearer ' + $scope.user.token
            // },
            data: $scope.accInfo.maTaiKhoan
        }).then(function (response) {
            // Xử lý thành công
            alert('Xóa thông tin tài khoản thành công');
            $window.location.href = "ListAccount.html";
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
