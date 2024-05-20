<section class="content-main">
            <div class="content-header">
                <div>
                    <h2 class="content-title card-title">Bài viết Blog</h2>
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
                            <select class="form-select">
                                <option selected>Danh mục bình luận</option>
                                <option>Bình luận sản phẩm</option>
                               <a href="index.php?page=reviews-blog"><option>Viết bài blog</option></a> 

                            </select>
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
                                            <th>Tài khoản viết bài </th>
                                            <th>Tiêu đề  </th>
                                            <th>Trạng thái</th>
                                            <th>Ngày viết bài</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($allblog as $item) {
                                            extract($item);
                                            if($status == 0){
                                                $trang_thai = '<span class="badge badge-pill badge-soft-warning">  Đang chờ xử lí</span>';
                                                $show_dropdown =' <div class="dropdown">
                                                <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item text-success" href="index.php?page=success_blog&idblog='.$id.'">Duyệt</a>
                                                    <a class="dropdown-item text-danger" href="index.php?page=delblog&idblog='.$id.'">Xóa</a>
                                                    <a class="dropdown-item text-danger" href="index.php?page=cancel_blog&idblog='.$id.'">Hủy</a>
                                                </div>
                                            </div>';
                                            }else if($status == 1){
                                                $trang_thai = '<span class="badge badge-pill badge-soft-success">Đã duyệt</span> ';
                                                $show_dropdown = '';
                                            }else{
                                                $trang_thai = '<span class="badge badge-pill badge-soft-danger"> Đã hủy</span>';
                                                $show_dropdown = '';

                                            }
                                            echo '<tr>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" />
                                                </div>
                                            </td>
                                            <td>'.$id.'</td>
                                            <td><b>'.$username.'</b></td>
                                            <td>'.$tenblog.'</td>
                                           
                                            <td>'.$trang_thai .'</td>
                                            <td>'.$ngayvietblog.' </td>
                                            <td class="text-end">
                                            <a href="index.php?page=blogdetail&idblog='.$id.'" class="btn btn-md rounded font-sm">Xem chi tiết</a>
                                               '. $show_dropdown.'
                                                <!-- dropdown //end -->
                                            </td>
                                        </tr>
                                      ';
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


                    <?php if ($result_per_page == 1) { ?>
                        <li class="page-item"><a class="page-link" href="?page=reviews-blog&trang=<?php echo $number_of_page ?>&tukhoa=<?php echo $tukhoa ?>"><i class="material-icons md-chevron_left"></i></a></li>

                        <?php } else { ?>
                            <li class="page-item"><a class="page-link" href="?page=reviews-blog&trang=<?php echo ($result_per_page - 1) ?>&tukhoa=<?php echo $tukhoa ?>"><i class="material-icons md-chevron_left"></i></a></li>
                            <?php } ?>      
                    <!-- <li class="page-item"><a class="page-link" href="?"><i class="material-icons md-chevron_left"></i></a></li> -->

                    <?php for ($i = 1; $i <= $number_of_page; $i++) { ?>

                        <li class="page-item <?php if ($i == $result_per_page) { ?> active<?php } ?>   "><a class="page-link" href="?page=reviews-blog&trang=<?php echo $i ?>&tukhoa=<?php echo $tukhoa ?>"><?php echo sprintf("%02d", $i) ?></a></li>
                                          
                                        <?php } ?>


 



                       


                            <?php if ($result_per_page == $number_of_page) { ?>
                        <li class="page-item"><a class="page-link" href="?page=reviews-blog&trang=<?php echo 1 ?>&tukhoa=<?php echo $tukhoa ?>"><i class="material-icons md-chevron_right"></i></a></li>

                        <?php } else { ?>
                            <li class="page-item"><a class="page-link" href="?page=reviews-blog&trang=<?php echo ($result_per_page + 1) ?>&tukhoa=<?php echo $tukhoa ?>"><i class="material-icons md-chevron_right"></i></a></li>
                            <?php } ?> 
                        <!-- <li class="page-item"><a class="page-link" href="#"><i class="material-icons md-chevron_right"></i></a></li> -->
                    </ul>
                </nav>
            </div>
        </section>