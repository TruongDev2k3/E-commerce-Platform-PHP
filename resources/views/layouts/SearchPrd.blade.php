<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/Images/Image/Favicon.png">
    <link rel="stylesheet" href="assets/font/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./assets/font/fontawesome-free-5.15.4/fontawesome-free-5.15.4-web/css/all.css">
    <link rel="stylesheet" href="./swipper/swiper-bundle.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="/CSS/base.css">
    <link rel="stylesheet" href="/CSS/tablet.css">
    <link rel="stylesheet" href="/CSS/mobile.css">
    <link rel="stylesheet" href="/CSS/page2.css">
    <link rel="stylesheet" href="/CSS/style.css">


    @php
    // Lấy đường dẫn URL hiện tại
    $currentUrl = url()->current();

    // Tách chuỗi URL thành mảng các phần
    $parts = explode('/', $currentUrl);

    // Lấy giá trị cuối cùng của mảng, tức là "ASUS"
    $category = end($parts);
    @endphp

    <title>{{ $category }}</title>

</head>

<body>
    <div id="main">
        <!-- Header -->
        <div class="header__height"></div>
        <div class="header__background">
            <!-- Điện thoại -->
            <div class="smartphone__header__logo">
                <a href=""><img src="/assets/img/zalo suopprt/cellphones.png" alt=""></a>
            </div>
            <div class="smartphone__header__search">
                <i class="fas fa-search"></i>
                <input type="text" name="" id="" placeholder="Bạn cần tìm gì?">

            </div>
            <button></button>
            <div class="smartphone__header__location">
                <i class="ti-location-pin"></i>
                <div class="smartphone__header__location__desc">
                    <p>Xem giá tại</p>

                    <p>
                        Hồ Chí Minh
                    </p>
                </div>
                <i class="fas fa-angle-down"></i>
            </div>
            <div class="smartphone__shopping__cart">
                <i class="ti-bag"></i>
                <p>Giỏ hàng</p>
            </div>
            <div class="smartphone__modal">

            </div>
            <!-- End Điện thoại -->
        </div>
        <!-- Header Background Tablet -->
        <div class="tablet__modal"></div>

        <!-- Tablet header location menu -->
        <div class="tablet__header__location__menu__list__modal"></div>
        <ul class="tablet__header__location__menu__list">
            <li class="tablet__header__location__menu__item">
                <a href="" class="tablet__header__location__menu__item__link">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>Hồ Chí Minh</p>
                </a>
            </li>
            <li class="tablet__header__location__menu__item">
                <a href="" class="tablet__header__location__menu__item__link">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>Hà nội</p>
                </a>
            </li>
            <li class="tablet__header__location__menu__item">
                <a href="" class="tablet__header__location__menu__item__link">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>Hải Dương</p>
                </a>
            </li>
            <li class="tablet__header__location__menu__item">
                <a href="" class="tablet__header__location__menu__item__link">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>Bình Dương</p>
                </a>
            </li>
            <li class="tablet__header__location__menu__item">
                <a href="" class="tablet__header__location__menu__item__link">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>Hải Dương</p>
                </a>
            </li>
            <li class="tablet__header__location__menu__item">
                <a href="" class="tablet__header__location__menu__item__link">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>Hải Phòng</p>
                </a>
            </li>
        </ul>
        <div class="tablet__header__background">
            <!-- Tablet -->
            <div class="tablet__header__top">
                <div class="tablet__header__logo">
                    <a href=""><img src="/assets/img/Desktop logo/1.png" alt=""></a>
                </div>
                <div class="tablet__header__logo__scroll">
                    <a href=""><img src="/assets/img/zalo suopprt/cellphones.png" alt=""></a>
                </div>
                <div class="tablet__header__bottom__scroll">
                    <i class="fas fa-search"></i>
                    <input type="text" name="" id="" placeholder="Bạn cần tìm gì?">
                </div>
                <div class="tablet__header__top__right">
                    <div class="tablet__header__location">
                        <i class="ti-location-pin"></i>
                        <div class="tablet__header__location__desc">
                            <p>Xem giá tại</p>
                            <p>
                                Hồ Chí Minh
                            </p>
                        </div>
                        <i class="fas fa-angle-down"></i>
                    </div>
                    <div class="tablet__shopping__cart">
                        <i class="ti-bag"></i>
                        <p>Giỏ hàng</p>
                    </div>
                </div>
            </div>
            <div class="tablet__header__bottom">
                <i class="fas fa-search"></i>
                <input type="text" name="" id="" placeholder="Bạn cần tìm gì?">
            </div>

            <!-- End Tablet -->
        </div>
        <!-- End Header Background tablet -->
        <div class="header grid wide">
            <div class="row">
                <!-- Logo Icon -->
                <div class="header__logo__wrapper ">
                    <div class="header__logo">

                    </div>
                    <span class="header__logo__line__1st"></span>
                    <span class="header__logo__line__2nd"></span>
                    <span class="header__logo__line__3rd"></span>
                </div>
                <!-- Logo Image -->
                <div class="header__logo__img">
                    <a href="http://127.0.0.1:8000/homepage"><img src="/Images/assets/img/zalo suopprt/shopee.png" alt="" style="height: 90%; width: 150px; margin-top: 3px;"></a>
                </div>




                <!-- Location Sotre -->
                <div class="header__location__wrapper">
                    <div class="header__location__icon">
                        <i class="ti-location-pin"></i>
                    </div>
                    <div class="header__location__desc">
                        <span class="header__location__desc__1st">Xem giá tại</span>
                        <span class="header__location__desc__2nd">
                            <p class="header__location__desc__2nd__text"> Hồ Chí Minh</p>
                            <i class="ti-angle-down header__location__desc__2nd__icon"></i>
                        </span>
                    </div>
                </div>
                <!-- Submenu Location Store -->
                <div class="header__location__submenu">
                    <ul class="header__location__submenu__list">
                        <li class="header__location__submenu__item">
                            <a href="" class="header__location__submenu__item__link">
                                <i class="fas fa-map-marker-alt header__location__submenu__item__link__icon"></i>
                                <p class="header__location__submenu__item__link__text">&ensp;Hồ Chí Minh</p>
                            </a>
                        </li>
                        <li class="header__location__submenu__item">
                            <a href="" class="header__location__submenu__item__link">
                                <i class="fas fa-map-marker-alt header__location__submenu__item__link__icon"></i>
                                <p class="header__location__submenu__item__link__text">&ensp;Hà Nội</p>
                            </a>
                        </li>
                        <li class="header__location__submenu__item">
                            <a href="" class="header__location__submenu__item__link">
                                <i class="fas fa-map-marker-alt header__location__submenu__item__link__icon"></i>
                                <p class="header__location__submenu__item__link__text">&ensp;Bình Dương</p>
                            </a>
                        </li>
                        <li class="header__location__submenu__item">
                            <a href="" class="header__location__submenu__item__link">
                                <i class="fas fa-map-marker-alt header__location__submenu__item__link__icon"></i>
                                <p class="header__location__submenu__item__link__text">&ensp;Hải Dương</p>
                            </a>
                        </li>
                        <li class="header__location__submenu__item">
                            <a href="" class="header__location__submenu__item__link">
                                <i class="fas fa-map-marker-alt header__location__submenu__item__link__icon"></i>
                                <p class="header__location__submenu__item__link__text">&ensp;Hải Phòng</p>
                            </a>
                        </li>
                        <li class="header__location__submenu__item">
                            <a href="" class="header__location__submenu__item__link">
                                <i class="fas fa-map-marker-alt header__location__submenu__item__link__icon"></i>
                                <p class="header__location__submenu__item__link__text">&ensp;Bắc Ninh</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Submenu modal -->
                <div class="header__location__submenu__modal"></div>
                <!-- Search bar -->
                <div class="header__search__bar">
                    <div class="header__search__bar__icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <div class="header__search__bar__input">
                        <input type="text" placeholder="Bạn cần tìm gì?" style="float: left;" ng-model="searchQuery">

                    </div>

                    <div class="header__search__bar__modal">

                    </div>
                    <a ng-click="saveToLocalStorage()" target="_blank" href="./SearchProduct.html" style="float: left; text-decoration: none; color: black; width: 40px; margin-top: 10px;margin-left: -30px; "><i class="fa-solid fa-magnifying-glass"></i></a>

                </div>
                <!-- Navbar list -->
                <div class="header__navbar">
                    <ul class="header__navbar__list">
                        <li class="header__navbar__item">
                            <div class="header__navbar__item__wrapper">
                                <a href="" class="header__navbar__item__link">
                                    <i class="fas fa-phone-alt"></i>
                                    <div class="header__navbar__item__link__desc__wrapper">
                                        <p>Gọi mua hàng</p>
                                        <p>1800.2097</p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="header__navbar__item">
                            <div class="header__navbar__item__wrapper">
                                <a href="" class="header__navbar__item__link">
                                    <i class="ti-location-pin"></i>
                                    <div class="header__navbar__item__link__desc__wrapper">
                                        <p>Cửa hàng</p>
                                        <p>gần bạn</p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="header__navbar__item">
                            <div class="header__navbar__item__wrapper">
                                <a href="" class="header__navbar__item__link">
                                    <i class="fas fa-shipping-fast"></i>
                                    <div class="header__navbar__item__link__desc__wrapper">
                                        <p>Tra cứu</p>
                                        <p>đơn hàng</p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="header__navbar__item">
                            <div class="header__navbar__item__wrapper">
                                <a href="" class="header__navbar__item__link">
                                    <i class="ti-bag"></i>
                                    <div class="header__navbar__item__link__desc__wrapper">
                                        <p>Giỏ</p>
                                        <p>hàng</p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="header__navbar__item">
                            <div class="header__navbar__item__wrapper__last">
                                <a href="" class="header__navbar__item__link">
                                    <div class="header__navbar__item__link__icon__wrapper__last">
                                        <i class="far fa-user-circle"></i>
                                    </div>
                                    <div class="header__navbar__item__link__desc__wrapper">
                                        <p id="username-display" style="font-size: 20px;">Xin chào : </p>

                                    </div>
                                    <a href="./login.html" style="text-decoration: none; margin-left: 10px; color: #fff;">Đăng Xuất</a>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End header -->
        <!-- Slide -->
        <div class="slide grid wide">
            <div class="row">
                <div class="c-2 tablet__slidebar">
                    <div class="slidebar">
                        <ul class="slidebar__list">
                            <li class="slidebar__item">
                                <a href="" class="slidebar__item__link">
                                    <div class="slidebar__item__link__text__wrapper">
                                        <div class="slidebar__item__link__text__wrapper__icon__box">
                                            <i class="fas fa-mobile-alt"></i>
                                        </div>
                                        <p>Điện thoại</p>
                                    </div>
                                    <div class="slidebar__item__link__icon__last__wrapper">
                                        <i class="ti-angle-right"></i>
                                    </div>
                                </a>
                                <!-- Subnav điện thoại -->
                                <div class="slidebar__item__submenu">
                                    <ul class="slidebar__item__submenu__list">
                                        <li class="slidebar__item__submenu__item">
                                            <a href="" class="slidebar__item__submenu__item__link">
                                                <p>Apple</p>
                                                <i class="ti-angle-right"></i>
                                            </a>
                                            <!-- Subnav Second Điện thoại-->
                                            <div class="slidebar__item__submenu__second">
                                                <ul class="slidebar__item__submenu__list">
                                                    <li class="slidebar__item__submenu__item">
                                                        <a href="" class="slidebar__item__submenu__item__link">
                                                            <p>iPhone 12 Series</p>
                                                        </a>
                                                    </li>
                                                    <li class="slidebar__item__submenu__item">
                                                        <a href="" class="slidebar__item__submenu__item__link">
                                                            <p>iPhone 11 Series</p>
                                                        </a>
                                                    </li>
                                                    <li class="slidebar__item__submenu__item">
                                                        <a href="" class="slidebar__item__submenu__item__link">
                                                            <p>iPhone X | XR</p>
                                                        </a>
                                                    </li>
                                                    <li class="slidebar__item__submenu__item">
                                                        <a href="" class="slidebar__item__submenu__item__link">
                                                            <p>iPhone SE 2020</p>
                                                        </a>
                                                    </li>
                                                    <li class="slidebar__item__submenu__item">
                                                        <a href="" class="slidebar__item__submenu__item__link">
                                                            <p>iPhone 13 Series</p>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="slidebar__item__submenu__item">
                                            <a href="" class="slidebar__item__submenu__item__link">
                                                <p>Samsung</p>
                                            </a>
                                        </li>
                                        <li class="slidebar__item__submenu__item">
                                            <a href="" class="slidebar__item__submenu__item__link">
                                                <p>Xiaomi</p>
                                            </a>
                                        </li>
                                        <li class="slidebar__item__submenu__item">
                                            <a href="" class="slidebar__item__submenu__item__link">
                                                <p>OPPO</p>
                                            </a>
                                        </li>
                                        <li class="slidebar__item__submenu__item">
                                            <a href="" class="slidebar__item__submenu__item__link">
                                                <p>Nokia</p>
                                            </a>
                                        </li>
                                        <li class="slidebar__item__submenu__item">
                                            <a href="" class="slidebar__item__submenu__item__link">
                                                <p>Realme</p>
                                            </a>
                                        </li>
                                        <li class="slidebar__item__submenu__item">
                                            <a href="" class="slidebar__item__submenu__item__link">
                                                <p>Vsmart</p>
                                            </a>
                                        </li>
                                        <li class="slidebar__item__submenu__item">
                                            <a href="" class="slidebar__item__submenu__item__link">
                                                <p>ASUS</p>
                                            </a>
                                        </li>
                                        <li class="slidebar__item__submenu__item">
                                            <a href="" class="slidebar__item__submenu__item__link">
                                                <p>Vivo</p>
                                            </a>
                                        </li>
                                        <li class="slidebar__item__submenu__item">
                                            <a href="" class="slidebar__item__submenu__item__link">
                                                <p>One Plus</p>
                                            </a>
                                        </li>
                                        <li class="slidebar__item__submenu__item">
                                            <a href="" class="slidebar__item__submenu__item__link">
                                                <p>POCO</p>
                                            </a>
                                        </li>
                                        <li class="slidebar__item__submenu__item">
                                            <a href="" class="slidebar__item__submenu__item__link">
                                                <p>Nubia</p>
                                            </a>
                                        </li>
                                        <li class="slidebar__item__submenu__item">
                                            <a href="" class="slidebar__item__submenu__item__link">
                                                <p>Điện thoại phổ thông
                                            </a>
                                        </li>
                                        <li class="slidebar__item__submenu__item">
                                            <a href="" class="slidebar__item__submenu__item__link">
                                                <p>Tin đồn - Mới ra
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="slidebar__item">
                                <a href="" class="slidebar__item__link">
                                    <div class="slidebar__item__link__text__wrapper">
                                        <div class="slidebar__item__link__text__wrapper__icon__box">
                                            <i class="fas fa-laptop"></i>
                                        </div>
                                        <p>Laptop,PC,Màn hình</p>
                                    </div>
                                    <div class="slidebar__item__link__icon__last__wrapper">
                                        <i class="ti-angle-right"></i>
                                    </div>
                                    <!-- Subnav laptop,pc-->
                                    <div class="slidebar__item__submenu">
                                        <ul class="slidebar__item__submenu__list">
                                            <li class="slidebar__item__submenu__item">
                                                <a href="" class="slidebar__item__submenu__item__link">
                                                    <p>Mac</p>
                                                    <i class="ti-angle-right"></i>
                                                </a>
                                                <!-- Subnav Second laptop,pc-->
                                                <div class="slidebar__item__submenu__second">
                                                    <ul class="slidebar__item__submenu__list">
                                                        <li class="slidebar__item__submenu__item">
                                                            <a href="" class="slidebar__item__submenu__item__link">
                                                                <p>MacBook Air</p>
                                                            </a>
                                                        </li>
                                                        <li class="slidebar__item__submenu__item">
                                                            <a href="" class="slidebar__item__submenu__item__link">
                                                                <p>MacBook Pro</p>
                                                            </a>
                                                        </li>
                                                        <li class="slidebar__item__submenu__item">
                                                            <a href="" class="slidebar__item__submenu__item__link">
                                                                <p>Mac mini</p>
                                                            </a>
                                                        </li>
                                                        <li class="slidebar__item__submenu__item">
                                                            <a href="" class="slidebar__item__submenu__item__link">
                                                                <p>iMac</p>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="slidebar__item__submenu__item">
                                                <a href="" class="slidebar__item__submenu__item__link">
                                                    <p>HP</p>
                                                </a>
                                            </li>
                                            <li class="slidebar__item__submenu__item">
                                                <a href="" class="slidebar__item__submenu__item__link">
                                                    <p>Dell</p>
                                                </a>
                                            </li>
                                            <li class="slidebar__item__submenu__item">
                                                <a href="" class="slidebar__item__submenu__item__link">
                                                    <p>Lenovo</p>
                                                </a>
                                            </li>
                                            <li class="slidebar__item__submenu__item">
                                                <a href="" class="slidebar__item__submenu__item__link">
                                                    <p>Microsoft Surface</p>
                                                </a>
                                            </li>
                                            <li class="slidebar__item__submenu__item">
                                                <a href="" class="slidebar__item__submenu__item__link">
                                                    <p>ASUS</p>
                                                </a>
                                            </li>
                                            <li class="slidebar__item__submenu__item">
                                                <a href="" class="slidebar__item__submenu__item__link">
                                                    <p>Acer</p>
                                                </a>
                                            </li>
                                            <li class="slidebar__item__submenu__item">
                                                <a href="" class="slidebar__item__submenu__item__link">
                                                    <p>LG</p>
                                                </a>
                                            </li>
                                            <li class="slidebar__item__submenu__item">
                                                <a href="" class="slidebar__item__submenu__item__link">
                                                    <p>Huawei</p>
                                                </a>
                                            </li>
                                            <li class="slidebar__item__submenu__item">
                                                <a href="" class="slidebar__item__submenu__item__link">
                                                    <p>MSI</p>
                                                </a>
                                            </li>
                                            <li class="slidebar__item__submenu__item">
                                                <a href="" class="slidebar__item__submenu__item__link">
                                                    <p>Laptop Avita</p>
                                                </a>
                                            </li>
                                            <li class="slidebar__item__submenu__item">
                                                <a href="" class="slidebar__item__submenu__item__link">
                                                    <p>Gigabyte</p>
                                                </a>
                                            </li>
                                            <li class="slidebar__item__submenu__item">
                                                <a href="" class="slidebar__item__submenu__item__link">
                                                    <p>Máy tính để bàn</p>
                                                </a>
                                            </li>
                                            <li class="slidebar__item__submenu__item">
                                                <a href="" class="slidebar__item__submenu__item__link">
                                                    <p>Màn hình</p>
                                                </a>
                                            </li>
                                            <li class="slidebar__item__submenu__item">
                                                <a href="" class="slidebar__item__submenu__item__link">
                                                    <p>Máy in</p>
                                                </a>
                                            </li>
                                            <li class="slidebar__item__submenu__item">
                                                <a href="" class="slidebar__item__submenu__item__link">
                                                    <p>Linh kiện Laptop</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </li>
                            <li class="slidebar__item">
                                <a href="" class="slidebar__item__link">
                                    <div class="slidebar__item__link__text__wrapper">
                                        <div class="slidebar__item__link__text__wrapper__icon__box">
                                            <i class="fas fa-tablet-alt"></i>
                                        </div>
                                        <p>Tablet</p>
                                    </div>
                                    <div class="slidebar__item__link__icon__last__wrapper">
                                        <i class="ti-angle-right"></i>
                                    </div>
                                    <!-- Subnav Tablet-->
                                    <div class="slidebar__item__submenu">
                                        <ul class="slidebar__item__submenu__list">
                                            <li class="slidebar__item__submenu__item">
                                                <a href="" class="slidebar__item__submenu__item__link">
                                                    <p>iPad Pro</p>
                                                </a>
                                            </li>
                                            <li class="slidebar__item__submenu__item">
                                                <a href="" class="slidebar__item__submenu__item__link">
                                                    <p>iPad 10.2</p>
                                                </a>
                                            </li>
                                            <li class="slidebar__item__submenu__item">
                                                <a href="" class="slidebar__item__submenu__item__link">
                                                    <p>iPad Air</p>
                                                </a>
                                            </li>
                                            <li class="slidebar__item__submenu__item">
                                                <a href="" class="slidebar__item__submenu__item__link">
                                                    <p>iPad mini</p>
                                                </a>
                                            </li>
                                            <li class="slidebar__item__submenu__item">
                                                <a href="" class="slidebar__item__submenu__item__link">
                                                    <p>Samsung</p>
                                                </a>
                                            </li>
                                            <li class="slidebar__item__submenu__item">
                                                <a href="" class="slidebar__item__submenu__item__link">
                                                    <p>Lenovo</p>
                                                </a>
                                            </li>
                                            <li class="slidebar__item__submenu__item">
                                                <a href="" class="slidebar__item__submenu__item__link">
                                                    <p>Xiaomi</p>
                                                </a>
                                            </li>
                                            <li class="slidebar__item__submenu__item">
                                                <a href="" class="slidebar__item__submenu__item__link">
                                                    <p>Kindle</p>
                                                </a>
                                            </li>
                                            <li class="slidebar__item__submenu__item">
                                                <a href="" class="slidebar__item__submenu__item__link">
                                                    <p>Máy đọc sách</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </li>
                            <li class="slidebar__item">
                                <a href="" class="slidebar__item__link">
                                    <div class="slidebar__item__link__text__wrapper">
                                        <div class="slidebar__item__link__text__wrapper__icon__box">
                                            <i class="fas fa-headphones-alt"></i>
                                        </div>
                                        <p>Âm thanh</p>
                                    </div>
                                    <div class="slidebar__item__link__icon__last__wrapper">
                                        <i class="ti-angle-right"></i>
                                    </div>
                                    <!-- Subnav Âm thanh-->
                                    <div class="slidebar__item__submenu">
                                        <ul class="slidebar__item__submenu__list">
                                            <li class="slidebar__item__submenu__item">
                                                <a href="" class="slidebar__item__submenu__item__link">
                                                    <p>Loa</p>
                                                    <i class="ti-angle-right"></i>
                                                </a>
                                                <!-- Subnav Second Âm thanh-->
                                                <div class="slidebar__item__submenu__second">
                                                    <ul class="slidebar__item__submenu__list">
                                                        <li class="slidebar__item__submenu__item">
                                                            <a href="" class="slidebar__item__submenu__item__link">
                                                                <p>Loa Bluetooth</p>
                                                            </a>
                                                        </li>
                                                        <li class="slidebar__item__submenu__item">
                                                            <a href="" class="slidebar__item__submenu__item__link">
                                                                <p>Loa Tivi | Soundbar</p>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="slidebar__item__submenu__item">
                                                <a href="" class="slidebar__item__submenu__item__link">
                                                    <p>Tai nghe</p>
                                                    <i class="ti-angle-right"></i>
                                                </a>
                                                <!-- Subnav Second Âm thanh-->
                                                <div class="slidebar__item__submenu__second">
                                                    <ul class="slidebar__item__submenu__list">
                                                        <li class="slidebar__item__submenu__item">
                                                            <a href="" class="slidebar__item__submenu__item__link">
                                                                <p>Tai nghe Bluetooth</p>
                                                            </a>
                                                        </li>
                                                        <li class="slidebar__item__submenu__item">
                                                            <a href="" class="slidebar__item__submenu__item__link">
                                                                <p>Tai nghe nhét tai</p>
                                                            </a>
                                                        </li>
                                                        <li class="slidebar__item__submenu__item">
                                                            <a href="" class="slidebar__item__submenu__item__link">
                                                                <p>Tai nghe chụp tai</p>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </li>
                            <li class="slidebar__item">
                                <a href="" class="slidebar__item__link">
                                    <div class="slidebar__item__link__text__wrapper">
                                        <div class="slidebar__item__link__text__wrapper__icon__box">
                                            <i class="far fa-clock"></i>
                                        </div>
                                        <p>Đồng hồ</p>
                                    </div>
                                    <div class="slidebar__item__link__icon__last__wrapper">
                                        <i class="ti-angle-right"></i>
                                    </div>
                                    <!-- Subnav Đồng hồ-->
                                    <div class="slidebar__item__submenu">
                                        <ul class="slidebar__item__submenu__list">
                                            <li class="slidebar__item__submenu__item">
                                                <a href="" class="slidebar__item__submenu__item__link">
                                                    <p>Apple Watch</p>
                                                </a>
                                            </li>
                                            <li class="slidebar__item__submenu__item">
                                                <a href="" class="slidebar__item__submenu__item__link">
                                                    <p>Samsung</p>
                                                </a>
                                            </li>
                                            <li class="slidebar__item__submenu__item">
                                                <a href="" class="slidebar__item__submenu__item__link">
                                                    <p>Garmin</p>
                                                </a>
                                            </li>
                                            <li class="slidebar__item__submenu__item">
                                                <a href="" class="slidebar__item__submenu__item__link">
                                                    <p>Xiaomi</p>
                                                </a>
                                            </li>
                                            <li class="slidebar__item__submenu__item">
                                                <a href="" class="slidebar__item__submenu__item__link">
                                                    <p>Amazfit</p>
                                                </a>
                                            </li>
                                            <li class="slidebar__item__submenu__item">
                                                <a href="" class="slidebar__item__submenu__item__link">
                                                    <p>Huawei</p>
                                                </a>
                                            </li>
                                            <li class="slidebar__item__submenu__item">
                                                <a href="" class="slidebar__item__submenu__item__link">
                                                    <p>OPPO</p>
                                                </a>
                                            </li>
                                            <li class="slidebar__item__submenu__item">
                                                <a href="" class="slidebar__item__submenu__item__link">
                                                    <p>Hãng khác</p>
                                                </a>
                                            </li>
                                            <li class="slidebar__item__submenu__item">
                                                <a href="" class="slidebar__item__submenu__item__link">
                                                    <p>Vòng tay thông minh</p>
                                                </a>
                                            </li>
                                            <li class="slidebar__item__submenu__item">
                                                <a href="" class="slidebar__item__submenu__item__link">
                                                    <p>Đồng hồ định vị trẻ em</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </li>
                            <li class="slidebar__item">
                                <a href="" class="slidebar__item__link">
                                    <div class="slidebar__item__link__text__wrapper">
                                        <div class="slidebar__item__link__text__wrapper__icon__box">
                                            <i class="fas fa-home"></i>
                                        </div>
                                        <p>Nhà thông minh</p>
                                    </div>
                                    <div class="slidebar__item__link__icon__last__wrapper">
                                        <i class="ti-angle-right"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="slidebar__item">
                                <a href="" class="slidebar__item__link">
                                    <div class="slidebar__item__link__text__wrapper">
                                        <div class="slidebar__item__link__text__wrapper__icon__box">
                                            <i class="far fa-keyboard"></i>
                                        </div>
                                        <p>Phụ kiện</p>
                                    </div>
                                    <div class="slidebar__item__link__icon__last__wrapper">
                                        <i class="ti-angle-right"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="slidebar__item">
                                <a href="" class="slidebar__item__link">
                                    <div class="slidebar__item__link__text__wrapper">
                                        <div class="slidebar__item__link__text__wrapper__icon__box">
                                            <i class="fas fa-sync"></i>
                                        </div>
                                        <p>Thu cũ</p>
                                    </div>
                                    <div class="slidebar__item__link__icon__last__wrapper">
                                        <i class="ti-angle-right"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="slidebar__item">
                                <a href="" class="slidebar__item__link">
                                    <div class="slidebar__item__link__text__wrapper">
                                        <div class="slidebar__item__link__text__wrapper__icon__box">
                                            <i class="fas fa-cube"></i>
                                        </div>
                                        <p>Hàng cũ</p>
                                    </div>
                                    <div class="slidebar__item__link__icon__last__wrapper">
                                        <i class="ti-angle-right"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="slidebar__item">
                                <a href="" class="slidebar__item__link">
                                    <div class="slidebar__item__link__text__wrapper">
                                        <div class="slidebar__item__link__text__wrapper__icon__box">
                                            <i class="fas fa-sim-card"></i>
                                        </div>
                                        <p>Sim thẻ</p>
                                    </div>
                                    <div class="slidebar__item__link__icon__last__wrapper">
                                        <i class="ti-angle-right"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="slidebar__item">
                                <a href="" class="slidebar__item__link">
                                    <div class="slidebar__item__link__text__wrapper">
                                        <div class="slidebar__item__link__text__wrapper__icon__box">
                                            <i class="far fa-newspaper"></i>
                                        </div>
                                        <p>Tin công nghệ</p>
                                    </div>
                                </a>
                            </li>
                            <li class="slidebar__item">
                                <a href="" class="slidebar__item__link">
                                    <div class="slidebar__item__link__text__wrapper">
                                        <div class="slidebar__item__link__text__wrapper__icon__box">
                                            <i class="fas fa-bullhorn"></i>
                                        </div>
                                        <p>Khuyến mãi</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="c-7 pc__slider__wrapper">
                    <div class="slider">
                        <div class="slider__top">
                            <div class="slider__top__next__btn">
                                <i class="fas fa-angle-right"></i>
                            </div>
                            <div class="slider__top__prev__btn">
                                <i class="fas fa-angle-left"></i>
                            </div>
                            <!-- PC -->
                            <a href="">
                                <div class="slider__top__wrapper">

                                    <img src="/Images/assets/img/Slide/Slider/1.webp" alt="" class="slider__top__item">
                                    <img src="/Images/assets/img/Slide/Slider/2.webp" alt="" class="slider__top__item">
                                    <img src="/Images/assets/img/Slide/Slider/3.webp" alt="" class="slider__top__item">
                                    <img src="/Images/assets/img/Slide/Slider/4.webp" alt="" class="slider__top__item">
                                    <img src="/Images/assets/img/Slide/Slider/5.webp" alt="" class="slider__top__item">
                                </div>
                            </a>
                            <!-- End PC -->
                        </div>
                        <div class="slider__bottom">
                            <div class="slider__bottom__list">
                                <!-- 1st -->
                                <div class="slider__bottom__item item--active">
                                    <div class="slider__bottom__item__link">
                                        <p class="slider__bottom__item__link__text__1st">Tháng thành viên</p>
                                        <p class="slider__bottom__item__link__text__2nd">Ưu đãi liên miên</p>
                                    </div>
                                    <div class="slider__bottom__item__underline dot--active"></div>
                                </div>
                                <!-- 2nd -->
                                <div class="slider__bottom__item">
                                    <div class="slider__bottom__item__link">
                                        <p class="slider__bottom__item__link__text__1st">Z FOLD3 | Z FLIP3 5G</p>
                                        <p class="slider__bottom__item__link__text__2nd">Ưu đãi cực lớn</p>
                                    </div>
                                    <div class="slider__bottom__item__underline"></div>
                                </div>
                                <!-- 3rd -->
                                <div class="slider__bottom__item">
                                    <div class="slider__bottom__item__link">
                                        <p class="slider__bottom__item__link__text__1st">XIAOMI 11T SERIES</p>
                                        <p class="slider__bottom__item__link__text__2nd">Đặt trước ưu đãi khủng</p>
                                    </div>
                                    <div class="slider__bottom__item__underline"></div>
                                </div>
                                <!-- 4th -->
                                <div class="slider__bottom__item">
                                    <div class="slider__bottom__item__link">
                                        <p class="slider__bottom__item__link__text__1st">ZENBOOK 12 OLED</p>
                                        <p class="slider__bottom__item__link__text__2nd">Giá tốt mua ngay</p>
                                    </div>
                                    <div class="slider__bottom__item__underline"></div>
                                </div>
                                <!-- 5th -->
                                <div class="slider__bottom__item">
                                    <div class="slider__bottom__item__link">
                                        <p class="slider__bottom__item__link__text__1st">Loa JBL CHARGE 5</p>
                                        <p class="slider__bottom__item__link__text__2nd">Mở bán giá tốt</p>
                                    </div>
                                    <div class="slider__bottom__item__underline"></div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="c-3">
                    <div class="slide__ads__wrapper tablet__disable">
                        <a href=""><img src="/Images/assets/img/Slide/Ads/1.png" alt=""></a>
                    </div>
                    <div class="slide__ads__wrapper tablet__disable">
                        <a href=""><img src="/Images/assets/img/Slide/Ads/2.png" alt=""></a>
                    </div>
                    <div class="slide__ads__wrapper tablet__disable">
                        <a href=""><img src="/Images/assets/img/Slide/Ads/3.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End slide -->
        <!-- Tablet slider -->
        <div class="tablet__slider">
            <div class="tablet__slider__wrapper">

                <div class="tablet__slider__item">
                    <img src="/Images/assets/img/Slide/Slider/1.png" alt="">
                </div>
                <div class="tablet__slider__item">
                    <img src="/Images/assets/img/Slide/Slider/2.png" alt="">
                </div>
                <div class="tablet__slider__item">
                    <img src="/Images/assets/img/Slide/Slider/3.png" alt="">
                </div>
                <div class="tablet__slider__item">
                    <img src="/Images/assets/img/Slide/Slider/4.png" alt="">
                </div>
                <div class="tablet__slider__item">
                    <img src="/Images/assets/img/Slide/Slider/5.png" alt="">
                </div>
                <div class="tablet__slider__item">
                    <img src="/Images/assets/img/Slide/Slider/6.png" alt="">
                </div>
            </div>
            <ul class="tablet__slider__dot__list">
                <li class="tablet__slider__dot__item dot-list-style"></li>
                <li class="tablet__slider__dot__item"></li>
                <li class="tablet__slider__dot__item"></li>
                <li class="tablet__slider__dot__item"></li>
                <li class="tablet__slider__dot__item"></li>
                <li class="tablet__slider__dot__item"></li>
            </ul>
        </div>
        <!-- End Smarphone Slider -->
        <!-- Tablet slider -->
        <div class="smartphone__slider">
            <div class="smartphone__slider__wrapper">
                <div class="smartphone__slider__item">
                    <img src="/Images/assets/img/Slide/Slider/1.png" alt="">
                </div>
                <div class="smartphone__slider__item">
                    <img src="/Images/assets/img/Slide/Slider/2.png" alt="">
                </div>
                <div class="smartphone__slider__item">
                    <img src="/Images/assets/img/Slide/Slider/3.png" alt="">
                </div>
                <div class="smartphone__slider__item">
                    <img src="/Images/assets/img/Slide/Slider/4.png" alt="">
                </div>
                <div class="smartphone__slider__item">
                    <img src="/Images/assets/img/Slide/Slider/5.png" alt="">
                </div>
                <div class="smartphone__slider__item">
                    <img src="/Images/assets/img/Slide/Slider/6.png" alt="">
                </div>
            </div>
            <ul class="smartphone__slider__dot__list">
                <li class="smartphone__slider__dot__item dot-list-style"></li>
                <li class="smartphone__slider__dot__item"></li>
                <li class="smartphone__slider__dot__item"></li>
                <li class="smartphone__slider__dot__item"></li>
                <li class="smartphone__slider__dot__item"></li>
                <li class="smartphone__slider__dot__item"></li>
            </ul>
        </div>
        <!-- End Smartphone Slider -->
        <!-- Web Ads -->
        <div class="web__ads gird wide">
            <div class="row">
                <div class="web__ads__box">
                    <a href="">
                        <img src="/Images/assets/img/Web ads/1.png" alt="" class="web__ads__box__pc__img">
                    </a>
                    <a href="">
                        <img src="/Images/assets/Tablet img/slide ads.png" alt="" class="web__ads__box__tablet__img">
                    </a>
                </div>
            </div>
        </div>
        <!-- End Web Ads -->

        <div class="row featured__phone__gutter" style="height: auto;">
            <div class="c-3">
                <div class="featured__phone__title" style="height: auto;width:900px;">
                    <a href="{{ url('/homepage', ['product' => $category]) }}" class="featured__phone__title__text" style="width: 100%;margin-left: 160px; color:red;font-size:30px;">KẾT QUẢ TÌM KIẾM CHO :{{ $category }}</a>
                </div>
                <div class="menu-search" ng-controller="ChuyenMucCtrl">
                    <nav class="content-menu-search">
                        <ul class="menu-search-list">
                            <li class="menu-search-item" ng-repeat="chuyenMuc in ListCM" style="margin-right: 5px; float: left; margin-left: 25px; margin-top: 8px;">

                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Laptop -->
        @foreach($chunkedProducts as $chunk)
        <div class="row flash__sale__product__list__wrapper" style="margin-left: 155px;">
            <div class="flash__sale__product__list">
                @foreach($chunk as $product)
                <div class="prd" style="float: left; width:220px; height:auto; margin-right:20px;">
                    <div class="flash__sale__product">
                        <div class="flash__sale__discount">
                            <p>Giảm 18%</p>
                        </div>
                        <div class="flash__sale__product__img__wrapper" style="margin-left: 15px;">
                            <a href=""><img src="{{ $product->AnhSanPham }}" alt="" height="160px" width="180px"></a>
                        </div>
                        <div class="flash__sale__product__desc">
                            <div class="title-img-product" style="font-size: 12px;">
                                <a class="ttl" href="{{ route('layouts.PrdDetails', ['MaSP' => $product->MaSanPham]) }}" style="color: black;">{{ $product->TenSanPham }}</a>
                            </div>
                            <div class="d-img-product" style="margin-top: 15px; margin-left: -2px;">đ</div>
                            <div class="price-img-product" style="margin-top: 13px; margin-right: 25px ; margin-left: -0px">{{ number_format($product->GiaGiam, 0) }}</div>
                            <div class="d-img-products" style="margin-top: 15px; margin-left:10px">đ</div>
                            <div class="rateprd" style="margin-top: 13px;">{{ number_format($product->Gia, 0) }}</div>
                            <div class="total" style="display: inline-block; font-size: 13px;width: 111px;margin-top: 30px;margin-left: -1px;color: #666666">Số lượng : {{ number_format($product->SoLuong, 0) }}</div>
                            <div class="prd-sold" style="margin-left: 3px">Đã bán : {{ number_format($product->SoLuongDaBan, 0) }}k</div>
                            <div>
                                <form method="POST" action="{{ route('add.to.cart') }}">
                                    @csrf
                                    <input type="hidden" name="productId" value="{{ $product->MaSanPham }}">
                                    <input type="hidden" name="categoryId" value="{{ $product->MaChuyenMuc }}">
                                    <input type="hidden" name="productName" value="{{ $product->TenSanPham }}">
                                    <input type="hidden" name="productImage" value="{{ $product->AnhSanPham }}">
                                    <input type="hidden" name="productPrice" value="{{ $product->GiaGiam }}">
                                    <input type="hidden" name="productOriginalPrice" value="{{ $product->Gia }}">
                                    <input type="hidden" name="productSoldQuantity" value="{{ $product->SoLuongDaBan }}">
                                    <input type="hidden" name="productQuantity" value="1"> <!-- Đặt giá trị mặc định là 1 -->

                                    <button type="submit" name="btn-add-carts" class="btn-add-carts" style="margin-bottom:5px;background-color: rgba(208,1,27,.08); color: red; border: none; height: 30px; border-radius: 5px; width: 100%;">
                                        THÊM VÀO GIỎ HÀNG<i class="fa-solid fa-cart-plus" style="margin-left: 10px;"></i>
                                    </button>
                                </form>



                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach

        <!-- Flash Sale -->


        <!-- End chuyên trang thương hiệu -->
        <!-- End Featured item -->
        <!-- Footer -->
        <div class="footer grid wide">
            <div class="row tablet__footer">
                <div class="c-3 tablet__footer__column-2">
                    <div class="footer__1st">
                        <div class="footer__1st__text__wrapper">
                            <a href="" class="footer__1st__text__title">Tìm cửa hàng</a>
                            <a href="" class="footer__1st__text__body">Tìm cửa hàng gần nhất</a>
                            <a href="" class="footer__1st__text__body">Mua hàng từ xa</a>
                            <a href="" class="footer__1st__text__method">Gặp trực tiếp ở cửa hàng gần nhất(Zalo hoặc gọi điện)</a>
                        </div>
                        <div class="footer__1st__payment__method">
                            <a href="">Phương thức thanh toán</a>
                            <div class="footer__1st__payment__method__wrapper__top">
                                <div class="footer__1st__payment__method__wrapper__top__img">
                                    <a href=""><img src="/Images/assets/img/footer/payment/2.png" alt=""></a>
                                </div>
                                <div class="footer__1st__payment__method__wrapper__top__img">
                                    <a href=""><img src="/Images/assets/img/footer/payment/2.png" alt=""></a>
                                </div>
                                <div class="footer__1st__payment__method__wrapper__top__img">
                                    <a href=""><img src="/Images/assets/img/footer/payment/2.png" alt=""></a>
                                </div>
                                <div class="footer__1st__payment__method__wrapper__top__img">
                                    <a href=""><img src="/Images/assets/img/footer/payment/2.png" alt=""></a>
                                </div>
                            </div>
                            <div class="footer__1st__payment__method__wrapper__top">
                                <div class="footer__1st__payment__method__wrapper__top__img">
                                    <a href=""><img src="/Images/assets/img/footer/payment/2.png" alt=""></a>
                                </div>
                                <div class="footer__1st__payment__method__wrapper__top__img">
                                    <a href=""><img src="/Images/assets/img/footer/payment/2.png" alt=""></a>
                                </div>
                                <div class="footer__1st__payment__method__wrapper__top__img">
                                    <a href=""><img src="/Images/assets/img/footer/payment/2.png" alt=""></a>
                                </div>
                                <div class="footer__1st__payment__method__wrapper__top__img">
                                    <a href=""><img src="/Images/assets/img/footer/payment/2.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="c-3 tablet__footer__column">
                    <div class="footer__1st">
                        <div class="footer__1st__text__wrapper">
                            <a href="" class="footer__1st__text__body">Gọi mua hàng: <span class="footer__1st__text__body__bold">1800.2097 </span>(8h00 - 22h00)</a>
                            <a href="" class="footer__1st__text__body">Gọi khiếu nại: <span class="footer__1st__text__body__bold">1800.2063 </span>(8h00 - 21h30)</a>
                            <a href="" class="footer__1st__text__body">Gọi bảo hành: <span class="footer__1st__text__body__bold">1800.2064 </span>(8h00 - 21h00)</a>
                        </div>
                        <div class="footer__1st__payment__method__2nd">
                            <a href="">Đối tác dịch bảo hành</a>
                        </div>
                        <a href="" class="footer__1st__text__body">Điện thoại-Máy tính</a>
                        <button class="btn">
                            <i class="fas fa-dragon"></i>
                            <span>dienthoaivui</span>
                        </button>
                    </div>
                </div>
                <div class="c-3 tablet__fooer__disbale">
                    <div class="footer__1st">
                        <div class="footer__1st__text__wrapper">
                            <a href="" class="footer__1st__text__body">Mua hàng và thanh toán online</a>
                            <a href="" class="footer__1st__text__body">Mua hàng trả góp Online</a>
                            <a href="" class="footer__1st__text__body">Tra thông tin đơn hàng</a>
                            <a href="" class="footer__1st__text__body">Tra điểm Smember</a>
                            <a href="" class="footer__1st__text__body">Tra thông tin bảo hành</a>
                            <a href="" class="footer__1st__text__body">Tra cứu hóa đơn điện tử</a>
                            <a href="" class="footer__1st__text__body">Trung tâm bảo hành chính hãng</a>
                            <a href="" class="footer__1st__text__body">Quy định về việc sao lưu dữ liệu</a>
                            <a href="" class="footer__1st__text__body">Dịch vụ bảo hành điện thoại</a>
                        </div>
                    </div>
                </div>
                <div class="c-3 tablet__fooer__disbale">
                    <div class="footer__1st">
                        <div class="footer__1st__text__wrapper">
                            <a href="" class="footer__1st__text__body">Quy chế hoạt động</a>
                            <a href="" class="footer__1st__text__body">Chính sách bảo hành</a>
                            <a href="" class="footer__1st__text__body">Liên hệ hợp tác kinh doanh</a>
                            <a href="" class="footer__1st__text__body">Ưu đãi từ đối tác</a>
                            <a href="" class="footer__1st__text__body">Tuyển dụng</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End footer -->
        <!-- Footer-information -->
        <div class="footer__information__background">
            <div class="footer__information grid wide">
                <div class="row footer__information__row">
                    <!-- 1st -->
                    <div class="c-4">
                        <div class="footer__information__text__1st">
                            <a href="" class="footer__information__text__1st__a">Điện thoại</a>
                            <span>-</span>
                            <a href="" class="footer__information__text__1st__a">Black Friday 2021</a>
                        </div>
                        <div class="footer__information__text__2nd">
                            <a href="" class="footer__information__text__2nd__a">Điện thoại iPhone 11</a>
                            <span>|</span>
                            <a href="" class="footer__information__text__2nd__a">Điện thoại iPhone 12</a>
                            <span>|</span>
                            <a href="" class="footer__information__text__2nd__a">Điện thoại iPhone 13</a>
                        </div>
                        <div class="footer__information__text__3rd">
                            <a href="" class="footer__information__text__3rd__a">Điện thoại Samsung Galaxy Z Fold 3</a>
                            <span>-</span>
                            <a href="" class="footer__information__text__3rd__a">Đồng hồ Apple Watch Series 7</a>
                        </div>
                    </div>
                    <!-- 2nd -->
                    <div class="c-4">
                        <div class="footer__information__text__1st">
                            <br>
                        </div>
                        <div class="footer__information__text__2nd">
                            <a href="" class="footer__information__text__2nd__a">Điện thoại iPhone</a>
                            <span>|</span>
                            <a href="" class="footer__information__text__2nd__a">Điện thoại Samsung</a>
                            <span>|</span>
                            <a href="" class="footer__information__text__2nd__a">Điện thoại Oppo</a>
                        </div>
                        <div class="footer__information__text__3rd">
                            <a href="" class="footer__information__text__2nd__a">Điện thoại Xiaomi</a>
                            <span>|</span>
                            <a href="" class="footer__information__text__2nd__a">Điện thoại Vivo</a>
                            <span>|</span>
                            <a href="" class="footer__information__text__2nd__a">Điện thoại OnePlus</a>
                        </div>
                    </div>
                    <!-- 3rd -->
                    <div class="c-4">
                        <div class="footer__information__text__1st">
                            <a href="" class="footer__information__text__1st__a">Máy tính laptop</a>
                            <span>-</span>
                            <a href="" class="footer__information__text__1st__a">Smart home</a>
                        </div>
                        <div class="footer__information__text__2nd">
                            <a href="" class="footer__information__text__2nd__a">Laptop HP</a>
                            <span>-</span>
                            <a href="" class="footer__information__text__2nd__a">Máy tính để bàn PC</a>
                            <span>-</span>
                            <a href="" class="footer__information__text__2nd__a">Màn hình máy tính</a>
                            <span>-</span>
                            <a href="" class="footer__information__text__2nd__a">Sim số đẹp</a>
                        </div>
                        <div class="footer__information__text__3rd">
                            <a href="" class="footer__information__text__3rd__a">Robot hút bụi</a>
                            <span>-</span>
                            <a href="" class="footer__information__text__3rd__a">Camera</a>
                            <span>|</span>
                            <a href="" class="footer__information__text__3rd__a">Camera hành trình</a>
                            <span>|</span>
                            <a href="" class="footer__information__text__3rd__a">Camera hành trình Vietmap</a>
                        </div>
                    </div>
                </div>
                <div class="row footer__information__row__last">
                    <p>Công ty TNHH Thương mại và dịch vụ kỹ thuật DIỆU PHÚC - GPĐKKD: 0316172372 do sở KH & ĐT TP. HCM cấp ngày 02/03/2020. Địa chỉ: 350-352 Võ Văn Kiệt, Phường Cô Giang, Quận 1, Thành phố Hồ Chí Minh, Việt Nam. Điện thoại: 028.7108.9666.</p>
                </div>
                <div class="row footer__certification">
                    <div class="footer__certification__img__wrapper">
                        <img src="/Images//assets/img/footer information/1.png" alt="">
                    </div>
                    <div class="footer__certification__img__wrapper">
                        <img src="/Images//assets/img/footer information/2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer-information -->
        <!-- Chat with supporter -->
        <div class="talk__with__supporter">
            <div class="talk__with__supporter__bar">
                <i class="far fa-comment-alt"></i>
                <p>Chat với nhân viên tư vấn</p>
            </div>
            <div class="talk__with__supporter__form">
                <div class="talk__with__supporter__form__header">
                    <p class="talk__with__supporter__form__header__title">
                        Chat với nhân viên tư vấn
                    </p>
                    <div class="talk__with__supporter__form__header__close">
                        <i class="fas fa-minus"></i>
                    </div>
                </div>
                <div class="talk__with__supporter__form__body">
                    <div class="talk__with__supporter__form__body__your__info">
                        <p class="talk__with__supporter__form__body__your__info__title">
                            Nhập thông tin của bạn *
                        </p>
                        <input type="text" placeholder="Nhập tên của bạn" class="talk__with__supporter__form__body__your__info__input" required>
                        <input type="text" placeholder="Nhập Email của bạn" class="talk__with__supporter__form__body__your__info__input">
                        <input type="text" placeholder="Nhập Số điện thoại của bạn" class="talk__with__supporter__form__body__your__info__input">
                    </div>
                    <div class="talk__with__supporter__form__body__line__between">

                    </div>
                    <div class="talk__with__supporter__form__body__addition__info">
                        <p class="talk__with__supporter__form__body__your__info__title">
                            Thông tin bổ sung *
                        </p>
                        <select class="talk__with__supporter__form__body__addition__info__selection" name="option">
                            <option value="" disabled selected>
                                -- Giới tính --
                                <i class="fas fa-sort-down"></i>
                            </option>
                            <option class="talk__with__supporter__form__body__addition__info__submenu__male" value="1">Nam</option>
                            <option class="talk__with__supporter__form__body__addition__info__submenu__female" value="2">Nữ</option>
                        </select>
                    </div>
                    <div class="talk__with__supporter__form__body__message">
                        <p class="talk__with__supporter__form__body__your__info__title">
                            Tin nhắn
                        </p>
                        <input type="text">
                    </div>
                </div>
                <div class="talk__with__supporter__form__footer">
                    <div class="talk__with__supporter__form__footer__btn__wrapper">
                        <button class="talk__with__supporter__form__footer__btn">Bắt đầu chat</button>
                    </div>
                    <div class="talk__with__supporter__form__footer__img__wrapper">
                        <img src="/Images//assets/img/footer information/3.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- End chat with supporter -->
        <!-- BtnZaloChat -->
        <div class="BtnZaloChat">
            <a href=""><img src="/Images/assets/img/btn/btnzalo.png" alt=""></a>
        </div>
        <!-- End BtnZaloChat -->
        <!-- Sroll to Top btn -->
        <!-- PC -->
        <a href="#main" class="scroll__to__top"><i class="fas fa-chevron-up"></i></a>
        <!-- Tablet -->
        <a href="#main" class="tablet__scroll__to__top">
            <i class="fas fa-chevron-up"></i>
            <p>Lên đầu</p>
        </a>
        <!-- Smartphone -->
        <a href="#main" class="smartphone__scroll__to__top">
            <i class="fas fa-chevron-up"></i>
            <p>Lên đầu</p>
        </a>
        <!-- End sroll to Top btn -->
        <!-- Zalo support -->
        <div class="zalo__support__head__box">
            <img src="/Images/assets/img/zalo suopprt/1.jpg" alt="">
        </div>
        <div class="zalo__support__box toggle">
            <div class="zalo__support__box__header__background">
                <div class="zalo__support__box__header">
                    <div class="zalo__support__box__header__logo">
                        <img src="/Images//assets/img/zalo suopprt/cellphones.png" alt="">
                        <div class="zalo__support__box__header__logo__active">
                            <i class="fas fa-circle"></i>
                        </div>
                        <div class="zalo__support__box__header__solan">
                            <p>CELLPHONES</p>
                        </div>
                    </div>
                    <div class="zalo__support__box__header__icon__wrapper">
                        <div class="zalo__support__box__header__icon">
                            <i class="fas fa-ellipsis-h"></i>
                            <div class="dropdown__content toggle">
                                <a class="dropdown__content__item" href="">Thêm Zalo Chat Widget vào trang web của bạn</a>
                            </div>
                        </div>
                        <div class="zalo__support__box__header__icon">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                </div>
                <div class="zalo__support__box__welcome">
                    <div class="zalo__support__box__welcome__title__box">
                        <p class="zalo__support__box__welcome__title">Xin Chào!</p>
                    </div>
                    <div class="zalo__support__box__welcome__bottom">
                        <p class="zalo__support__box__welcome__bottom__title">Rất vui khi được hỗ trợ bạn</p>
                        <div class="zalo__support__box__welcome__bottom__icon__wrapper">
                            <i class="fas fa-user-clock"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="zalo__support__box__body">

            </div>
            <div class="zalo__support__box__footer">
                <i class="fas fa-list"></i>
                <input type="text" placeholder="Nhập tin nhắn,nhấn Enter để gửi...">
                <i class="fab fa-artstation"></i>
                <i class="far fa-smile-wink"></i>
            </div>
        </div>
        <!-- End Zalo support -->
        <div class="tablet__block__navbar__height"></div>
        <div class="tablet__block__bottom__navbar">
            <div class="tablet__block__bottom__navbar__item">
                <a href="">
                    <i class="fas fa-house-user"></i>
                </a>
                <a href="" class="">
                    Trang chủ
                </a>
            </div>
            <div class="tablet__block__bottom__navbar__item">
                <a href="">
                    <i class="far fa-newspaper"></i>
                </a>
                <a href="" class="">
                    Danh mục
                </a>
            </div>
            <div class="tablet__block__bottom__navbar__item">
                <a href="">
                    <i class="fas fa-store"></i>
                </a>
                <a href="" class="">
                    Cửa hàng
                </a>
            </div>
            <div class="tablet__block__bottom__navbar__item">
                <a href="">
                    <i class="fas fa-headphones-alt"></i>
                </a>
                <a href="" class="">
                    Liên hệ
                </a>
            </div>
            <div class="tablet__block__bottom__navbar__item">
                <a href="">
                    <i class="far fa-user-circle"></i>
                </a>
                <a href="" class="">
                    Smember
                </a>
            </div>
        </div>
        <script src="./swipper/swiper-bundle.min.js"></script>
        <script src="/JS/javascript.js"></script>
        <script src="/JS/jquery-3.6.0.min.js"></script>
        <script src="/JS/angular.min.js"></script>
        <script src="/JS/global.js"></script>
        <script src="/JS/Product.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="slick/slick.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type="text/javascript">
            // $(document).ready(function(){
            //     $('.autoplay').slick({
            //     slidesToShow: 5,
            //     slidesToScroll: 1,
            //     autoplay: true,
            //     autoplaySpeed: 1000,
            //     });
            // });
        </script>
        <!-- Thư viện Slick Slider -->
        <!-- Thư viện Slick Slider -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var addToCartButtons = document.querySelectorAll('.btn-add-carts');
                addToCartButtons.forEach(function(button) {
                    button.addEventListener('click', function() {
                        if (!confirm('Bạn có chắc chắn muốn thêm sản phẩm này vào giỏ hàng không?')) {
                            event.preventDefault(); // Ngăn chặn form submit nếu người dùng không xác nhận
                        }
                    });
                });
            });
        </script>
    </div>
</body>

</html>