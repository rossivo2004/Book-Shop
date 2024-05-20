<section class="content-main">
            <div class="content-header">
                <div>
                    <h2 class="content-title card-title">Danh mục </h2>
                    <p>Thêm, chỉnh sửa hoặc xóa một danh mục</p>
                </div>
                <div>
                    <form action="" method="get">
                        <input type="hidden" name="page" value="catalog">
                    <input type="search" name="tukhoa" placeholder="Tìm kiếm danh mục" class="form-control bg-white">
                    </form>
                    
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                        <form action="index.php?page=addcatalog" method="post" enctype="multipart/form-data">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Tên danh mục</label>
                                    <input type="text" name="name" placeholder="Nhập tên danh mục" class="form-control" id="product_name" />
                                </div>
                                <!-- <div class="mb-4">
                                    <label for="product_slug" class="form-label">Slug</label>
                                    <input type="text" placeholder="Type here" class="form-control" id="product_slug" />
                                </div> -->
                                <div class="mb-4">
                                    <label class="form-label">Mô tả</label>
                                    <textarea placeholder="Nhập mô tả danh mục " name="mota" class="form-control"></textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Chọn ảnh</label>
                                    <br>
                                    <img src="assets/imgs/theme/upload.svg" alt="">
                                    <input class="form-control" name="img" type="file">
                                </div>
                                <br>
                                <div class="d-grid">
                                    <button type="submit" name="addcatalog" class="btn btn-primary">Tạo danh mục</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-9">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                           
                                            <!-- <th>ID</th> -->
                                            <th>Tên </th>
                                            <th>Mô tả</th>
                                            <th>Hình ảnh</th>
                                            <!-- <th>Order</th> -->
                                            <th class="text-end">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        foreach ($catalog_show as $item) {
                                            extract($item);
                                            echo '<tr>
                                           
                                            <!-- <td>21</td> -->
                                            <td><b>'.$name.'</b></td>
                                            <td>'.$mota.'</td>
                                            <td><img src="'.IMG_PATH_ADMIN.$img.'" class="img-sm img-thumbnail" alt="Item"></td> 
                                            <!-- <td>1</td> -->
                                            <td class="text-end">
                                                <div class="dropdown">
                                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="index.php?page=fixcatalog&idloai='.$id.'">Sửa</a>
                                                        <a class="dropdown-item text-danger" href="index.php?page=delcatalog&idloai='.$id.'">Xóa</a>
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


            <div class="pagination-area mt-30 mb-50">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-start">


                    <?php if ($result_per_page == 1) { ?>
                        <li class="page-item"><a class="page-link" href="?page=catalog&trang=<?php echo $number_of_page ?>&tukhoa=<?php echo $tukhoa ?>"><i class="material-icons md-chevron_left"></i></a></li>

                        <?php } else { ?>
                            <li class="page-item"><a class="page-link" href="?page=catalog&trang=<?php echo ($result_per_page - 1) ?>&tukhoa=<?php echo $tukhoa ?>"><i class="material-icons md-chevron_left"></i></a></li>
                            <?php } ?>      
                    <!-- <li class="page-item"><a class="page-link" href="?"><i class="material-icons md-chevron_left"></i></a></li> -->

                    <?php for ($i = 1; $i <= $number_of_page; $i++) { ?>

                        <li class="page-item <?php if ($i == $result_per_page) { ?> active<?php } ?>   "><a class="page-link" href="?page=catalog&trang=<?php echo $i ?>&tukhoa=<?php echo $tukhoa ?>"><?php echo sprintf("%02d", $i) ?></a></li>
                                          
                                        <?php } ?>


                        <!-- <li class="page-item active"><a class="page-link" href="#">01</a></li>
                        <li class="page-item"><a class="page-link" href="#">02</a></li>
                        <li class="page-item"><a class="page-link" href="#">03</a></li>
                        <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">16</a></li>
 -->


                       


                            <?php if ($result_per_page == $number_of_page) { ?>
                        <li class="page-item"><a class="page-link" href="?page=catalog&trang=<?php echo 1 ?>&tukhoa=<?php echo $tukhoa ?>"><i class="material-icons md-chevron_right"></i></a></li>

                        <?php } else { ?>
                            <li class="page-item"><a class="page-link" href="?page=catalog&trang=<?php echo ($result_per_page + 1) ?>&tukhoa=<?php echo $tukhoa ?>"><i class="material-icons md-chevron_right"></i></a></li>
                            <?php } ?> 
                        <!-- <li class="page-item"><a class="page-link" href="#"><i class="material-icons md-chevron_right"></i></a></li> -->
                    </ul>
                </nav>
            </div>
            <!-- card .// -->
        </section>