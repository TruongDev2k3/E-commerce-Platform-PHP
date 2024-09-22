<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/Images/Image/Favicon.png">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/CSS/styles.css">
</head>

<body>
    
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-primary d-flex justify-content-between">

                        <h4 class="text-center text-light">LOẠI SẢN PHẨM:</h4>

                        <div style="margin-left: -750px;">
                            <select name="category" id="categorySelect" style="width: 120px; height: 30px;" onchange="loadProducts()">
                                <!-- <option value="Chọn sản phẩm">Chọn sản phẩm</option> -->
                                @foreach($categories as $category)
                                <option value="{{ $category }}">{{ $category }}</option>
                                @endforeach
                            </select>
                        </div>



                        <a href="" id="addUserLink" class="btn bg-warning text-dark"><b>Add Product</b></a>
                        <!-- Trong tệp blade của bạn (ví dụ: layoutsAdmin.Product.blade.php) -->


                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>MASP</th>
                                    <th>MACM</th>
                                    <th>TÊN SP</th>
                                    <th>ẢNH SP</th>
                                    <th>GIÁ</th>
                                    <th>GIÁ GIẢM</th>
                                    <th>SỐ LƯỢNG</th>
                                    <th>SỐ LƯỢNG ĐÃ BÁN</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->MaSanPham }}</td>
                                    <td>{{ $product->MaChuyenMuc }}</td>
                                    <td>{{ $product->TenSanPham }}</td>
                                    <td><img src="{{ $product->AnhSanPham }}" alt="profile" width="60" height="60"></td>
                                    <td>{{ $product->Gia }}</td>
                                    <td>{{ $product->GiaGiam }}</td>
                                    <td>{{ $product->SoLuong }}</td>
                                    <td>{{ $product->SoLuongDaBan }}</td>
                                    <td>
                                        <a href="" class="edit-product" data-id="{{ $product->MaSanPham }}" target="_blank"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="" data-id="{{ $product->MaSanPham }}" class="delete"><i class="fa-solid fa-trash" target="_blank"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-left: -450px;">
        <select name="category" id="categorySelect" style="width: 120px; height: 30px;">
            <!-- <option value="Chọn sản phẩm">Chọn sản phẩm</option> -->
            @foreach($categories as $category)
            <option value="{{ $category }}">{{ $category }}</option>
            @endforeach
        </select>
    </div>

    <script>
        // Sử dụng biến để kiểm tra xem đã thực thi mã JavaScript hay chưa


        // Tạo một hàm để load sản phẩm
        function loadProduct() {


            var selectedCategory = document.getElementById("categorySelect").value;
            // Tạo đường dẫn mới dựa trên giá trị được chọn
            var newUrl = "/product/" + selectedCategory;
            // Chuyển hướng đến đường dẫn mới
            window.location.href = newUrl;
            // Gỡ bỏ lắng nghe sự kiện DOMContentLoaded


        }
    </script>



    <script>
        function loadProducts() {
            event.preventDefault();
            var selectedCategory = document.getElementById('categorySelect').value;
            window.location.href = 'http://127.0.0.1:8000/product/' + selectedCategory;
            // var options = document.getElementById('categorySelect').options;

            // for (var i = 0; i < options.length; i++) {
            //     if (options[i].value === selectedCategory) {
            //         options[i].selected = true;
            //         break;
            //     }
            // }


        }
        window.onload = function() {
            var queryString = window.location.pathname; // Sử dụng window.location.pathname để lấy đường dẫn không bao gồm domain
            var category = queryString.split('/').pop(); // Lấy phần cuối của đường dẫn là giá trị của category

            if (category) {
                selectOptionByValue(category); // Chọn option có giá trị là category
            }
        }

        function selectOptionByValue(value) {
            var selectElement = document.getElementById('categorySelect');
            for (var i = 0; i < selectElement.options.length; i++) {
                if (selectElement.options[i].value === value) {
                    selectElement.selectedIndex = i;
                    break;
                }
            }
        }
        // document.getElementById('addUserLink').addEventListener('click', function(event) {
        //     var selectedCategory = document.getElementById('categorySelect').value;
        //     var href = this.getAttribute('href');
        //     var updatedHref = href + '?category=' + selectedCategory;
        //     this.setAttribute('href', updatedHref);
        // });
    </script>
    <script>
        // JavaScript to hide the success message after 5 seconds
        setTimeout(function() {
            var successAlert = document.getElementById('successAlert');
            if (successAlert) {
                successAlert.style.display = 'none';
            }
        }, 5000); // 5000 milliseconds = 5 seconds
    </script>
    <script>
        // Get the current URL
        var currentUrl = window.location.href;

        // Extract the path from the URL
        var path = currentUrl.substring(currentUrl.lastIndexOf('/') + 1);

        // Append "/add" to the path
        var newPath = path + "/add";

        // Update the href attribute of the anchor tag
        document.getElementById("addUserLink").href = newPath;
    </script>
    <script>
        // Get the current URL
        var currentUrl = window.location.href;

        // Extract the path from the URL
        var path = currentUrl.substring(currentUrl.lastIndexOf('/') + 1);

        // Assuming you have some way to get 'productId', let's say it's a variable
        var editLinks = document.querySelectorAll(".edit-product");

        // Loop through each element and update the href attribute
        editLinks.forEach(function(link) {
            var productId = link.getAttribute('data-id');
            var newPath = path + "/edit/idsp/" + productId;
            link.href = newPath;
        });
    </script>
    <script>
        // Lấy tất cả các liên kết xóa sản phẩm
        var deleteLinks = document.querySelectorAll(".delete");

        // Lặp qua mỗi phần tử và kích hoạt sự kiện click
        deleteLinks.forEach(function(link) {
            link.addEventListener('click', function(event) {
                // Ngăn chặn hành động mặc định của liên kết
                event.preventDefault();

                // Hiển thị hộp thoại xác nhận
                var isConfirmed = confirm('Bạn có chắc chắn muốn xóa sản phẩm này không?');

                // Nếu người dùng xác nhận, chuyển hướng đến URL xóa sản phẩm
                if (isConfirmed) {
                    // Lấy mã sản phẩm từ thuộc tính data-id của thẻ <a>
                    var productId = link.getAttribute('data-id');
                    // Lấy đường dẫn hiện tại
                    var currentUrl = window.location.href;
                    // Cắt chuỗi để lấy phần URL gốc không bao gồm phần cuối cùng (thường là ID sản phẩm)


                    // Tạo URL mới bằng cách nối mã sản phẩm vào URL gốc và phần tiền tố "/delete/idsp/"
                    var deleteUrl = currentUrl + "/delete/idsp/" + productId;
                    // Chuyển hướng trình duyệt đến URL xóa sản phẩm
                    window.location.href = deleteUrl;
                }
            });
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>