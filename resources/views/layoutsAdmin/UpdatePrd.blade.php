<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="/Images/Image/Favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE PRODUCT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-primary d-flex justify-content-between">
                        <h4 class="text-center text-light">CẬP NHẬP THÔNG TIN SẢN PHẨM</h4>
                        <a href="../Admin/Product.php" class="btn bg-warning text-dark"><b>Data List</b></a>
                    </div>
                    <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card-body">
                        <form action="{{ route('product.update', ['category' => $category, 'idsp' => $idsp]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                            <input type="hidden" name="MaSP" id="" value="{{ $product->MaSanPham }}">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="TenSP" class="form-label">Tên Sản Phẩm</label>
                                        <input type="text" class="form-control" id="TenSP" name="TenSanPham" value="{{ $product->TenSanPham }}" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="GiaSP" class="form-label">Giá Sản Phẩm</label>
                                        <input type="number" class="form-control" id="GiaSP" name="Gia" value="{{ $product->Gia }}" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="GiaGiam" class="form-label">Giá giảm</label>
                                        <input type="number" class="form-control" id="GiaGiam" name="GiaGiam" value="{{ $product->GiaGiam }}" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="userprofile" class="form-label">Ảnh Sản Phẩm</label>
                                        <input type="file" class="form-control" id="userprofile" name="user_profile" autocomplete="off" value="">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="SoLuong" class="form-label">Số lượng sản phẩm</label>
                                        <input type="number" class="form-control" id="SoLuong" name="SoLuong" value="{{ $product->SoLuong }}" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <img src="{{ $product->AnhSanPham }}" width="100" height="100">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="SoLuongDaBan" class="form-label">Số lượng đã bán</label>
                                        <input type="number" class="form-control" id="SoLuongDaBan" name="SoLuongDaBan" value="{{ $product->SoLuongDaBan }}" autocomplete="off">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6"><button type="submit" name="update_btn" class="btn bg-primary text-light submit_button"><b>Update</b></button></div>
                                <div class="col-md-6">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>