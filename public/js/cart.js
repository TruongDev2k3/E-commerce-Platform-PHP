var app = angular.module('cartapp', []); // Đảm bảo bạn đã khai báo một ứng dụng Angular với tên 'yourAppName'

// app.controller('CartCtrl', function($scope) {
//     $scope.addToCart = function(product) {
//         var productImg = product.anhSanPham.src;
//         var productName = product.tenSanPham;
//         var productPrice = product.giaGiam;

//         // Bạn có thể sử dụng thông tin đã trích xuất theo cách cần
//         console.log(productName, productImg, productPrice);
//         // Thêm vào giỏ hàng hoặc thực hiện các hành động khác ở đây
//     };
// });

app.controller("IphoneCtrl", function ($scope, $http) { 
	$scope.ListPrdIp;	 
    $scope.GetListPrdIp= function () {
        $http({
            method: 'GET', 
            url: current_url + '/api/Product/getlistspip',
        }).then(function (response) {  
            debugger;
            $scope.ListPrdIp = response.data;  
        });
    };   
	$scope.GetListPrdIp();

    $scope.getPages = function (items, pageSize) {
        var pages = [];
        for (var i = 0; i < items.length; i += pageSize) {
            pages.push(items.slice(i, i + pageSize));
        }
        return pages;
    };
   
});
app.controller('IphoneCtrl', function ($scope, $http, $timeout) {
    $scope.ListPrdIp;	
    $scope.GetListPrdIp = function () {
        $http({
            method: 'GET',
            url: current_url + '/api/Product/getlistspip',
        }).then(function (response) {
            $scope.ListPrdIp = response.data;          
        });
    };

    $scope.GetListPrdIp();
    $scope.getPages = function (items, pageSize) {
        var pages = [];
        for (var i = 0; i < items.length; i += pageSize) {
            pages.push(items.slice(i, i + pageSize));
        }
        return pages;
    };
});


var list = JSON.parse(localStorage.getItem('ListProductCarts'));

// Hàm LoadData() dùng để hiển thị dữ liệu giỏ hàng lên trang HTML
function LoadData() {
    var str = ""; // Chuỗi HTML sẽ được xây dựng để hiển thị thông tin sản phẩm
    var tTamTinh = 0; // Biến để tính tổng tạm tính của giỏ hàng
    var tTongTien = 0; // Biến để tính tổng tiền của giỏ hàng

    // Lấy danh sách sản phẩm từ local storage, nếu không có thì sử dụng mảng rỗng
    var list = JSON.parse(localStorage.getItem('ListProductCarts')) || [];

    // Duyệt qua từng sản phẩm trong danh sách
    list.forEach(function (product) {
        // Trích xuất thông tin từ đối tượng sản phẩm
        var anhSanPham = product.anhSanPham || ''; // Đặt giá trị mặc định nếu không có ảnh sản phẩm
        var tenSanPham = product.tenSanPham || ''; // Đặt giá trị mặc định nếu không có tên sản phẩm
        var giaGiam = product.giaGiam || 0; // Đặt giá trị mặc định nếu không có giá giảm
         // Số lượng sản phẩm, ở đây mặc định là 1
        var soluong = product.soluong;
        // Tính tạm tính cho từng sản phẩm
        var tamTinh = giaGiam * soluong;

        // Tính tổng tiền tạm tính và tổng tiền
        tTamTinh += tamTinh;
        tTongTien += tamTinh;

        // Chuyển đổi giá tiền sang chuỗi có dấu phẩy để hiển thị
        var giaGiamFormatted = giaGiam.toLocaleString();

        // Xây dựng chuỗi HTML cho mỗi sản phẩm
        str += `<tr>
                    <td><i onclick="Xoa(${product.id})" class="fa fa-times-circle" style="font-size:30px;color:red;cursor: pointer;" title="Xóa"></i></td>
                    <td><img style="width: 50px; height: 50px;" src="${anhSanPham}"></td>
                    <td>${tenSanPham}</td>
                    <td>${giaGiamFormatted}đ</td>
                    <td> 
                        <button onclick="Giam(${product.id})" style="border: 1px solid #dbdbdb;padding: 4px 8px;">-</button>
                        <input id="q_${Number(product.id)}" onchange="updateQuantity(${product.id})" type="text" value="${product.soluong}" style="width: 35px;border: 1px solid #dbdbdb;padding: 4px;margin-left: -5px;margin-right: -5px;">
                        <button onclick="Tang(${product.id})" style="border: 1px solid #dbdbdb;padding: 4px 8px;">+</button>
                    </td>
                    <td>${tamTinh.toLocaleString()}đ</td>
                </tr>`;
    });

    // Hiển thị dữ liệu trong bảng của trang HTML
    document.getElementById("listCart").innerHTML = str;

    // Hiển thị tổng tạm tính và tổng tiền
    $("#spTong").text(tTamTinh.toLocaleString());
    $("#tTong").text(tTongTien.toLocaleString());
}

function updateCart() {
    localStorage.setItem('cart', JSON.stringify(list));
    LoadData();
    alert("Đã cập nhật thông tin giỏ hàng thành công!");
}
function Xoa(id) {
    // Hiển thị xác nhận từ người dùng trước khi thực hiện xóa
    if (confirm("Bạn muốn xóa sản phẩm này khỏi giỏ hàng!")) {
        // Lấy danh sách sản phẩm từ local storage
        var list = JSON.parse(localStorage.getItem('ListProductCarts')) || [];

        // Tìm index của sản phẩm trong danh sách
        var index = list.findIndex(x => x.id == id);

        // Nếu tìm thấy, xóa sản phẩm và cập nhật lại Local Storage
        if (index >= 0) {
            list.splice(index, 1);
            localStorage.setItem('ListProductCarts', JSON.stringify(list));
            LoadData();
        }
    }
}

function Tang(id) {
    // Lấy danh sách sản phẩm từ local storage
    var list = JSON.parse(localStorage.getItem('ListProductCarts')) || [];

    // Tìm index của sản phẩm trong danh sách
    var index = list.findIndex(x => x.id == id);

    // Nếu tìm thấy và số lượng chưa đạt giới hạn, tăng số lượng
    if (index >= 0 && list[index].soluong < list[index].soLuong) {
        list[index].soluong += 1;
        localStorage.setItem('ListProductCarts', JSON.stringify(list));
        LoadData();
    }
}

function Giam(id) {
    // Lấy danh sách sản phẩm từ local storage
    var list = JSON.parse(localStorage.getItem('ListProductCarts')) || [];

    // Tìm index của sản phẩm trong danh sách
    var index = list.findIndex(x => x.id == id);

    // Nếu tìm thấy và số lượng lớn hơn 1, giảm số lượng
    if (index >= 0 && list[index].soluong > 1) {
        list[index].soluong -= 1;
        localStorage.setItem('ListProductCarts', JSON.stringify(list));
        LoadData();
    }
}

function updateQuantity(id) {
    // Lấy danh sách sản phẩm từ local storage
    var list = JSON.parse(localStorage.getItem('ListProductCarts')) || [];

    // Lấy số lượng từ input
    var quantity = Number($('#q_' + id).val());

    // Tìm index của sản phẩm trong danh sách
    var index = list.findIndex(x => x.id == id);

    // Nếu tìm thấy, cập nhật số lượng
    if (index >= 0 && quantity >= 1 && quantity <= list[index].soLuong) {
        list[index].soluong = quantity;
        localStorage.setItem('ListProductCarts', JSON.stringify(list));
        LoadData();
    }
}


LoadData();

function ThanhToan() {
    window.open("ThanhToan.html", "_blank");
}

// LoadData();




