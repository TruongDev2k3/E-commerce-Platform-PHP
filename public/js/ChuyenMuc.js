var myApp = angular.module('myApp', []);

myApp.controller('myController', ['$scope', '$http','$window', function ($scope, $http, $window) {


    $scope.ListProduct;
    $scope.user = JSON.parse(localStorage.getItem("user")) || {};

    $scope.GetListCM = function () {
        
            $http({
                method: 'GET', 
                url: current_url + '/api/ChuyenMuc/getlistCM',
                // headers: {
                //     'Authorization': 'Bearer ' + $scope.user.token
                // }
            }).then(function (response) {  
                $scope.ListCM = response.data;  
            });
        } 
      
     

    $scope.GetListCM();

    $scope.getPages = function (items, pageSize) {
        var pages = [];
        for (var i = 0; i < items.length; i += pageSize) {
            pages.push(items.slice(i, i + pageSize));
        }
        return pages;
    };
    
    $scope.getInfoCM = function (cm) {
        // Lưu thông tin sản phẩm vào localStorage
        var ChuyenMucInfo = {
            maChuyenMuc: cm.maChuyenMuc,
            maChuyenMucCha: cm.maChuyenMucCha,
            tenChuyenMuc: cm.tenChuyenMuc,
            noiDung: cm.noiDung
        };
    
        // Chuyển đối tượng thành chuỗi JSON và lưu vào localStorage
        localStorage.setItem('ChuyenMucInfos', JSON.stringify(ChuyenMucInfo));
    
        // Thực hiện các logic xử lý khác nếu cần
    };
    $scope.ChuyenMucInfos = JSON.parse(localStorage.getItem('ChuyenMucInfos')) || {};

    $scope.AddCM = function () {

    var isConfirmed = confirm('Bạn có chắc chắn muốn cập nhập thông tin không?');
    if (isConfirmed) {
        $scope.maChuyenMuc;
        $scope.maChuyenMucCha ;
        $scope.tenChuyenMuc ;
        $scope.noiDung ;

        var CMData = {
            "maChuyenMuc": $scope.maChuyenMuc,
            "maChuyenMucCha": $scope.maChuyenMucCha,
            "tenChuyenMuc": $scope.tenChuyenMuc,
            "noiDung": $scope.noiDung
    };
        // Nếu người dùng chọn "OK" trong cửa sổ xác nhận, thực hiện xóa
        $http({
            method: 'POST',
            url: current_url + '/api/ChuyenMuc/create-cm', // Thay đổi đường dẫn API theo yêu cầu của bạn
            // headers: {
            //     'Authorization': 'Bearer ' + $scope.user.token
            // },
            data: CMData
        }).then(function (response) {
            // Xử lý thành công
            alert('Thêm thông tin danh mục thành công!');
            $window.location.href = "DanhMuc.html";
            // $window.location.href = "Customer.html";
        }, function (error) {
            // Xử lý lỗi
            alert('Lỗi khi cập nhật thông tin danh mục');
        });
    } else {
        // Nếu người dùng chọn "Cancel", không làm gì cả
        console.log('Xóa đã bị hủy.');
    }
    
};
    $scope.updateCM = function () { 
        var isConfirmed = confirm('Bạn có chắc chắn muốn cập nhập thông tin không?');
        if (isConfirmed) {
            $http({
                method: 'PUT',
                url: current_url + '/api/ChuyenMuc/update-cm', // Thay đổi đường dẫn API theo yêu cầu của bạn
                // headers: {
                //     'Authorization': 'Bearer ' + $scope.user.token
                // },
                data: $scope.ChuyenMucInfos
            }).then(function (response) {
                // Xử lý thành công
                alert('Cập nhật thông tin danh mục thành công');
                $window.location.href = "DanhMuc.html";
            }, function (error) {
                // Xử lý lỗi
                alert('Lỗi khi cập nhật thông tin danh mục');
            });
        } else {
            // Nếu người dùng chọn "Cancel", không làm gì cả
            console.log('Xóa đã bị hủy.');
        }
        
    };

    $scope.DeleteCM = function (CMId) {
        // Gọi API cập nhật thông tin khách hàng
        var isConfirmed = confirm('Bạn có chắc chắn muốn xóa không?');
        if (isConfirmed) {
            // Nếu người dùng chọn "OK" trong cửa sổ xác nhận, thực hiện xóa
            $http({
                method: 'DELETE',
                url: current_url + '/api/ChuyenMuc/delete-cm/' + CMId, 
                // headers: {
                //     'Authorization': 'Bearer ' + $scope.user.token
                // },
                data: $scope.ChuyenMucInfos.maChuyenMuc
            }).then(function (response) {
                // Xử lý thành công
                alert('Xóa thông tin chuyên mục thành công');
                $window.location.href = "DanhMuc.html";
            }, function (error) {
                // Xử lý lỗi
                alert('Lỗi khi cập nhật thông tin chuyên mục');
            });
        } else {
            // Nếu người dùng chọn "Cancel", không làm gì cả
            console.log('Xóa đã bị hủy.');
        }
    }; 
}]);