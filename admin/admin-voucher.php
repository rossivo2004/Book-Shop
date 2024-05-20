<section class="content-main">
            <div class="content-header">
                <div>
                    <h2 class="content-title card-title">Voucher </h2>
                    <p>Thêm, chỉnh sửa hoặc xóa voucher</p>
                </div>
                <div>
                    <input type="text" placeholder="Tìm kiếm danh mục" class="form-control bg-white">
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <form action="index.php?page=addvoucher" method="post">
                                <!-- <div class="mb-4">
                                    <label for="product_name" class="form-label">Mã voucher</label>
                                    <input type="text" placeholder="Type here" name="id" class="form-control" id="product_name" />
                                </div> -->
                                <div class="mb-4">
                                    <label for="product_slug" class="form-label">Số tiền giảm %</label>
                                    <input type="text" placeholder="Type here" name="sotien" class="form-control" id="product_slug" />
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Điểm tích lũy</label>
                                    <textarea placeholder="Type here" name="diemtl" class="form-control"></textarea>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" name="taovoucher" class="btn btn-primary">Tạo voucher</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-9">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" />
                                                </div>
                                            </th>
                                            <th>Mã Voucher</th>
                                            <th>Số tiền giảm %</th>
                                            <th>Điểm tích lũy</th>
                                            <th class="text-end">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($allvoucher as $item) {
                                            extract($item);
                                            echo '   <tr>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" />
                                                </div>
                                            </td>
                                            <td>'.$id.'</td>
                                            <td><b>'.$sotien_giam.' %</b></td>
                                            <td>'.$diemtichluy_can.' điểm</td>
                                            <td class="text-end">
                                                <div class="dropdown">
                                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="index.php?page=fixvoucher&idvoucher='.$id.'">Sửa</a>
                                                        <a class="dropdown-item text-danger" href="index.php?page=delvoucher&idvoucher='.$id.'">Xóa</a>
                                                    </div>
                                                </div>
                                                <!-- dropdown //end -->
                                            </td>
                                        </tr>';
                                        }
                                        ?>
                                     
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- .col// -->
                    </div>
                    <!-- .row // -->
                </div>
                <!-- card body .// -->
            </div>
            <!-- card .// -->
        </section>