<div class="">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="container bg-white p-4 mb-4 bdr-10">
            <div class="order-chitiet_box">
                <h1>Đơn hàng : <span> #<?php echo $id ?></span></h1>
                <div class="row">
                    <div class="col-12">
                        <div class="row bg-main p-3 order-chitiet_box__title">
                            <div class="col-1">STT</div>
                            <div class="col-4">Tên</div>
                            <div class="col-3">Hình ảnh</div>
                            <div class="col-2">Số lượng</div>
                            <div class="col-2">Tổng tiền</div>
                        </div>

                        <?php foreach( $viewdetailuserbill as $item){ ?>
                            <?php 
                            extract($item);
                            $tongall=0;
                                $tongcong=$price1*$soluong;
                                $tongall=$tongall+$tongcong;
                            ?>
                            <div class="row order-chitiet_box__product p-3">
                            <div class="col-1">1</div>
                            <div class="col-4"><a href=""><?php echo($name) ?></a></div>
                            <div class="col-3"><img src="../view/layout/assets/images/product/<?php echo($img) ?>" alt="" class="order-chitiet_img"></div>
                            <div class="col-2"><?php echo($soluong) ?></div>
                            <div class="col-2"><?php echo(number_format($gia*$soluong)) ?><sup>đ</sup></div>
                        </div>
                            <?php } ?>
                          <h1 class="order-chitiet_box__pricesum">Tổng thành tiền : <?php echo number_format($tongall) ?><sup>đ</sup></span></span></h1>
                    </div>
                </div>
            </div>
        </div>