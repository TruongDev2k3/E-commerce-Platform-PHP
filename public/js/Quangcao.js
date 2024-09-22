var app = angular.module('AppBanHang', []);
app.controller("QuangCaoCtrl", function ($scope, $http) { 
	$scope.ListQC;	
    $scope.GetQuangCao= function () {
        $http({
            method: 'GET', 
            url: current_url + '/api/QuangCao/getlistQC',
        }).then(function (response) {  
            debugger;
            $scope.ListQC = response.data;  
        });
    };   
	$scope.GetQuangCao();

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
        $scope.anhDaiDien = response.data.filePath;
        localStorage.setItem('imagePaths', $scope.anhDaiDien);
        
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
    $scope.AddQuangCao = function () {
        $scope.uploadFile();
        console.log($scope.anhDaiDien)
    // Gọi API cập nhật thông tin khách hàng
    var isConfirmed = confirm('Bạn có chắc chắn muốn cập nhập thông tin không?');
    if (isConfirmed) {
        $scope.anhDaiDien = localStorage.getItem('imagePaths') || {};
        $scope.linkQuangCao ;
        $scope.moTa ;
        var loginData = {
            "anhDaiDien": $scope.anhDaiDien,
            "linkQuangCao": $scope.linkQuangCao,
            "moTa": $scope.moTa   
    };
        // Nếu người dùng chọn "OK" trong cửa sổ xác nhận, thực hiện xóa
        $http({
            method: 'POST',
            url: current_url + '/api/QuangCao/create-qc', // Thay đổi đường dẫn API theo yêu cầu của bạn
            // headers: {
            //     'Authorization': 'Bearer ' + $scope.user.token
            // },
            data: loginData
        }).then(function (response) {
            // Xử lý thành công
            alert('Thêm thông tin quảng cáo thành công!');
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
$scope.getInfoQC = function (qc) {
    // Lưu thông tin sản phẩm vào localStorage
    var qcInfo = {
        id: qc.id,
        anhDaiDien: qc.anhDaiDien,
        linkQuangCao: qc.linkQuangCao,
        moTa: qc.moTa
    };

    // Chuyển đối tượng thành chuỗi JSON và lưu vào localStorage
    localStorage.setItem('qcInfo', JSON.stringify(qcInfo));

    // Thực hiện các logic xử lý khác nếu cần
};

$scope.QCInfo = JSON.parse(localStorage.getItem('qcInfo')) || {}; 

// $scope.ProductInfo.imgproduct = localStorage.getItem('imagePath') || {};
$scope.updateQC = function () {
// Gọi API cập nhật thông tin khách hàng
    $scope.uploadFile();
    $scope.QCInfo.anhDaiDien = localStorage.getItem('imagePaths') || {};


var isConfirmed = confirm('Bạn có chắc chắn muốn cập nhập thông tin không?');
if (isConfirmed) {

    // Nếu người dùng chọn "OK" trong cửa sổ xác nhận, thực hiện xóa
    $http({
        method: 'PUT',
        url: current_url + '/api/QuangCao/update-qc', // Thay đổi đường dẫn API theo yêu cầu của bạn
        // headers: {
        //     'Authorization': 'Bearer ' + $scope.user.token
        // },
        data: $scope.QCInfo
    }).then(function (response) {
        // Xử lý thành công
        alert('Cập nhật thông tin quảng cáo thành công');
        
    }, function (error) {
        // Xử lý lỗi
        alert('Lỗi khi cập nhật thông tin khách hàng');
    });
} else {
    // Nếu người dùng chọn "Cancel", không làm gì cả
    console.log('Xóa đã bị hủy.');
}

};
$scope.DeleteQC = function (qcid) {
// Gọi API cập nhật thông tin khách hàng
var isConfirmed = confirm('Bạn có chắc chắn muốn xóa không?');
if (isConfirmed) {
    // Nếu người dùng chọn "OK" trong cửa sổ xác nhận, thực hiện xóa
    $http({
        method: 'DELETE',
        url: current_url + '/api/QuangCao/delete-qc/' + qcid, // Thay đổi đường dẫn API theo yêu cầu của bạn
        // headers: {
        //     'Authorization': 'Bearer ' + $scope.user.token
        // },
        data: $scope.QCInfo.id
    }).then(function (response) {
        // Xử lý thành công
        alert('Xóa thông tin sản phẩm thành công');
        $window.location.href = "QuangCao.html";
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