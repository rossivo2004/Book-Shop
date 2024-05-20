<div class="container-fluid">
<div class="container container-checkout mt-30 mb50">
    <div class="row">
       
        <div class=" col-lg-7 col-md-7 col-sm-12">
            <div class="container bg-white p-3 mb-3 bdr-10">
                <form action="index.php?pg=checkout" method="post">
                    <div class="row">
                        <div class="col-50">
                            <h3 class="checkout-left_title">Thông tin thanh toán</h3>
                            <label><i class="fa fa-user"></i> Họ và tên</label>
                            <input class="input-check-out" type="text" id="fname" name="hoten" value="<?php echo $hoten ; ?>" placeholder="Nhập họ và tên đầy đủ" required>
                            <label><i class="fa fa-envelope"></i> Email</label>
                            <input class="input-check-out" type="email" id="email" name="email" value="<?php echo $email ; ?>" placeholder="Nhập email" required>
                            <label><i class="fa fa-address-card-o"></i> Địa chỉ</label>
                            <input class="input-check-out" type="text" id="adr" name="diachi" value="<?php echo $diachi ; ?>" placeholder="Nhập địa chỉ" required>
                            <label><i class="fa fa-institution"></i> Số điện thoại</label>
                            <input class="input-check-out" type="text" id="sdt" name="sdt" value="<?php echo $diachi ; ?>" placeholder="Nhập số điện thoại" required>
                        </div>
                    </div>
                    <?php if(empty($_SESSION['user'])){ ?>
                     <div>Bạn đã có tài khoản ?<a href="index.php?pg=dangky">Đăng nhập</a> </div>   
                        <?php } ?>
            </div>
        </div>
        <div class=" col-lg-5 col-md-5 col-sm-12">
            <div class="container-checkout bg-white bdr-10 p-3">
                                        <h4 class="checkout-right_title">Giỏ hàng
                                            <span class="price" style="color:black">
                                                <i class="fa fa-shopping-cart"></i>
                                                <b></b>
                                            </span>
                                        </h4>
                                        <hr>

                                        <p>Tổng tiền : <span class="price" style="color:black"><?php echo $tongall  ?><sup>đ</sup></span></p>
                                        <p>Phí vận chuyển : <span class="price" style="color:black"><?php echo $ship  ?><sup>đ</sup></span></p>
                                        <p>Tiền khuyến mãi : <span class="price" style="color:black"><?php echo $so_tien_giam  ?><sup>đ</sup></span></p>
                                        
                                        <hr>
                                        <p class="fw-600">Tổng thanh toán<span class="price" style="color:black"><?php echo number_format($tongthanh_toan)  ?><sup>đ</sup></span></p>
                                    </div>
                


                <div class="ui form bg-white bdr-10 p-3">
                    <div class="grouped fields">
                        <label class="checkout-right_title">Chọn phương thức thanh toán</label>
                        <div class="grouped-fields">
                            <div class="field mx-3">
                                <div class="ui radio checkbox">
                                    <input class="me-2" type="radio" name="pttt" value="tienmat" selected >
                                    <label>Tiền mặt</label>
                                </div>
                            </div>
                            <div class="field mx-3">
                                <div class="ui radio checkbox">
                                    <input class="me-2" type="radio" name="pttt" value="vidientu">
                                    <label>Ví điện tử</label>
                                </div>
                            </div>
                            <div class="field mx-3">
                                <div class="ui radio checkbox">
                                    <input class="me-2" type="radio" name="pttt" value="chuyenkhoan">
                                    <label>Chuyển khoản</label>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="btn-checkout_input">
                    <input type="hidden" name="tongtien" value="<?php echo   $tongall ?>">
                    <input type="hidden" name="id_voucher"  value="<?php echo   $voucher ?>">
    
                            <input type="hidden" name="ship"  value="<?php echo   $ship ?>">
                            <input type="hidden" name="sotien_giam" value="<?php echo   $so_tien_giam ?>">
                            <input type="hidden" name="tongthanhtoan" value="<?php echo $tongthanh_toan ?>">
                        <input type="submit" name="donhangcheck" value="Tiếp tục thanh toán" class="btn-checkout">
    
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>