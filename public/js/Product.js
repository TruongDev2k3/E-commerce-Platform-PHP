var app = angular.module('AppBanHang', []);
app.controller("LoginController", function ($scope, $http, $window) { 
    $scope.tailkhoan = "";
    $scope.matkhau = "";

    $scope.login = function () {
        var loginData = {
            "Username": $scope.tailkhoan,
            "Password": $scope.matkhau
        };

        $http({
            method: 'POST',
            url: 'https://localhost:7077/api/Login/login',
            data: loginData
        }).then(function (response) {
            var data = response.data;
            if (data != null && data.token != null) {
                localStorage.setItem("user", JSON.stringify(data));
                if (data.loai === 'ADMIN') {
                    $window.location.href = "admin.html";
                    alert('Đăng nhập thành công')
                } else {
                    alert('Đăng nhập thành công')
                    $window.location.href = "index.html";
                }
            } else {
                alert('Tài khoản hoặc mật khẩu không chính xác');
            }
        }, function (error) {
            alert('Tài khoản hoặc mật khẩu không chính xác');
        });
    };
    $scope.taikhoan = "";
    $scope.matkhau = "";
    $scope.email = "";
    $scope.register = function () {
        var registerData = {
            "maLoai": 2,
            "tenTaiKhoan": $scope.taikhoan,
            "matKhau": $scope.matkhau,
            "email": $scope.email,
            "loai": "USER"
        };

        $http({
            method: 'POST',
            url: 'https://localhost:7038/api/Account/create-acc',
            data: registerData
        }).then(function (response) {
            alert('ĐĂNG KÝ TÀI KHOẢN THÀNH CÔNG');
            $window.location.href = "login.html";
        }, function (error) {
            // Xử lý lỗi
            alert('Lỗi khi đăng ký tài khoản');
        });
    };
    /// lấy ra tên tài khoản để hiển thị lên html
    $scope.getUsernameFromLocalStorage = function () {
        var userData = JSON.parse(localStorage.getItem("user"));
        if (userData && userData.taikhoan) {
            $scope.username = userData.taikhoan;
        }
    };

    // Call the function to get and set the username
    $scope.getUsernameFromLocalStorage();
});
app.factory('AuthService', function () {
    var user = JSON.parse(localStorage.getItem("user"));
    var token = JSON.parse(localStorage.getItem("user"))?.token;
    return {
        isAdmin: function () {
            return  user.loai === 'ADMIN';
        },
        isLoggedIn: function () {
            return token !== null && token !== undefined;
        }
    };
});

app.run(function ($rootScope, $location, AuthService) {
    $rootScope.$on('$locationChangeStart', function (event, next, current) {
        var user = JSON.parse(localStorage.getItem("user"));

        if (AuthService.isLoggedIn()) {
            if (!AuthService.isAdmin() && $location.path() === '/admin.html') {
                // Nếu người dùng không phải là ADMIN và cố gắng truy cập trang admin.html, chuyển hướng về trang không có quyền
                $location.path('/login.html');
            }
        } else {
            // Nếu người dùng không đăng nhập, chuyển hướng về trang đăng nhập
            $location.path('/login.html');
        }
    });
});



app.controller("AdminController", function ($scope, AuthService, $location) {
    $scope.isAdmin = AuthService.isAdmin();

    if (!$scope.isAdmin) {
        $location.path('/NotFound.html');
    }

});






app.controller("ProductCtrl", function ($scope, $http) { 
	$scope.ListPrd;	 
    $scope.GetListPrd= function () {
        $http({
            method: 'GET', 
            url: current_url + '/api/Product/getlistsp',
        }).then(function (response) {  
            debugger;
            $scope.ListPrd = response.data;  
        });
    };   
	$scope.GetListPrd();

    $scope.ListPrdTop;	 
    $scope.GetListPrdTop= function () {
        $http({
            method: 'GET', 
            url: 'https://localhost:7038/api/Product/gettopproduct',
        }).then(function (response) {  
            debugger;
            $scope.ListPrdTop = response.data;  
        });
    };   
	$scope.GetListPrdTop();


    $scope.ProductDetails = JSON.parse(localStorage.getItem('ProductDetails')) || {};
    $scope.ListPrdSame;	 
    $scope.GetListPrdSame= function (maChuyenMuc) {
        $http({
            method: 'GET', 
            url: 'https://localhost:7038/api/Product/getproductsame/' + maChuyenMuc,
        }).then(function (response) {  
            debugger;
            $scope.ListPrdSame = response.data;  
        });
    };   
	$scope.GetListPrdSame($scope.ProductDetails.maChuyenMuc);

    


    $scope.ListQC;	 
    $scope.GetListQC= function () {
        $http({
            method: 'GET', 
            url: 'https://localhost:7038/api/QuangCao/getlistQC',
        }).then(function (response) {  
            debugger;
            $scope.ListQC = response.data;  
        });
    };   
	$scope.GetListQC();
    
    $scope.getPages = function (items, pageSize) {
        var pages = [];
        for (var i = 0; i < items.length; i += pageSize) {
            pages.push(items.slice(i, i + pageSize));
        }
        return pages;
    };

    $scope.filteredProducts = function(maChuyenMuc, count) {
        return $scope.ListPrd.filter(function(item) {
            return item.maChuyenMuc === maChuyenMuc;
        }).slice(0, count);
    };

    $scope.getInfoProductDetail = function (product) {  
        // Lưu thông tin sản phẩm vào localStorage
        var productInfo = {
            maChuyenMuc: product.maChuyenMuc,
            anhSanPham: product.anhSanPham,
            tenSanPham: product.tenSanPham,
            gia: product.gia,
            giaGiam: product.giaGiam,
            soLuong: product.soLuong,
            soLuongDaBan: product.soLuongDaBan
        };
    
        // Chuyển đối tượng thành chuỗi JSON và lưu vào localStorage
        localStorage.setItem('ProductDetails', JSON.stringify(productInfo));
    
        // Thêm logic xử lý khác nếu cần
    };
    var currentProductId = 1;

// Hàm để tạo id mới
    function generateProductId() {
        return currentProductId++;
    }
    $scope.showProductDetails = function (product) {
        // Lấy danh sách sản phẩm đã lưu trong localStorage
        var savedProducts = JSON.parse(localStorage.getItem('ListProductCarts')) || [];
    
        // Kiểm tra xem sản phẩm đã được thêm hay chưa bằng cahs so sánh tên sản phẩm
        var isAlreadyAdded = savedProducts.some(function (addedProduct) {
            return addedProduct.tenSanPham === product.tenSanPham;
        });
    
        if (!isAlreadyAdded) {
            // Thêm thông tin sản phẩm hiện tại vào danh sách
            savedProducts.push({
                id: generateProductId(), // Tạo id mới
                anhSanPham: product.anhSanPham,
                tenSanPham: product.tenSanPham,
                gia: product.gia,
                giaGiam: product.giaGiam,
                soLuong: product.soLuong,
                soLuongDaBan: product.soLuongDaBan,
                isAdded: true,
                soluong: 1  // Đánh dấu sản phẩm đã được thêm
            });
    
            // Lưu danh sách sản phẩm vào localStorage
            localStorage.setItem('ListProductCarts', JSON.stringify(savedProducts));
    
            alert("Thêm sản phẩm vào giỏ hàng thành công ", product);
        } else {
            alert("Sản phẩm đã tồn tại trong giỏ hàng !!!", product);
        }
    
        // Thêm logic xử lý khác nếu cần
    };
    
    $scope.searchQuery = '';

    // Hàm lưu giá trị vào Local Storage
    $scope.saveToLocalStorage = function () {
        // Kiểm tra xem giá trị có tồn tại không trước khi lưu vào Local Storage
        if ($scope.searchQuery.trim() !== '') {
            localStorage.setItem('searchQuery', $scope.searchQuery);          
        } else {
            alert('Vui lòng nhập giá trị để lưu vào Local Storage.');
        }
    };
    
    $scope.search = localStorage.getItem('searchQuery');
    console.log($scope.search)
    $scope.ListSearch;	 
    $scope.GetListSearch= function (tukhoa) {
        $http({
            method: 'POST', 
            url: 'https://localhost:7038/api/Product/searchprd/' + tukhoa,
        }).then(function (response) {  
            debugger;
            $scope.ListSearch = response.data;  
        });
    };   
	$scope.GetListSearch($scope.search);

    
});

/// API GET CHUYEN MUC
app.controller("ChuyenMucCtrl", function ($scope, $http) { 
	$scope.ListCM;	
    $scope.GetChuyenMuc= function () {
        $http({
            method: 'GET', 
            url: current_url + '/api/ChuyenMuc/getlistCM',
        }).then(function (response) {  
            debugger;
            $scope.ListCM = response.data;  
        });
    };   
	$scope.GetChuyenMuc();

    $scope.getPages = function (items, pageSize) {
        var pages = [];
        for (var i = 0; i < items.length; i += pageSize) {
            pages.push(items.slice(i, i + pageSize));
        }
        return pages;
    };
});

app.controller('GetLinkCtrl', function($scope) {
    $scope.generateLink = function(tenChuyenMuc) {
        // Chuyển đổi tên chuyên mục thành đường dẫn và trả về
        return './' + tenChuyenMuc + '.html';
    };
    // $scope.GetChuyenMuc(tenChuyenMuc);
});












