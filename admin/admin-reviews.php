<section class="content-main">
    <div class="content-header">
        <div>
            <h2 class="content-title card-title">Bình luận</h2>
            <!-- <p>Lorem ipsum dolor sit amet.</p> -->
        </div>
        <!-- <div>
                    <a href="#" class="btn btn-light rounded font-md">Export</a>
                    <a href="#" class="btn btn-light rounded  font-md">Import</a>
                    <a href="#" class="btn btn-primary btn-sm rounded">Create new</a>
                </div> -->
    </div>
    <div class="card mb-4">
        <header class="card-header">
            <div class="row align-items-center">
                <div class="col col-check flex-grow-0">
                    <div class="form-check ms-2">
                        <input class="form-check-input" type="checkbox" value="">
                    </div>
                </div>
                <div class="col-md-3 col-12 me-auto mb-md-0 mb-3">
                    <select class="form-select" onchange="redirectToPage(this)">
                        <option selected>Danh mục bình luận</option>
                        <option>Bình luận sản phẩm</option>
                        <option>Viết bài blog</option>
                        
                    </select>
                    <script>
                        function redirectToPage(selectElement) {
                            const selectedOption = selectElement.options[selectElement.selectedIndex].text;
                            if (selectedOption === "Viết bài blog") {
                                window.location.href = "index.php?page=reviews-blog";
                            }
                        }
                    </script>
                </div>
                <div class="col-md-2 col-6">
                    <input type="date" value="02.05.2022" class="form-control">
                </div>
                <div class="col-md-2 col-6">
                    <select class="form-select">
                        <option selected>Trạng thái</option>
                        <option>Active</option>
                        <option>Disabled</option>
                        <option>Show all</option>
                    </select>
                </div>
            </div>
        </header>
        <!-- card-header end// -->
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
                            <th>ID</th>
                            <th>Tài khoản bình luận </th>
                            <th>Mô tả bình luận </th>
                            <th>Ngày bình luận</th>
                            <th>Trạng thái</th>
                            <th>Sản phẩm được bình luận</th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($allbinhluan as $item) {
                            extract($item);
                            if($trangthai==0){
                                $bienhinh='<td><span class="badge rounded-pill alert-success">Đã duyệt</span></td>';
                            }elseif ($trangthai==1) {
                                $bienhinh='<td><span class="badge rounded-pill alert-danger">Không cho phép</span></td>';
                            }else{
                                $bienhinh='<td><span class="badge rounded-pill alert-warning">Đang chờ xử lí</span></td>';
                            }
                            echo '<tr>
                            <td class="text-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" />
                                </div>
                            </td>
                            <td>'.$id.'</td>
                            <td><b>'.$username.'</b></td>
                            <td>'.$noidung.'</td>
                            <td>'.$ngaybl.'</td>
                            '.$bienhinh.'
                            <td style="text-align:center;"><img src="../view/layout/assets/images/'.$img.'"
                                    width="80px" height="80px" alt=""> <br> '.$name.'</td>
                            <td class="text-end">
                                <div class="dropdown">
                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm">
                                        <i class="material-icons md-more_horiz"></i> </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="index.php?page=account&iduser='.$iduser.'">Xem tài khoản</a>
                                        <a class="dropdown-item text-danger" href="index.php?page=delbinhluan&idbl='.$id.'">Xóa</a>
                                        
                                        <a style="color: green;" class="dropdown-item" href="index.php?page=trangthaibl&idtt='.$id.'">Duyệt</a>
                                        <a style="color: red;" class="dropdown-item" href="">Hủy</a>
                                  
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
        <!-- card-body end// -->
    </div>
    <!-- card end// -->
    <div class="pagination-area mt-30 mb-50">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-start">
                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                <li class="page-item"><a class="page-link" href="#">02</a></li>
                <li class="page-item"><a class="page-link" href="#">03</a></li>
                <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                <li class="page-item"><a class="page-link" href="#">16</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="material-icons md-chevron_right"></i></a>
                </li>
            </ul>
        </nav>
    </div>
</section>