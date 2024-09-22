<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/Images/Image/Favicon.png">
    <link rel="stylesheet" href="/CSS/style_home.css">
    <link rel="stylesheet" href="/CSS/style_pay.css">
    <link rel="stylesheet" href="/CSS/style_cart.css">
    <script src="https://kit.fontawesome.com/e06076012c.js" crossorigin="anonymous"></script>
    <script src="js/jquery-3.6.0.minjs"></script>
    <title>Thanh toán</title>
    <style>
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .bank-transfer-modal {
            background: white;
            padding: 20px;
            border-radius: 10px;
            max-width: 500px;
            width: 100%;
            border-color: #CCE7FF;
        }

        .close-modal {
            cursor: pointer;
            float: right;
            font-size: 20px;
            margin-top: -10px;
        }
    </style>
</head>

<body ng-app="AppBanHang" ng-controller="CustomerCtrl">

    <script src="/JS/hide_menu.js"></script>
    <section class="main">
        <div class="title">Giỏ hàng</div>
        <div class="row">
            <div class="colf-9 colf-s-12 padding-table">
                <table class="table-prod">
                    <thead>
                        <tr>
                            <td>SẢN PHẨM</td>
                            <td>Ảnh</td>
                            <td style="text-align: center;">GIÁ</td>
                            <td style="text-align: center;">SỐ LƯỢNG</td>
                            <td style="text-align: center;">TẠM TÍNH</td>
                        </tr>
                    </thead>
                    <tbody id="listCart">

                    </tbody>
                </table>
                <div class="update">
                    <button onclick="updateCart()">Cập nhật giỏ hàng</button>
                    <button onclick="XoaCart()">Xóa giỏ hàng</button>
                    <script src="/JS/cart.js"></script>
                </div>
            </div>
        </div>
    </section>
    <form id="form_paypal" class="main" action="/create-invoice" method="post" onsubmit="return handlePaymentMethod(event)">
        @csrf
        <div class="row">
            <div class="col-8 col-s-12 padding-form">
                <div class="title">THÔNG TIN THANH TOÁN</div>
                <div class=note>(<span>*</span>) Bắt buộc</div>
                <div>
                    <div class="row">
                        <div class="col-12 col-s-12">
                            <label for="txt_hoten">Họ tên: <span>*</span></label><br>
                            <input type="text" name="txt_hoten" id="txt_hoten" ng-model="txt_hoten">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-s-12">
                            <label for="gender">Giới tính: <span>*</span></label><br>
                            <input name="gender" id="gender" class="col-12 col-s-12" style="height: 40px; padding-left: 5px;" ng-model="gender">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-s-12">
                            <label for="txt_diachi">Địa chỉ: <span>*</span></label><br>
                            <input id="txt_diachi" name="txt_diachi" cols="135" rows="1" ng-model="txt_diachi">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-s-12">
                            <label for="txt_email">Email: <span>*</span></label><br>
                            <input type="text" name="txt_email" id="txt_email" ng-model="txt_email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-s-12">
                            <label for="txt_sdt">SDT: <span>*</span></label><br>
                            <input id="txt_sdt" name="txt_sdt" cols="135" rows="1" ng-model="txt_sdt">
                            <input id="TongTien" name="TongTien" cols="135" rows="1" hidden>
                            <input id="listprd" name="listprd" cols="135" rows="1" hidden>
                            <input id="status" name="status" cols="135" rows="1" hidden>
                            <!-- <input id="listprd" name="listprd" cols="135" rows="1" hidden> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="colf-3 colf-s-12 right padding-table">
                <table class="table-right">
                    <tr>
                        <td colspan="2" class="title">TỔNG GIỎ HÀNG</td>
                    </tr>
                    <tr>
                        <td class="h">Tạm tính</td>
                        <td class="price h" id="tTong">0</td>
                    </tr>
                    <tr>
                        <td>Tổng</td>
                        <td class="price" id="spTong">0</td>
                    </tr>
                </table>

                <div class="pay">
                    <div class="payment-options">
                        <label>
                            <input style="margin-right: 5px; float:left;width:15px;height:20px;font-size:20px;" type="radio" name="payment_method" value="cod">
                            <p>Thanh Toán Khi Nhận Hàng</p>
                        </label>
                        <label>
                            <input style="margin-right: 5px; float:left;width:15px;height:20px;font-size:20px;" type="radio" name="payment_method" value="bank_transfer">
                            <p>Thanh Toán Chuyển Khoản</p>
                        </label>
                    </div>
                    <button type="submit">ĐẶT HÀNG</button>
                </div>
                <div class="endow">
                    <p><i class="fas fas fa-ticket-alt"></i> Phiếu ưu đãi</p>
                    <input type="text" placeholder="Mã ưu đãi"><br>
                    <button class="btn-updateCart">Áp dụng</button>
                </div>
            </div>
        </div>
    </form>

    <!-- Bank Transfer Modal -->
    <div class="overlay" id="bankTransferModal" style="display: none;">
        <div class="bank-transfer-modal">
            <span class="close-modal" onclick="closeBankTransferModal()">&times;</span>
            <h2 style="margin-left: 92px;color:blue;">Thông Tin Chuyển Khoản</h2>

            <div class="Qrcode" style="width:240px;height:240px;border:solid;margin-top:40px;margin-bottom:20px;">
                <img src="" alt="" style="width:100% ; height:100%;" id="QrCodeImg">
            </div>
            <p style="margin-left: 110px;font-size:15px;line-height:35px;">Ngân hàng: &nbsp;<span style="font-weight:bold;" id="name_bank"></span></p>
            <p style="margin-left: 110px;font-size:15px;line-height:35px;">Số tài khoản: &nbsp;<span style="font-weight:bold;" id="stk_bank"></span></p>
            <p style="margin-left: 110px;font-size:15px;line-height:35px;">Chủ tài khoản: &nbsp;<span style="font-weight:bold;" id="username_bank"></span></p>
            <p style="margin-left: 110px;font-size:15px;line-height:35px;">Số tiền: &nbsp;<span id="total_price" style="font-weight:bold;"></span></p>
            <p style="margin-left: 110px;font-size:15px;line-height:35px;">Nội dung chuyển khoản: &nbsp; <span style="color:red;font-weight:bold;" id="content_bank"></span></p>

            <div id="status" style="margin-left: 110px;margin-bottom:20px;color:red;margin-top:10px;">Chờ Thanh Toán &nbsp;<i class="fa fa-spinner fa-spin"></i></div>
            <!-- <form id="orderForm" action="{{ route('createDHOnline') }}" method="POST">
                @csrf
                <button style="margin-left: 110px;" type="button" onclick="confirmBankTransfer()">Xác nhận đã chuyển khoản</button>
            </form> -->
            <!-- <button style="margin-left: 110px;" onclick="confirmBankTransfer()">Xác nhận đã chuyển khoản</button> -->
            <div style="margin-left: 110px;" id="countdown" style="color: red;">Đơn hàng hết hiệu lực sau: <span id="timer" style="color: red;"></span><span style="color: red;">s</span></div>
        </div>
    </div>

    <script>
        // code đếm ngược thời gian còn lại hiệu lực
        function startCountdown(seconds) {
            var timerElement = document.getElementById('timer');
            var countdownInterval = setInterval(function() {
                seconds--;

                var minutes = Math.floor(seconds / 60);
                var remainingSeconds = seconds % 60;

                // Thêm số 0 vào phía trước nếu giây nhỏ hơn 10
                if (remainingSeconds < 10) {
                    remainingSeconds = '0' + remainingSeconds;
                }

                timerElement.innerText = minutes + ':' + remainingSeconds;

                if (seconds <= 0) {
                    clearInterval(countdownInterval);
                    location.reload(); // Refresh lại trang web
                }
            }, 1000);
        }

        // code này xử lý xem người dùng chọn phương thức thanh toán nào
        // xử lý code thanh toán online ở đây
        function handlePaymentMethod(event) {
            var paymentMethod = document.querySelector('input[name="payment_method"]:checked');

            if (!paymentMethod) {
                alert("Vui lòng chọn phương thức thanh toán.");
                return false;
            } else if (paymentMethod.value === 'bank_transfer') {
                event.preventDefault(); // Ngăn chặn form submit
                document.getElementById('status').value = 'Đã thanh toán';
                document.getElementById('TongTien').value = 0;
                var totalAmount = document.getElementById('spTong').innerText;
                var content_bank = document.getElementById('content_bank').innerText;
                document.getElementById('total_price').innerText = totalAmount;


                // Loại bỏ chữ đ và dấu chấm từ chuỗi
                var cleanedString = totalAmount.replace(/[đ.]/g, '');

                // Chuyển đổi chuỗi thành số nguyên
                let integerValue = parseInt(cleanedString.replace(/[^0-9]/g, ''), 10);
                var seconds = 300; // Thay đổi số giây tùy ý
                startCountdown(seconds);
                let MY_BANK = {
                    BANK_ID: "mb",
                    ACCOUNT_NO: "0000121258813",
                    ACCOUNT_NAME: "NGUYEN THUY HIEN"
                }
                // Lấy các phần tử HTML
                var nameBankElement = document.getElementById('name_bank');
                var stkBankElement = document.getElementById('stk_bank');
                var usernameBankElement = document.getElementById('username_bank');

                // Hiển thị dữ liệu từ biến MY_BANK lên giao diện
                nameBankElement.innerText = MY_BANK.BANK_ID;
                stkBankElement.innerText = MY_BANK.ACCOUNT_NO;
                usernameBankElement.innerText = MY_BANK.ACCOUNT_NAME;
                let QR = `https://img.vietqr.io/image/${MY_BANK.BANK_ID}-${MY_BANK.ACCOUNT_NO}-qr_only.png?amount=${integerValue}&addInfo=${content_bank}`;
                // Bắt đầu đếm ngược
                const QrImg = document.getElementById('QrCodeImg');
                QrImg.src = QR;

                document.getElementById('bankTransferModal').style.display = 'flex';
                return false;
            }

            return true; // Cho phép form submit nếu chọn COD
        }

        // code đóng form chuyển tiền qr
        function closeBankTransferModal() {
            document.getElementById('bankTransferModal').style.display = 'none';
        }

        // code khi ấn nút xác nhận đơn hàng
        function confirmBankTransfer() {
            // Xử lý logic khi người dùng xác nhận đã chuyển khoản
            closeBankTransferModal();
            alert("Cảm ơn bạn đã xác nhận chuyển khoản. Chúng tôi sẽ xử lý đơn hàng của bạn.");
            document.querySelector('form.main').submit(); // Gửi form
        }

        document.addEventListener("DOMContentLoaded", function() {
            // Lấy dữ liệu từ session và chuyển nó thành các đối tượng sản phẩm JavaScript
            var selectedProductInfo = sessionStorage.getItem('selectedProductInfo');
            if (selectedProductInfo) {
                selectedProductInfo = JSON.parse(selectedProductInfo);

                // Duyệt qua mỗi đối tượng sản phẩm và tạo HTML tương ứng
                selectedProductInfo.forEach(function(product) {
                    var html = '<tr>';
                    html += '<td>' + product.name + '</td>';
                    html += '<td><img style="width: 50px; height: 50px;" src="' + product.image + '"></td>';

                    html += '<td style="text-align: center;">' + product.price.toString().replace(/\./g, ',').replace(/\B(?=(\d{3})+(?!\d))/g, '.') + '</td>';
                    html += '<td style="text-align: center;">' + product.quantity + '</td>';
                    html += '<td style="text-align: center;">' + product.tempTotal.toString().replace(/\./g, ',').replace(/\B(?=(\d{3})+(?!\d))/g, '.') + '</td>';
                    html += '</tr>';

                    // Thêm HTML được tạo vào trong phần tử <tbody> của bảng sản phẩm
                    document.getElementById('listCart').insertAdjacentHTML('beforeend', html);
                });
            }
        });

        // hàm reg nội dung
        function generateRandomString(length) {
            var result = '';
            var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
            var charactersLength = characters.length;
            for (var i = 0; i < length; i++) {
                result += characters.charAt(Math.floor(Math.random() * charactersLength));
            }
            return result;
        }

        // Gọi hàm để tạo chuỗi ngẫu nhiên có độ dài là 6
        var randomString = generateRandomString(6);

        // Gắn chuỗi ngẫu nhiên vào phần tử HTML
        document.getElementById('content_bank').innerText = randomString;

        document.addEventListener("DOMContentLoaded", function() {
            // Lấy dữ liệu từ session
            var selectedProductInfo = sessionStorage.getItem('selectedProductInfo');

            if (selectedProductInfo) {
                selectedProductInfo = JSON.parse(selectedProductInfo);

                // Khởi tạo biến tổng tiền
                var totalTempTotal = 0;

                // Duyệt qua mỗi sản phẩm và cộng dồn vào tổng tiền
                selectedProductInfo.forEach(function(product) {
                    // Loại bỏ dấu tiền tệ và dấu phân cách hàng nghìn sau đó chuyển đổi thành số
                    var tempTotal = parseFloat(product.tempTotal.replace(/[^\d.]/g, ''));
                    totalTempTotal += tempTotal;
                });

                // Cập nhật giá trị vào các phần tử HTML tương ứng
                document.getElementById('tTong').innerText = totalTempTotal.toLocaleString('vi-VN', {
                    style: 'currency',
                    currency: 'VND'
                });
                document.getElementById('spTong').innerText = totalTempTotal.toLocaleString('vi-VN', {
                    style: 'currency',
                    currency: 'VND'
                });

                document.getElementById('TongTien').value = totalTempTotal;
                document.getElementById('listprd').value = JSON.stringify(selectedProductInfo);
            }
        });
    </script>

    <!-- js thanh toán online  -->
    <script>
        const API_KEY = 'AK_CS.d8f184e0191111efaee6bddf96bdbe60.tVzfQ8RRwE49hZhq9AIg6oPhRyDkZG0wqTPwyI7b7tkg6y17fwQ2QCQyyPiH4EJDz4ReQIaG';
        const API_GET_PAID = "https://oauth.casso.vn/v2/transactions?fromDate=2024-05-23&page=1&pageSize=200&sort=ASC";
        //         curl --location --request GET 'https://oauth.casso.vn/v2/transactions?fromDate=2021-04-01&toDate=2022-07-05&page=4&sort=ASC' \
        // --header 'Authorization: Apikey <API Key của bạn> hoặc Bearer <access token từ OAuth2>'

        // get ra trạng thái
        const statusDiv = document.getElementById("status");

        // hàm check tiền
        async function checkPaid() {
            try {
                const response = await fetch(API_GET_PAID, {
                    headers: {
                        Authorization: `apikey ${API_KEY}`,
                        "content-type": "application/json",
                    },
                });

                if (response.ok) {
                    const data = await response.json();
                    console.log(data);
                    // Kiểm tra xem có thuộc tính "records" trong data không
                    // Kiểm tra xem có thuộc tính "data" trong dữ liệu không
                    if (data.hasOwnProperty('data')) {
                        // Truy cập vào thuộc tính "data"
                        const dataInfo = data.data;

                        // Kiểm tra xem có thuộc tính "records" trong dataInfo không
                        if (dataInfo.hasOwnProperty('records')) {

                            // Truy cập vào mảng "records" và consolog mỗi đối tượng trong mảng

                            dataInfo.records.forEach(record => {
                                const datas = record.description;
                                const rate = record.amount;

                                // Biểu thức chính quy để tìm giá trị sau "QR" và trước "Ma giao dich"
                                const pattern = /QR\s+(\w+)\s+Ma giao dich/;

                                // Tìm kết quả phù hợp với biểu thức chính quy
                                const match = datas.match(pattern);

                                // Lấy giá trị đã trích xuất
                                const result = match ? match[1] : null;

                                // Lấy ra nội dung từ thẻ p trong HTML
                                const totalPrice = document.getElementById("total_price").innerText;
                                const contentBank = document.getElementById("content_bank").innerText;
                                var totalAmount = document.getElementById('spTong').innerText;
                                // Loại bỏ chữ đ và dấu chấm từ chuỗi
                                var cleanedString = totalAmount.replace(/[đ.]/g, '');

                                // Chuyển đổi chuỗi thành số nguyên
                                let integerValue = parseInt(cleanedString.replace(/[^0-9]/g, ''), 10);
                                // So sánh với giá trị đã trích xuất
                                if (integerValue === rate && contentBank === result) {
                                    // Thực hiện hành động khi trùng khớp
                                    console.log("Trùng khớp! Sửa trạng thái thành công.");
                                    document.getElementById('form_paypal').submit();
                                    // Code để sửa trạng thái đang xử lý thành thành công
                                    window.location.href = 'http://127.0.0.1:8000/BillPaid';
                                    statusDiv.innerHTML = '<div style="margin-left: 0px; color:green;">Đã thanh toán &nbsp <i class="fa fa-check"></i></div>';
                                }
                                // console.log(integerValue);
                                // console.log(contentBank);

                            });


                            // Biểu thức chính quy để phù hợp với mẫu chuỗi "QR   <giá trị>   Ma giao dich"


                        } else {
                            console.error('Data không chứa thuộc tính "records" trong thuộc tính "data"');
                        }
                    } else {
                        console.error('Data không chứa thuộc tính "data"');
                    }


                    // Kiểm tra xem data.records có tồn tại và là một mảng
                    // Đảm bảo rằng data.records là một mảng trước khi lặp
                    // Kiểm tra kiểu dữ liệu của records trước khi lặp

                    // data.records.forEach(record => {
                    //     console.log(record); // Consolog từng đối tượng trong mảng records
                    // });



                } else {
                    console.error("Lỗi khi lấy thông tin giao dịch:", response.statusText);
                }
            } catch (error) {
                console.error("Đã xảy ra lỗi khi lấy thông tin giao dịch:", error);
            }
        }


        checkPaid();
        // Call checkPaid every 10 seconds
        setInterval(checkPaid, 5000);
    </script>


    <script src="/JS/cart.js"></script>
    <script src="/JS/paypal.js"></script>
</body>

</html>