<?php
if(isset($_SESSION['user'])&&(count($_SESSION['user'])>0)){
    extract($_SESSION['user']);
    $html_taikhoan='<ul class="ht-us-menu d-flex my-2">
    <li class=""><a href="#">
        <img src="../view/layout/assets/images/user1.png" alt="" class="avatar-user">
    </a>
        <ul class="ht-dropdown right">
            <li><p class="name-user">Chào mừng '.$username.'</p>
           </li>
           <li><a href="index.php?pg=change_voucher_view">Điểm tích lũy : '.$diem_tich_luy.' điểm</a></li>
            <li><a href="index.php?pg=myaccount">Thông tin tài khoản</a></li>
            <li><a href="index.php?pg=thoat">Đăng xuất</a></li>
        </ul>
    </li>
</ul>';

$html_taikhoa_mobile = '<a href="index.php?pg=myaccount"><img src="../view/layout/assets/images/user1.png" alt="" style="height: 39px; height: 39px; border-radius: 50%;"></a>
';
}else{
    $html_taikhoan='<div class="header-user">
    <a href="index.php?pg=login">
        <i class="fa-solid fa-user"></i>
    </a>
</div>';


$html_taikhoa_mobile = '<a href="index.php?pg=login"><i class="fa-solid fa-user"></i>
</a>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/8c204d0fdf.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="../view/layout/assets/css/iconfont.min.css">
    <link rel="stylesheet" href="../view/layout/assets/css/plugins.css">
    <link rel="stylesheet" href="../view/layout/assets/css/style.css">
    <link rel="stylesheet" href="../view/layout/assets/css/style2.css">
    <link rel="stylesheet" href="../view/layout/assets/css/cart.css">
    <link rel="stylesheet" href="../view/layout/assets/css/login.css">
    <link rel="stylesheet" href="../view/layout/assets/css/checkout.css">
    <link rel="shortcut icon" href="../assets/images/logo scb.jpg" type="image/x-icon">
    <link rel="icon" href="../view/layout/assets/images/1-removebg-preview (1)2.png" type="image/x-icon">
    <link rel="stylesheet" href="../view/layout/assets/css/helper.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Trang chủ</title>
</head>

<body>
    <div id="main-wrapper">
        <header class="header-transparent">
            <div class="header">
                <div class="header-bottom menu-right">
                    <div class="container">
                        <div class="row align-items-center h-90">

                            <!--Logo start-->
                            <div class="col-lg-3 col-md-3 col-6 order-lg-1 order-md-1 order-1">
                                <div class="logo">
                                    <a href="index.php"><img src="../view/layout/assets/images/1-removebg-preview (1)2.png" width="80px"
                                            alt="logo TG shop"></a>
                                </div>
                            </div>
                            <!--Logo end-->

                            <!--Menu start-->
                            <div
                                class="col-lg-6 col-md-6 col-12 order-lg-2 order-md-2 order-3 d-flex justify-content-center">
                                <nav class="main-menu menu-box">
                                    <ul class="my-0">
                                        <li class="menu-boxs"><a href="index.php">Trang chủ</a>
                                        </li>
                                        <li class="menu-boxs"><a href="index.php?pg=sanpham">Sản phẩm</a>
                                        </li>
                                        <li class="menu-boxs"><a href="index.php?pg=blog">Bài viết</a>
                                        </li>
                                        <!-- <li class="menu-boxs"><a href="about.html">About Us</a></li> -->
                                        <li class="menu-boxs"><a href="index.php?pg=list-1">Tra cứu</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!--Menu end-->

                            <!--Search Cart Start-->
                            <div
                                class="col-lg-3 col-md-3 col-6 order-lg-3 order-md-3 order-2 d-flex justify-content-end">
                                
                                <?=$html_taikhoan?>


                                
                                <div class="header-search">
                                    <button class="header-search-toggle"><i class="fa fa-search"></i></button>
                                    <div class="header-search-form">
                                        <form action="index.php?pg=timkiem" method="get">
                                            <input type="hidden" name="pg" value="sanpham">
                                            <input type="text" type="search" name="tukhoa" placeholder="Nhập thông tin tiềm kiếm ...">
                                            <button><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="header-cart">
                                    <a href="index.php?pg=cart"><i class="fa fa-shopping-cart"></i></a>
                                    <!--Mini Cart Dropdown Start-->

                                    <!--Mini Cart Dropdown End-->
                                </div>
                            </div>
                            <!--Search Cart End-->
                        </div>

                        <!--Mobile Menu start-->
                        <div class="row">
                            <div class="col-12 d-flex d-lg-none">
                                <div class="mobile-menu"></div>
                            </div>
                        </div>
                        <!--Mobile Menu end-->
                    </div>
                </div>
            </div>
            <div class="header-tab-mobile">
                <div class="row justify-content-center bg-main">
                    <a href="index.php" class="d-flex justify-content-center"><img src="../view/layout/assets/images/1-removebg-preview (1)2.png" alt="" class="logo-tab_mobile"></a>
                </div>
                <div class="row bg-main sticky-top">
                    <div class="col-md-12 d-flex w-100 justify-content-between  px-4 py-4 pt-0">
                        <div class="offcanvas offcanvas-start" id="demo">
                            <div class="offcanvas-header">
                                <!-- <h1 class="offcanvas-title">Heading</h1> -->
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="menu-hiden">
                                    <li><a href="index.php">Trang chủ</a></li>
                                    <li><a href="index.php?pg=sanpham">Sản phẩm</a></li>
                                    <li><a href="index.php?pg=blog">Bài viết</a></li>
                                    <li><a href="index.php?pg=list-1">Tra cứu</a></li>
                                </ul>
                                <!-- <button class="btn btn-secondary" type="button">A Button</button> -->
                            </div>
                        </div>

                        <!-- Button to open the offcanvas sidebar -->
                        <div class="btn-open_menu__mobile">
                            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#demo">
                                <i class="fa-solid fa-bars"></i>
                            </button>
                        </div>

                        <div class="input-search_mb">
                            <form action="">
                                <input type="text">
                                <input type="submit" value="">
                            </form>
                        </div>
                        <div class="control-tab_mobile">
                            <?=$html_taikhoa_mobile?>
                            <!-- <a href=""><i class="fa-regular fa-user"></i></a> -->
                            <!-- <a href="">
                                <img src="/view/layout/assets/images/user1.png" alt="" style="height: 39px; height: 39px; border-radius: 50%;">
                            </a> -->
                            <a href="index.php?pg=cart"><i class="fa-solid fa-cart-shopping"></i></a>
                        </div>

                    </div>

                </div>
            </div>
        </header>