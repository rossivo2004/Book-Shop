<div class="container-fluid">
            <div class="container p-0">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="container mb-100">
            <div class="row bg-white mb-4 bdr-10 p-3">
                <div class="col">
                    <h1 class="title-voucher_change">Đổi mã giảm giá</h1>
                    <p style="font-weight: 600;">Xin chào <span style="color: #2b648b;"><?php echo $_SESSION['user']['username'] ?></span></p>
                    <p style="font-weight: 600;">Số điểm bạn sở hữu : <span style="color: #ed553b;"><?php echo $_SESSION['user']['diem_tich_luy'] ?></span></p>
                    <div class="row">

                    
                    <?php if(isset($_GET['succeed'])){ ?>
                        <h1>Đổi thành công</h1>
                        <?php }?>
                        <?php if(isset($_GET['failure'])){ ?>
                        <h1>Bạn không đủ điểm</h1>
                        <?php }?>

                        
                    <?php foreach($voucher_all as $item){ ?>
                        <?php extract($item); ?>
                        <div class="col-lg-4 mb-4">
                            <div class="change-voucher_box d-flex align-items-center justify-content-center">
                                <div class="row p-3">
                                    <div class="col-6 col-lg-6 col-sm-6">
                                        <div class="row">
                                            <div class="col-lg-12 mb-2" style="color: #2b648b; font-weight: 600;">Mã
                                                voucher:<?php echo $id ?> </div>
                                            <div class="col-lg-12">Giá trị : <?php echo $sotien_giam ?>%</div>
                                            <div class="col-lg-12">Cần : <?php echo $diemtichluy_can ?> điểm </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-6 col-sm-6 d-flex justify-content-end align-items-center">
                                        <div class="row">
                                            <div class="col">
                                                <a href="index.php?pg=change_voucher&id=<?php echo $id ?>&diem=<?php echo $diemtichluy_can ?>" class="change-voucher_btn">Đổi ngay</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <?php } ?>
                        


                        <!-- <div class="col-lg-4 mb-4">
                            <div class="change-voucher_box d-flex align-items-center justify-content-center">
                                <div class="row p-3">
                                    <div class="col-6 col-lg-6 col-sm-6">
                                        <div class="row">
                                            <div class="col-lg-12 mb-2" style="color: #2b648b; font-weight: 600;">Mã
                                                voucher: GHSHF</div>
                                            <div class="col-lg-12">Giá trị : 20.000<sup>đ</sup></div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-6 col-sm-6 d-flex justify-content-end align-items-center">
                                        <div class="row">
                                            <div class="col">
                                                <a href="" class="change-voucher_btn">Đổi ngay</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="change-voucher_box d-flex align-items-center justify-content-center">
                                <div class="row p-3">
                                    <div class="col-6 col-lg-6 col-sm-6">
                                        <div class="row">
                                            <div class="col-lg-12 mb-2" style="color: #2b648b; font-weight: 600;">Mã
                                                voucher: GHSHF</div>
                                            <div class="col-lg-12">Giá trị : 20.000<sup>đ</sup></div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-6 col-sm-6 d-flex justify-content-end align-items-center">
                                        <div class="row">
                                            <div class="col">
                                                <a href="" class="change-voucher_btn">Đổi ngay</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div> -->
                        

                    </div>
                </div>
            </div>

        </div>