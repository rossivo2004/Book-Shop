<?php
if(isset($_SESSION['user'])&&(count($_SESSION['user'])>0)){
    extract($_SESSION['user']);
    $html_taikhoanadmin='<a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" id="dropdownAccount" aria-expanded="false"> <img class="img-xs rounded-circle" src="../view/layout/assets/images/user1.png" alt="User">'.$username.'</a>';
    
}else{
    $html_taikhoanadmin='<a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" id="dropdownAccount" aria-expanded="false"> <img class="img-xs rounded-circle" src="assets/imgs/people/avatar2.jpg" alt="User"></a>';
}

?>
<!DOCTYPE HTML>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <title>Ibook Dashboard</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../view/layout/assets/images/1.png">
    <link rel="stylesheet" href="./view/layout/assets/css/iconfont.min.css">

    <!-- Template CSS -->
    <link href="assets/css/main.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="screen-overlay"></div>
    <aside class="navbar-aside" id="offcanvas_aside">
        <div class="aside-top">
            <a href="index.php" class="brand-wrap">
                <img src="../view/layout/assets/images/1.png" class="logo" alt="Suruchi Dashboard">
            </a>
            <div>
                <button class="btn btn-icon btn-aside-minimize"> <i class="text-muted material-icons md-menu_open"></i> </button>
            </div>
        </div>
        <nav>
            <ul class="menu-aside">
                <li class="menu-item active">
                    <a class="menu-link" href="index.php"> <i class="fa-solid fa-house"></i>
                        <span class="text">Dashboard</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="index.php?page=product"> <i class="icon material-icons md-shopping_bag"></i>
                        <span class="text">Sản phẩm</span>
                    </a>
                    <!-- <div class="submenu">
                        <a href="page-products-list.html">Product List</a>
                        <a href="page-categories.html">Categories</a>
                    </div> -->
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="index.php?page=addsp"> <i class="icon material-icons md-add_box"></i>
                        <span class="text">Thêm sản phẩm</span>
                    </a>
                    <!-- <div class="submenu">
                        <a href="page-form-product-1.html">Add product</a>
                    </div> -->
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="index.php?page=catalog"><i class="icon material-icons md-category"></i>
                        <span class="text">Danh mục</span> 
                    </a>
                    <!-- <div class="submenu">
                        <a href="page-sellers-list.html">Sellers list</a>
                    </div> -->
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="index.php?page=tacgia"> <i class="icon material-icons md-shopping_bag"></i>
                        <span class="text">Tác giả</span>
                    </a>
                    <!-- <div class="submenu">
                        <a href="page-products-list.html">Product List</a>
                        <a href="page-categories.html">Categories</a>
                    </div> -->
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="index.php?page=nxb"> <i class="icon material-icons md-shopping_bag"></i>
                        <span class="text">Nhà xuất bản</span>
                    </a>
                    <!-- <div class="submenu">
                        <a href="page-products-list.html">Product List</a>
                        <a href="page-categories.html">Categories</a>
                    </div> -->
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="index.php?page=others"><i class="icon material-icons md-shopping_cart"></i>
                        <span class="text">Đơn hàng</span>
                    </a>
                    <!-- <div class="submenu">
                        <a href="page-orders.html">Order list</a>
                        <a href="page-orders-detail.html">Order detail</a>
                    </div> -->
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="index.php?page=voucher"><i class="icon material-icons md-shopping_cart"></i>
                        <span class="text">Voucher</span>
                    </a>
                    <!-- <div class="submenu">
                        <a href="page-orders.html">Order list</a>
                        <a href="page-orders-detail.html">Order detail</a>
                    </div> -->
                </li>
                <!-- <li class="menu-item">
                    <a class="menu-link" href="page-sellers-list.html"> <i class="icon material-icons md-store"></i>
                        <span class="text">Sellers</span>
                    </a>
                    <div class="submenu">
                        <a href="page-sellers-list.html">Sellers list</a>
                    </div>
                </li> -->
                <!-- <li class="menu-item has-submenu">
                    <a class="menu-link" href="page-transactions-1.html"> <i class="icon material-icons md-monetization_on"></i>
                        <span class="text">Transactions</span>
                    </a>
                    <div class="submenu">
                        <a href="page-transactions-1.html">Transaction 1</a>
                        <a href="page-transactions-2.html">Transaction 2</a>
                        <a href="page-transactions-details.html">Transaction Details</a>
                    </div>
                </li> -->
                <li class="menu-item">
                    <a class="menu-link" href="index.php?page=account"> <i class="icon material-icons md-person"></i>
                        <span class="text">Tài khoản</span>
                    </a>
                    <!-- <div class="submenu">
                        <a href="page-account-login.html">User login</a>
                        <a href="page-account-register.html">User registration</a>
                    </div> -->
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="index.php?page=reviews"> <i class="icon material-icons md-comment"></i>
                        <span class="text">Bình luận</span>
                    </a>
                </li>

                <li class="menu-item">
                    <a class="menu-link" href="index.php?page=reviews-blog"> <i class="icon material-icons md-comment"></i>
                        <span class="text">Blog</span>
                    </a>
                </li>
                <!-- <li class="menu-item">
                    <a class="menu-link" href="page-brands.html"> <i class="icon material-icons md-stars"></i>
                        <span class="text">Brands</span> </a>
                </li> -->
                <!-- <li class="menu-item">
                    <a class="menu-link" disabled href="#"> <i class="icon material-icons md-pie_chart"></i>
                        <span class="text">Statistics</span>
                    </a>
                </li> -->
            </ul>
            <!-- <hr> -->
            <!-- <ul class="menu-aside">
                <li class="menu-item has-submenu">
                    <a class="menu-link" href="#"> <i class="icon material-icons md-settings"></i>
                        <span class="text">Settings</span>
                    </a>
                    <div class="submenu">
                        <a href="page-settings-1.html">Setting sample 1</a>
                        <a href="page-settings-2.html">Setting sample 2</a>
                    </div>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="page-blank.html"> <i class="icon material-icons md-local_offer"></i>
                        <span class="text"> Starter page </span>
                    </a>
                </li>
            </ul> -->
            <br>
            <br>
        </nav>
    </aside>


    
    <main class="main-wrap">
        <header class="main-header navbar">
            <div class="col-search">
                <form class="searchform" action="" method="post">
                    <div class="input-group">
                        <input list="search_terms" type="text" class="form-control" placeholder="Tìm kiếm ">
                        <button type="submit" name="tukhoa" class="btn btn-light bg" > <i class="material-icons md-search"></i></button>
                    </div>
                   
                </form>
            </div>
            <div class="col-nav">
                <button class="btn btn-icon btn-mobile me-auto" data-trigger="#offcanvas_aside"> <i class="material-icons md-apps"></i> </button>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link btn-icon" href="#">
                            <i class="material-icons md-notifications animation-shake"></i>
                            <span class="badge rounded-pill">0</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-icon darkmode" href="#"> <i class="material-icons md-nights_stay"></i> </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="requestfullscreen nav-link btn-icon"><i class="material-icons md-cast"></i></a>
                    </li>
                    <li class="dropdown nav-item">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" id="dropdownLanguage" aria-expanded="false"><i class="material-icons md-public"></i></a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownLanguage">
                            <a class="dropdown-item text-brand" href="#"><img src="assets/imgs/theme/flag-us.png" alt="English">English</a>
                            <a class="dropdown-item" href="#"><img src="assets/imgs/theme/flag-fr.png" alt="Français">Français</a>
                        </div>
                    </li>
                    <li class="dropdown nav-item">
                        <?=$html_taikhoanadmin?>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownAccount">
                            <a class="dropdown-item" href="index.php?page=returnhome"><i class="material-icons md-perm_identity"></i>Trở lại trang web</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="http://localhost:3000/admin/index.php?page=logout_admin"><i class="material-icons md-exit_to_app"></i>Đăng xuất</a>
                        </div>
                    </li>
                </ul>
            </div>
        </header>