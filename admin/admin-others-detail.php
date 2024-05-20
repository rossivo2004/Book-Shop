<section class="content-main">
    <div class="content-header">
        <div>
            <h2 class="content-title card-title">Chi tiết đơn hàng</h2>
            <p>Chi tiết về đơn hàng:
                <?= $_GET['idbill'] ?>
            </p>
        </div>
    </div>
    <div class="card">
        <header class="card-header">
            <div class="row align-items-center">
                <?php
                foreach ($bill_chitiet as $item) {
                    extract($item);
                    echo '<div class="col-lg-6 col-md-6 mb-lg-0 mb-15">
                            <span>
                                <i class="material-icons md-calendar_today"></i> <b>' . $ngay_dat . '</b>
                            </span> <br>
                            <small class="text-muted">Order ID: ' . $id . '</small>
                        </div>';
                }
                ?>

                <!-- <div class="col-lg-6 col-md-6 ms-auto text-md-end">
                            <select class="form-select d-inline-block mb-lg-0 mb-15 mw-200">
                                <option>Change status</option>
                                <option>Awaiting payment</option>
                                <option>Confirmed</option>
                                <option>Shipped</option>
                                <option>Delivered</option>
                            </select>
                            <a class="btn btn-primary" href="#">Save</a>
                            <a class="btn btn-secondary print ms-2" href="#"><i class="icon material-icons md-print"></i></a>
                        </div> -->
            </div>
        </header>
        <!-- card-header end// -->
        <div class="card-body">
            <div class="row mb-50 mt-20 order-info-wrap">
                <div class="col-md-4">
                    <article class="icontext align-items-start">
                        <span class="icon icon-sm rounded-circle bg-primary-light">
                            <i class="text-primary material-icons md-person"></i>
                        </span>
                        <?php
                        foreach ($bill_chitiet as $item) {
                            extract($item);
                            if ($status == 0) {
                                $bienhinh = '<span class="badge rounded-pill alert-warning">Đang chờ xử lí</span>';
                                
                            } elseif ($status == 1) {
                                $bienhinh = '<span class="badge rounded-pill alert-success">Đã giao</span>';
                                
                            } else {
                                $bienhinh = '<span class="badge rounded-pill alert-danger">Đã hủy</span>';
                            }
                            echo '<div class="text">
                            <h6 class="mb-1">Khách hàng</h6>
                            <p class="mb-1">
                                ' . $nguoidat_ten . ' <br> <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c7a6aba2bf87a2bfa6aab7aba2e9a4a8aa">[' . $nguoidat_email . ']</a> <br> ' . $nguoidat_sdt . '
                            </p>
                            <a href="index.php?page=account&iduser=' . $iduser . '">View profile</a>
                        </div>
                    </article>
                </div>
                <!-- col// -->
                <div class="col-md-4">
                    <article class="icontext align-items-start">
                        <span class="icon icon-sm rounded-circle bg-primary-light">
                            <i class="text-primary material-icons md-local_shipping"></i>
                        </span>
                        <div class="text">
                            <h6 class="mb-1">Thông tin đặt hàng</h6>
                            <p class="mb-1">
                                Phương thức thanh toán: ' . $pttt . ' <br> Phí vận chuyển: ' . $ship . ' <br> Trạng thái đơn hàng: ' . $bienhinh . '
                            </p>
                            
                        </div>
                    </article>
                </div>
                <!-- col// -->
                <div class="col-md-4">
                    <article class="icontext align-items-start">
                        <span class="icon icon-sm rounded-circle bg-primary-light">
                            <i class="text-primary material-icons md-place"></i>
                        </span>
                        <div class="text">
                            <h6 class="mb-1">Giao hàng tới</h6>
                            <p class="mb-1">
                                Địa chỉ giao hàng: ' . $nguoidat_diachi . '
                            </p>

                        </div>
                    </article>
                </div>
                </div>';
                        }
                        ?>

                        <!-- col// -->

                        <!-- row // -->
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th width="40%">Sản phẩm</th>
                                                <th width="20%">Đơn giá</th>
                                                <th width="20%">Số lượng</th>
                                                <th width="20%" class="text-end">Tổng cộng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($detail_bill_result as $item) {
                                                extract($item);
                                                $tongcong = $gia * $soluong;

                                                echo '<tr>
                                            <td>
                                                <a class="itemside" href="#">
                                                    <div class="left">
                                                        <img src="../view/layout/assets/images/' . $img . '" width="40" height="40" class="img-xs" alt="Item">
                                                    </div>
                                                    <div class="info">' . $name . ' </div>
                                                </a>
                                            </td>
                                            <td> ' . number_format($gia) . ' đ </td>
                                            <td> ' . $soluong . ' </td>
                                            <td class="text-end"> ' . number_format($tongcong) . 'đ </td>
                                        </tr>';
                                            }
                                            ?>

                                            
                                        </tbody>
                                    </table>
                                </div>
                                <!-- table-responsive// -->
                                <!-- <a class="btn btn-primary" href="page-orders-tracking.html">Xem theo dõi đơn hàng</a> -->
                            </div>
                            <!-- col// -->
                            
                            <div class="col-lg-4">
                                <br>
                                <!-- <div class="box shadow-sm bg-light">
                                    <h6 class="mb-15">Thông tin thanh toán</h6>
                                    <p>
                                        <img src="assets/imgs/card-brands/2.png" class="border" height="20"> Master Card
                                        **** **** 4768 <br> Business name: Grand Market LLC <br> Phone: +1 (800)
                                        555-154-52
                                    </p>
                                </div>
                                <div class="h-25 pt-4">
                                    <div class="mb-3">
                                        <label>Ghi chú</label>
                                        <textarea class="form-control" name="notes" id="notes"
                                            placeholder="Type some note"></textarea>
                                    </div>
                                    <button class="btn btn-primary">Lưu ghi chú</button>
                                </div> -->
                                <?php
                                
                                $dung= false;
                                foreach ($detail_bill_result as $item) {
                                    extract($item);

                                    if(!$dung){
                                        echo '<tr>
                                        <td colspan="4">
                                            <article class="float-end">
                                                <dl class="dlist">
                                                    <dt>Tạm tính:</dt>
                                                    <dd>'.number_format($total).' đ</dd>
                                                </dl>
                                                <dl class="dlist">
                                                    <dt>Giá vận chuyển:</dt>
                                                    <dd>'.$ship.'</dd>
                                                </dl>
                                                <dl class="dlist">
                                                    <dt>Tổng cộng:</dt>
                                                    <dd> <b class="h5">'.number_format($tongthanhtoan).' đ</b> </dd>
                                                </dl>
                                                <dl class="dlist">
                                                    <dt class="text-muted">Trạng thái</dt>
                                                    <dd>
                                                        '.$bienhinh.'
                                                    </dd>
                                                </dl>
                                            </article>
                                        </td>
                                    </tr>';
                                    $dung=true;
                                    }
                                }
                                ?>
                                
                            </div>
                            <!-- col// -->
                        </div>
                </div>
                <!-- card-body end// -->
            </div>
            <!-- card end// -->
</section>