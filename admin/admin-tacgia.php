<section class="content-main">
            <div class="content-header">
                <div>
                    <h2 class="content-title card-title">Tác giả </h2>
                    <p>Thêm, chỉnh sửa hoặc xóa một tác giả</p>
                </div>
                <div>
                <form action="" method="get">
                        <input type="hidden" name="page" value="tacgia">
                    <input type="search" name="tukhoa" placeholder="Tìm kiếm danh mục" class="form-control bg-white">
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <form action="index.php?page=addtacgia" method="post" >
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Tên tác giả</label>
                                    <input type="text" name="name" placeholder="Type here" class="form-control" id="product_name" />
                                </div>
                                
                                <div class="d-grid">
                                    <button type="submit" name="addtg" class="btn btn-primary">Tạo tác giả</button>
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
                                            <th>ID</th>
                                            <th>Tên</th>
                                            <th class="text-end">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($tacgia_show as $item) {
                                            extract($item);
                                            echo '<tr>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" />
                                                </div>
                                            </td>
                                            <td>'.$id.'</td>
                                            <td><b>'.$name.'</b></td>
                                            <td class="text-end">
                                                <div class="dropdown">
                                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="index.php?page=fixtacgia&idtg='.$id.'">Sửa</a>
                                                        <a class="dropdown-item text-danger" href="index.php?page=deltacgia&idtg='.$id.'">Xóa</a>
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

            <div class="pagination-area mt-30 mb-50">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-start">


                    <?php if ($result_per_page == 1) { ?>
                        <li class="page-item"><a class="page-link" href="?page=tacgia&trang=<?php echo $number_of_page ?>&tukhoa=<?php echo $tukhoa ?>"><i class="material-icons md-chevron_left"></i></a></li>

                        <?php } else { ?>
                            <li class="page-item"><a class="page-link" href="?page=tacgia&trang=<?php echo ($result_per_page - 1) ?>&tukhoa=<?php echo $tukhoa ?>"><i class="material-icons md-chevron_left"></i></a></li>
                            <?php } ?>      
                    <!-- <li class="page-item"><a class="page-link" href="?"><i class="material-icons md-chevron_left"></i></a></li> -->

                    <?php for ($i = 1; $i <= $number_of_page; $i++) { ?>

                        <li class="page-item <?php if ($i == $result_per_page) { ?> active<?php } ?>   "><a class="page-link" href="?page=tacgia&trang=<?php echo $i ?>&tukhoa=<?php echo $tukhoa ?>"><?php echo sprintf("%02d", $i) ?></a></li>
                                          
                                        <?php } ?>


 



                       


                            <?php if ($result_per_page == $number_of_page) { ?>
                        <li class="page-item"><a class="page-link" href="?page=tacgia&trang=<?php echo 1 ?>&tukhoa=<?php echo $tukhoa ?>"><i class="material-icons md-chevron_right"></i></a></li>

                        <?php } else { ?>
                            <li class="page-item"><a class="page-link" href="?page=tacgia&trang=<?php echo ($result_per_page + 1) ?>&tukhoa=<?php echo $tukhoa ?>"><i class="material-icons md-chevron_right"></i></a></li>
                            <?php } ?> 
                        <!-- <li class="page-item"><a class="page-link" href="#"><i class="material-icons md-chevron_right"></i></a></li> -->
                    </ul>
                </nav>
            </div>
        </section>