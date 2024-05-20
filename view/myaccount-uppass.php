<?php
if(isset($_SESSION['user'])&&(count($_SESSION['user'])>0)){
    extract($_SESSION['user']);
    $userif=get_user($id);
    extract($userif);
    } 
?>
<div
            class="my-account-section section pt-20 pt-lg-20 pt-md-70 pt-sm-60 pt-xs-50  pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
            <div class="container">
        <h1 class="fw-600">Tài khoản của tôi</h1>
                            <h2 style="text-align: center; color: red;"> MẬT KHẨU ĐÃ ĐƯỢC CẬP NHẬT !</h2>

                <div class="row">

                    <div class="col-12">
                        <div class="row">
                            <!-- My Account Tab Menu Start -->
                            <div class="col-lg-3 col-12 mb-4">
                                <div class="myaccount-tab-menu nav" role="tablist">
                                    <a href="#dashboad" class="active" data-toggle="tab"><i class="fa fa-dashboard"></i>
                                        Thông tin</a>

                                    <a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Đặt
                                        hàng</a>

                                        <a href="#voucher" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Voucher </a>

                                    <a href="#account-info" data-toggle="tab"><i class="fa fa-user"></i> Tài khoản
                                        Chi tiết</a>

                                        <a href="#blog" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Blog của tôi</a>
                                        

                                    <a href="index.php?pg=thoat"><i class="fa fa-sign-out"></i> Đăng xuất</a>
                                </div>
                            </div>
                            <!-- My Account Tab Menu End -->

                            <!-- My Account Tab Content Start -->
                            <div class="col-lg-9 col-12">
                                <div class="tab-content" id="myaccountContent">
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                    <div class="myaccount-content">
                                            <h3>Chi tiết tài khoản</h3>

                                            <div class="account-details-form">
                                                <form action="index.php?pg=myaccount" method="post">
                                                <div class="row">
                                                        <div class="col-lg-6 col-12 mb-30">
                                                            <input id="first-name" placeholder="Họ và tên của bạn"  type="text" name="username" value="<?=$username?>">
                                                        </div>  

                                                        <div class="col-lg-6 col-12 mb-30">
                                                            <input id="last-name" placeholder="Số điện thoại của bạn" type="text" name="hoten" value="<?=$dienthoai?>">
                                                        </div>

                                                        <div class="col-12 mb-30">
                                                            <input id="email" placeholder="Địa chỉ email" type="email" name="diachimail" value="<?=$email?>">
                                                        </div>

                                                        <div class="col-12 mb-30">
                                                            <input id="email" placeholder="Địa chỉ cư trú" type="email" name="diachisong" value="<?=$diachi?>">
                                                        </div>
                                                
                                                        <div class="col-12 mb-30">
                                                            <h4>Thay đổi mật khẩu</h4>
                                                        </div>

                                                        <div class="col-12 mb-30">
                                                            <input id="current-pwd" placeholder="Mật khẩu cũ" type="password" name="password" >
                                                        </div>

                                                        <div class="col-lg-6 col-12 mb-30">
                                                            <input id="new-pwd" placeholder="Mật khẩu mới"  type="password" name="password" value="<?=$password?>">
                                                        </div>

                                                        <div class="col-lg-6 col-12 mb-30">
                                                            <input id="confirm-pwd" placeholder="Xác nhận mật khẩu"  type="password" name="confirmpass">
                                                        </div>

                                                        <div class="col-12">
                                                        <input type="hidden" name="id" value="<?=$id?>" >
                                                            <button class="save-change-btn" name="changett">Lưu thay đổi</button>
                                                        </div>

                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        
                                    </div>
                                    

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="account-info" role="tabpanel">
                                    <form action="index.php?pg=myaccount" class="checkout-form" method="post">
                                            <div class="row row-40">

                                                <div class="col-lg-7">

                                                    <!-- Billing Address -->
                                                    <div id="billing-form" class="mb-10">
                                                        <div class="row">
                                                            <div class="col-md-12 col-12 mb-5">
                                                                <label>Họ và tên*</label>
                                                                <input type="text" name="username" placeholder="Họ và tên" value="<?=$username?>">
                                                            </div>
                                                            <div class="col-md-12 col-12 mb-5">
                                                                <label>Mật khẩu*</label>
                                                                <input type="password" name="password" placeholder="Mật khẩu" value="<?=$password?>">
                                                            </div>
                                                            <div class="col-md-12 col-12 mb-5">
                                                                <label>Địa chỉ email*</label>
                                                                <input type="email" name="email" placeholder="Email" value="<?=$email?>">
                                                            </div>
                                                            <div class="col-md-12 col-12 mb-5">
                                                                <label>Số điện thoại*</label>
                                                                <input type="text" name="dienthoai" placeholder="Số điện thoại" value="<?=$dienthoai?>">
                                                            </div>
                                                            <div class="col-12 mb-5">
                                                                <label>Địa chỉ*</label>
                                                                <input type="text" name="diachi" placeholder="Nhập địa chỉ" value="<?=$diachi?>">
                                                            </div>
                                                            <div class="col-12 mb-5">
                                                                <input type="hidden" name="id" value="<?=$id?>" >
                                                                <button class="btn btn-lg btn-round" name="capnhat" >Lưu</button>
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <!-- Shipping Address -->

                                                </div>


                                            </div>
                                        </form>
                                    </div>
                                    <!-- Single Tab Content End -->
                                </div>
                            </div>
                            <!-- My Account Tab Content End -->
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!--My Account section end-->

        <!--Brand section start-->
        <div
            class="brand-section section border-top pt-90 pt-lg-70 pt-md-65 pt-sm-55 pt-xs-40 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
            <div class="container">
                <div class="row">

                    <!--Brand Slider start-->
                    <div class="tf-element-carousel section" data-slick-options='{
                        "slidesToShow": 5,
                        "slidesToScroll": 1,
                        "infinite": true,
                        "arrows": false,
                        "autoplay": true
                        }' data-slick-responsive='[
                        {"breakpoint":1199, "settings": {
                        "slidesToShow": 4
                        }},
                        {"breakpoint":992, "settings": {
                        "slidesToShow": 4
                        }},
                        {"breakpoint":768, "settings": {
                        "slidesToShow": 3
                        }},
                        {"breakpoint":576, "settings": {
                        "slidesToShow": 1
                        }}
                        ]'>
                        <div class="brand col"><a href="#"><img src="assets/images/product/tìn neymar.webp" alt=""></a>
                        </div>
                        <div class="brand col"><a href="#"><img src="assets/images/product/thành lukaku.webp"
                                    alt=""></a>
                        </div>
                        <div class="brand col"><a href="#"><img src="assets/images/product/toàn beck.webp" alt=""></a>
                        </div>
                        <div class="brand col"><a href="#"><img src="assets/images/product/trung nghia.webp" alt=""></a>
                        </div>
                        <div class="brand col"><a href="#"><img src="assets/images/product/đồng đội.webp" alt=""></a>
                        </div>
                    </div>
                    <!--Brand Slider end-->

                </div>
            </div>
        </div>