<?php
if(isset($_SESSION['user'])&&(count($_SESSION['user'])>0)){
    extract($_SESSION['user']);
    $userif=get_user($id);
    extract($userif);
    } 
?>

        <div class="container-fluid">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tài khoản của tôi</li>
                    </ol>
                </nav>
            </div>
        </div>
        
        <!-- Page Banner Section Start -->
        <!--My Account section start-->
        <div
            class="my-account-section section pt-lg-20 pt-md-70 pt-sm-60   pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
            <div class="container">
        <h1 class="myAccount-title">Tài khoản của tôi</h1>

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

                                    <a href="#account-info" data-toggle="tab"><i class="fa fa-user"></i> Tài khoản
                                        Chi tiết</a>

                                    <a href="index.php?pg=thoat"><i class="fa fa-sign-out"></i> Đăng xuất</a>
                                </div>
                            </div>
                            <!-- My Account Tab Menu End -->

                            <!-- My Account Tab Content Start -->
                            <div class="col-lg-9 col-12 ">
                                <div class="tab-content bg-white bdr-10 p-3" id="myaccountContent">
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade show active" id="dashboad" role="tabpanel">

                                      
                                    <form action="" method="post" class="checkout-form">
                                            <div class="row row-40">
                                                <div class="col-lg-12">

                                                    <!-- Billing Address -->
                                                    <div id="billing-form" class="mb-10">
                                                        <div class="row">
                                                            <div class="col-md-12 col-12 mb-3">
                                                                <label class="mb-2">Họ và tên*</label>
                                                                <input type="text" placeholder="Họ và tên" name="username"  value="<?=$username?>">
                                                            </div>
                                                            <div class="col-md-12 col-12 mb-3">
                                                                <label class="mb-2">Địa chỉ email*</label>
                                                                <input type="email" placeholder="Email" name="email" value="<?=$email?>">
                                                            </div>
                                                            <div class="col-md-12 col-12 mb-3">
                                                                <label class="mb-2">Số điện thoại*</label>
                                                                <input type="text" placeholder="Số điện thoại" name="dienthoai" value="<?=$dienthoai?>">
                                                            </div>
                                                            <div class="col-12 mb-3">
                                                                <label class="mb-2">Địa chỉ*</label>
                                                                <input type="text" placeholder="Nhập địa chỉ" name="diachi" value="<?=$diachi?>">
                                                            </div>
                                                            <!-- <div class="col-12 mb-3">
                                                                <input type="hidden" name="id" value="<?=$id?>" >
                                                                <button class="btn btn-lg btn-round" name="capnhat">Lưu</button>
                                                            </div> -->

                                                        </div>

                                                    </div>

                                                    <!-- Shipping Address -->

                                                </div>


                                            </div>
                                        </form>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="orders" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Đặt hàng</h3>

                                            <div class="myaccount-table table-responsive text-center">
                                                <table class="table table-bordered">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>STT</th>
                                                            <th>Tên</th>
                                                            <th>Ngày sinh</th>
                                                            <th>Trạng thái</th>
                                                            <th>Tổng cộng</th>
                                                            <th>Hoạt động</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Giày Bóng Đá TQ Nike React</td>
                                                            <td>Aug 22, 2023</td>
                                                            <td>Chưa giải quyết</td>
                                                            <td>710.000 đ</td>
                                                            <td><a href="cart.html" class="btn">Xem</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Giày Bóng Đá Wika NEO</td>
                                                            <td>July 22, 2023</td>
                                                            <td>Đã thành công</td>
                                                            <td>1.130.000 đ</td>
                                                            <td><a href="cart.html" class="btn">Xem</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Giày Bóng Đá Nike Lunar</td>
                                                            <td>June 12, 2023</td>
                                                            <td>Đang xử lí</td>
                                                            <td>900.000 đ</td>
                                                            <td><a href="cart.html" class="btn">Xem</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->


                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Địa chỉ thanh toán</h3>
                                            <address>
                                                <p><strong>Alex Tuntuni</strong></p>
                                                <p>1355 Market St, Suite 900 <br>
                                                    San Francisco, CA 94103</p>
                                                <p>Mobile: (123) 456-7890</p>
                                            </address>

                                            <a href="#" class="btn d-inline-block edit-address-btn"><i
                                                    class="fa fa-edit"></i>Chỉnh sửa địa chỉ</a>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="account-info" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Chi tiết tài khoản</h3>

                                            <div class="account-details-form">
                                            <form action="index.php?pg=updateacc" method="post">
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
                                                            <input id="email" placeholder="Địa chỉ cư trú" type="text" name="diachisong" value="<?=$diachi?>">
                                                        </div>
                                                
                                                        <div class="col-12 mb-30">
                                                            <h4>Thay đổi mật khẩu</h4>
                                                        </div>

                                                        <div class="col-12 mb-30">
                                                            <input id="current-pwd" placeholder="Mật khẩu cũ" type="password" name="password" >
                                                                    <?php
                                                                    if (isset($_SESSION['tbmk']) && ($_SESSION['tbmk'] != ""))
                                                                        echo $_SESSION['tbmk'];
                                                                        unset($_SESSION['tbmk']);
                                                                    ?>
                                                        </div>

                                                        <div class="col-lg-6 col-12 mb-30">
                                                            <input id="new-pwd" placeholder="Mật khẩu mới"  type="password" name="rpassword" >
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
