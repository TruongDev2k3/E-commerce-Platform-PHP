<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/Images/Image/Favicon.png">
    <link rel="stylesheet" href="/CSS/style_home.css">
    <link rel="stylesheet" href="/CSS/style_cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="https://kit.fontawesome.com/e06076012c.js" crossorigin="anonymous"></script>
    <title>Cart Details</title>
</head>

<body>
    <section class="main">
        <div class="list-menu" style="width: 1200px; height:45px; border:solid 1px;">
            <a href="http://127.0.0.1:8000/cart" class="title" style="padding-top:5px;text-decoration: none;width: 239px; height:45px;font-size: 20px; color:red; float:left;text-align:center;border-right: 1px solid black;">Giỏ hàng &nbsp;<i class="fa-solid fa-cart-shopping"></i></a>
            <a href="http://127.0.0.1:8000/Pending" class="title" style="padding-top:5px;text-decoration: none;width: 239px; height:45px;font-size: 20px; color:black; float:left;text-align:center;border-right: 1px solid;">Chờ xử lý &nbsp;<i class="fa fa-spinner fa-spin"></i></a>
            <a href="http://127.0.0.1:8000/BillSuccess" class="title" style="padding-top:5px;text-decoration: none;width: 239px; height:45px;font-size: 20px; color:black; float:left;text-align:center;border-right: 1px solid;">Đơn đã đặt &nbsp;<i class="fa fa-check"></i></a>
            <a href="http://127.0.0.1:8000/OrderCancel" class="title" style="padding-top:5px;text-decoration: none;width: 239px; height:45px;font-size: 20px; color:black; float:left;text-align:center;border-right: 1px solid;">Đơn đã hủy   &nbsp;<i class="fa-solid fa-xmark"></i></a>
            <a href="http://127.0.0.1:8000/BillPaid" class="title" style="padding-top:5px;text-decoration: none;width: 239px; height:45px;font-size: 20px; color:black; float:left;text-align:center;">Đã thanh toán   &nbsp;<i class="fa fa-check"></i></a>

        </div>
        <div class="row">
            <div class="colf-9 colf-s-12 padding-table" style="padding-left: 0px;">
                @if($cartItems && count($cartItems) > 0)
                <table style=" width:1000px; margin-left:-100px;">
                    <thead>
                        <tr>

                            <th colspan="3">SẢN PHẨM</th>
                            <th>GIÁ</th>
                            <th style="padding-left:15px;">SỐ LƯỢNG</th>
                            <th style="padding-left:50px;">TẠM TÍNH</th>
                        </tr>
                    </thead>
                    <tbody class="listCart">
                        @foreach($cartItems as $product)
                        @php

                        @endphp
                        <tr>
                            <td>
                                <form id="remove-form-{{ $product->MaSanPham }}" action="{{ route('remove-from-cart', ['productId' => $product->MaSanPham]) }}" method="POST">
                                    @csrf
                                    <input style="height:20px;width:20px;color:red;border-radius:10px;" type="checkbox" name="selectedProduct" onchange="updateTotalTempTotal()" id="{{ $product->MaSanPham }}">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="button" onclick="confirmRemove('{{ $product->MaSanPham }}')" style="border: none; background: none; cursor: pointer;">
                                        <i class="fa fa-times-circle" style="font-size:30px;color:red;" title="Xóa"></i>
                                    </button>
                                </form>
                            </td>
                            <td><img style="width: 50px; height: 50px;" src="{{ $product->AnhSanPham }}"></td>
                            <td>{{ $product->TenSanPham }}</td>
                            <td style="padding-left:9px;">{{ number_format($product->Gia, 0, ',', '.') }}đ</td>
                            <td style="padding-left:20px;">
                                <button onclick="decreaseQuantity('{{ $product->MaSanPham }}')" style="border: 1px solid #dbdbdb;padding: 4px 8px;">-</button>
                                <input type="text" value="{{ $product->SoLuong }}" id="quantity_{{ $product->MaSanPham }}" data-price="{{ $product->Gia }}" onchange="updateTempTotal('{{ $product->MaSanPham }}')" style="width: 35px;border: 1px solid #dbdbdb;padding: 4px;margin-left: -5px;margin-right: -5px;">
                                <button onclick="increaseQuantity('{{ $product->MaSanPham }}')" style="border: 1px solid #dbdbdb;padding: 4px 8px;">+</button>
                            </td>
                            <td style="padding-left:50px;" id="tempTotal_{{ $product->MaSanPham }}">{{ number_format($product->TamTinh, 0, ',', '.') }}đ</td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
                @else
                <p>Giỏ hàng của bạn trống.</p>
                @endif
                <div class="update">
                    <button id="checkALL" style="float: left;margin-right:10px;margin-left:-100px;">Chọn tất cả</button>
                    <button onclick="updateCart()" style="float: left;margin-right:10px;margin-left:620px;">Cập nhật giỏ hàng</button>
                    <!-- Ví dụ về một nút để xóa tất cả sản phẩm -->
                    <form id="remove-all-form" action="{{ route('remove-all-from-cart') }}" method="POST">
                        @csrf
                        <button type="button" onclick="confirmRemoveAll()" style="float: left;">Xóa giỏ hàng</button>
                    </form>


                    <script src="/JS/cart.js"></script>
                </div>
            </div>
            <div class="colf-3 colf-s-12 right padding-table">
                <table class="table-right">
                    <tr>
                        <td colspan="2" class="title">TỔNG GIỎ HÀNG</td>
                    </tr>
                    <tr>
                        <td class="h">Tạm tính</td>
                        <td class="price h" id="tTong"></td>
                    </tr>
                    <tr>
                        <td>Tổng</td>
                        <td class="price" id="spTong"></td>
                    </tr>
                </table>
                <div class="pay">
                    <button onclick="PayPal()">Tiến hành thanh toán</button>


                    <script src="/JS/cart.js"></script>
                </div>
                <div class="endow">
                    <p><i class="fas fas fa-ticket-alt"></i> Phiếu ưu đãi</p>
                    <input type="text" placeholder="Mã ưu đãi"><br>
                    <button class="btn-updateCart">Áp dụng</button>
                </div>
            </div>
        </div>
    </section>
    <script src="/JS/jquery-3.6.0.min.js"></script>
    <script src="/JS/angular.min.js"></script>
    <script src="/JS/global.js"></script>
    <script src="/JS/Product.js"></script>
    <script src="/JS/cart.js"></script>



    <script>
        function PayPal() {
            // Thực hiện chuyển hướng đến liên kết PayPal
            window.location.href = 'http://127.0.0.1:8000/Paypal';
        }

        function updateTempTotal(id) {
            var quantityInput = document.getElementById('quantity_' + id);
            var tempTotalElement = document.getElementById('tempTotal_' + id);
            var newQuantity = parseInt(quantityInput.value);
            var price = parseInt(quantityInput.getAttribute('data-price'));
            var tempTotal = newQuantity * price;
            tempTotalElement.innerText = tempTotal.toLocaleString('vi-VN') + 'đ';
            updateTotalTempTotal(); // Cập nhật tổng tiền sau khi cập nhật giá tạm tính
        }

        function increaseQuantity(id) {
            var quantityInput = document.getElementById('quantity_' + id);
            var currentQuantity = parseInt(quantityInput.value);
            quantityInput.value = currentQuantity + 1;
            updateTempTotal(id);
            updateTotalTempTotal();
            updateQuantity(id, currentQuantity + 1); // Truyền thêm tham số mới vào hàm updateQuantity
        }

        function decreaseQuantity(id) {
            var quantityInput = document.getElementById('quantity_' + id);
            var currentQuantity = parseInt(quantityInput.value);
            if (currentQuantity > 1) {
                quantityInput.value = currentQuantity - 1;
                updateTempTotal(id);
                updateTotalTempTotal();
                updateQuantity(id, currentQuantity - 1); // Truyền thêm tham số mới vào hàm updateQuantity
            }
        }
        // Đoạn mã JavaScript để chọn tất cả các checkbox
        document.getElementById('checkALL').addEventListener('click', function() {
            var checkboxes = document.querySelectorAll('.listCart input[type="checkbox"]');
            checkboxes.forEach(function(checkbox) {
                checkbox.checked = true;
            });
            updateTotalTempTotal();
        });
        // Hàm tính tổng giá trị tạm tính
        function updateTotalTempTotal() {
            var tempTotalElements = document.querySelectorAll('[id^="tempTotal_"]');
            var totalTempTotal = 0;

            // Duyệt qua tất cả các checkbox
            var selectedProducts = document.querySelectorAll('[name="selectedProduct"]:checked');

            // Khởi tạo một mảng để lưu thông tin của các sản phẩm được chọn
            var selectedProductInfo = [];

            // Duyệt qua các sản phẩm được chọn và lưu thông tin của từng sản phẩm vào mảng
            selectedProducts.forEach(function(checkbox) {
                // Lấy id của sản phẩm từ id của checkbox
                var productId = checkbox.id;

                // Tìm các phần tử HTML chứa thông tin của sản phẩm
                var productRow = document.querySelector('#remove-form-' + productId).closest('tr');
                var productImage = productRow.querySelector('img').src;
                var productName = productRow.querySelectorAll('td')[2].innerText;
                var productPrice = productRow.querySelectorAll('td')[3].innerText.replace(/\./g, '');
                var productQuantity = productRow.querySelectorAll('td')[4].querySelector('input').value;
                var productTempTotal = productRow.querySelectorAll('td')[5].innerText.replace(/\./g, '');

                // Tạo một đối tượng JSON chứa thông tin chi tiết của sản phẩm
                var productInfo = {
                    id: productId,
                    image: productImage,
                    name: productName,
                    price: productPrice,
                    quantity: productQuantity,
                    tempTotal: productTempTotal
                };

                // Thêm đối tượng JSON vào mảng selectedProductInfo
                selectedProductInfo.push(productInfo);

                // Tính tổng giá trị tạm tính
                totalTempTotal += parseInt(productTempTotal.replace(/\D/g, ''));
            });

            // Lưu mảng selectedProductInfo vào session
            sessionStorage.setItem('selectedProductInfo', JSON.stringify(selectedProductInfo));

            // Cập nhật tổng giá trị tạm tính vào HTML
            var totalElement = document.getElementById('tTong');
            var totalElements = document.getElementById('spTong');
            totalElement.innerText = totalTempTotal.toLocaleString('vi-VN', {
                style: 'currency',
                currency: 'VND'
            });
            totalElements.innerText = totalTempTotal.toLocaleString('vi-VN', {
                style: 'currency',
                currency: 'VND'
            });
        }


        // Gọi hàm cập nhật tổng giá trị tạm tính khi cần thiết
        updateTotalTempTotal();

        function confirmDelete() {
            var confirmation = confirm("Bạn có chắc chắn muốn xóa giỏ hàng không?");
            if (confirmation) {
                // Gửi yêu cầu xác nhận tới máy chủ
                window.location.href = "DeleteCart.php";
            }
        }

        function updateCart() {
            var confirmation = confirm("Bạn có chắc chắn muốn cập nhập giỏ hàng không?");
            if (confirmation) {
                // Gửi yêu cầu xác nhận tới máy chủ
                window.location.href = "http://127.0.0.1:8000/cart";
            }
        }

        function Xoa(maSanPham) {
            var confirmation = confirm("Bạn có chắc chắn muốn xóa sản phẩm này không?");
            if (confirmation) {
                window.location.href = "DeleteCart.php?id=" + maSanPham;
                alert('Xóa sản phẩm thành công!')
            }
        }

        function confirmRemove(productId) {
            if (confirm("Bạn có chắc chắn muốn xóa sản phẩm này khỏi giỏ hàng không?")) {
                document.getElementById('remove-form-' + productId).submit();
            }
        }

        function confirmRemoveAll() {
            if (confirm("Bạn có chắc chắn muốn xóa tất cả sản phẩm khỏi giỏ hàng không?")) {
                document.getElementById('remove-all-form').submit();
            }
        }

        function updateQuantity(productId, newQuantity) {
            $.ajax({
                url: '/update-cart',
                type: 'POST',
                data: {
                    productId: productId,
                    newQuantity: newQuantity,
                    _token: '{{ csrf_token() }}'
                },

                success: function(response) {
                    // Handle success response
                    console.log(response);
                },
                error: function(xhr, status, error) {
                    // Handle error
                    console.error(xhr.responseText);
                }
            });
        }
    </script>

</body>

</html>