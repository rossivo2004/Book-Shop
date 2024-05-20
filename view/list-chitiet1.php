
        <div class="container-fluid bg-main">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Thông tin đơn hàng</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <!-- <h1>Lịch sử đặt hàng</h1> -->
                <ul class="nav nav-lo">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="pill" href="#lo-1">Thông tin đơn hàng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="pill" href="#lo-2">Đánh giá</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content mb-4">
                    <div class="tab-pane container active" id="lo-1">
                        <div class="row">
                            <div class="col-12 d-sm-none d-md-block">
                                <div class="row bg-white title-lo">
                                    <div class="col-2 col-md-2 col-sm-2">Số thứ tự</div>
                                    <div class="col-3 col-md-3 col-sm-3">Mã đơn hàng</div>
                                    <div class="col-3 col-md-3 col-sm-3">Ngày đặt</div>
                                    <div class="col-4 col-md-4 col-sm-4">Thao tác</div>
                                </div>
                            </div>
                            <div class="col-12">
                            <?php
                                $i = 1;
                                foreach ($bill_result as $item) {
                                    extract($item);
                                        echo '<div class="row bg-white mt-2 content-lo">
                                                    <div class=" col-lg-2 col-sm-2">'.$i.'</div>
                                                    <div class=" col-lg-3 col-sm-3">'.$id.'</div>
                                                    <div class=" col-lg-3 col-sm-4">'.$ngay_dat.'</div>
                                                    <div class=" col-lg-4 col-sm-3">
                                                        <div class="row">
                                                            <div class="col-12 col-lg-12 col-sm-12">
                                                                <button class="btn btn-lo">
                                                                    <a href="index.php?pg=detail_bill_show&id_bill='.$id.'">
                                                                        <p class="list-oder_control_text">Xem chi tiết</p>
                                                                        <i class="fa-solid fa-circle-info list-oder_control__icon"></i>
                                                                    </a>

                                                                </button>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>';

                                    $i++;
                                }
                            ?>
                                
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane container fade" id="lo-2">
                        <div class="row">
                            <div class="col-12">
                                <div class="row bg-white title-lo">
                                    <div class="col-2">Số thứ tự</div>
                                    <div class="col-3">Mã đơn hàng</div>
                                    <div class="col-3">Ngày đặt</div>
                                    <div class="col-4">Đánh giá</div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row bg-white mt-2 content-lo">
                                    <div class="col-2">1</div>
                                    <div class="col-3">PA102932</div>
                                    <div class="col-3">10/10/2023</div>
                                    <div class="col-4">
                                        <form action="/action_page.php">
                                            <div class="mb-3 mt-3">
                                                <textarea class="form-control" rows="5" id="comment"
                                                    name="text"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Gửi</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>