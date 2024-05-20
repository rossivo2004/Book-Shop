
        <section class="content-main">
            <div class="content-header">
                <div>
                    <h2 class="content-title card-title">Sản phẩm</h2>
                    <!-- <p>Lorem ipsum dolor sit amet.</p> -->
                    
                </div>
                <!-- <div>
                    <a href="#" class="btn btn-light rounded font-md">Export</a>
                    <a href="#" class="btn btn-light rounded  font-md">Import</a>
                    <a href="#" class="btn btn-primary btn-sm rounded">Create new</a>
                </div> -->
                <div>
                <form action="" method="get">
                <input type="hidden" name="page" value="product">
                    <input type="search" name="tukhoa" placeholder="Tìm kiếm danh mục" class="form-control bg-white">
                    </form>
                </div>
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
                            <form action="">
                                <input type="hidden" name="page" value="product">
                               

                            <select class="form-select" name="idloaisach">
                                <option <?php if(!isset($_GET['idloaisach'])){ ?>
                                    selected
                                    <?php }?>
                                     value="">Tất cả danh mục</option>
                                
                              <?php   foreach ($alldanhmucsach as $item) { ?>
                                    <?php extract($item); ?>
                                    <option <?php if(isset($_GET['idloaisach'])){ ?>
                                    selected
                                    <?php }?> value="<?php echo $id ?>"> <?php echo $name ?></option>';
                               <?php }
                                ?>
                            </select>
                                <input type="submit">
                            </form>
                           
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
                <?php
                foreach ($sachsp as $item) {
                    extract($item);
                    echo '<div class="card-body">
                    <article class="itemlist">
                        <div class="row align-items-center">
                            <div class="col col-check flex-grow-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-8 flex-grow-1 col-name">
                                <a class="itemside" href="#">
                                    <div class="left">
                                        <img src="'.IMG_PATH_ADMIN.$img.'" class="img-sm img-thumbnail" alt="Item">
                                    </div>
                                    <div class="info">
                                        <h6 class="mb-0">'.$name.'</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-4 col-price"> <span>'.number_format($price1).' đ</span> </div>
                            <div class="col-lg-2 col-sm-2 col-4 col-status">
                                <span class="badge rounded-pill alert-success">Active</span>
                            </div>
                            <div class="col-lg-1 col-sm-2 col-4 col-date">
                                <span>02.11.2022</span>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-4 col-action text-end">
                                <a href="index.php?page=fixproduct&idsp='.$id.'" class="btn btn-sm font-sm rounded btn-brand">
                                    <i class="material-icons md-edit"></i> Sửa
                                </a>
                                <a href="index.php?page=delproduct&idsp='.$id.'" class="btn btn-sm font-sm btn-light rounded">
                                    <i class="material-icons md-delete_forever"></i> Xóa
                                </a>
                            </div>
                        </div>
                        <!-- row .// -->
                    </article>
                    
                </div>';
                }
                ?>
                
                <!-- card-body end// -->
            </div>
            <!-- card end// -->
            <div class="pagination-area mt-30 mb-50">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-start">


                    <?php if ($result_per_page == 1) { ?>
                        <li class="page-item"><a class="page-link" href="?page=product&trang=<?php echo $number_of_page ?>&tukhoa=<?php echo $tukhoa ?>&idloaisach=<?php echo $idloai ?>"><i class="material-icons md-chevron_left"></i></a></li>

                        <?php } else { ?>
                            <li class="page-item"><a class="page-link" href="?page=product&trang=<?php echo ($result_per_page - 1) ?>&tukhoa=<?php echo $tukhoa ?>&idloaisach=<?php echo $idloai ?>"><i class="material-icons md-chevron_left"></i></a></li>
                            <?php } ?>      
                    <!-- <li class="page-item"><a class="page-link" href="?"><i class="material-icons md-chevron_left"></i></a></li> -->

                    <?php for ($i = 1; $i <= $number_of_page; $i++) { ?>

                        <li class="page-item <?php if ($i == $result_per_page) { ?> active<?php } ?>   "><a class="page-link" href="?page=product&trang=<?php echo $i ?>&tukhoa=<?php echo $tukhoa ?>&idloaisach=<?php echo $idloai ?>"><?php echo sprintf("%02d", $i) ?></a></li>
                                          
                                        <?php } ?>
                            <?php if ($result_per_page == $number_of_page) { ?>
                        <li class="page-item"><a class="page-link" href="?page=product&trang=<?php echo 1 ?>&tukhoa=<?php echo $tukhoa ?>&idloaisach=<?php echo $idloai ?>"><i class="material-icons md-chevron_right"></i></a></li>

                        <?php } else { ?>
                            <li class="page-item"><a class="page-link" href="?page=product&trang=<?php echo ($result_per_page + 1) ?>&tukhoa=<?php echo $tukhoa ?>&idloaisach=<?php echo $idloai ?>"><i class="material-icons md-chevron_right"></i></a></li>
                            <?php } ?> 
                        <!-- <li class="page-item"><a class="page-link" href="#"><i class="material-icons md-chevron_right"></i></a></li> -->
                    </ul>
                </nav>
            </div>
        </section>
        <!-- content-main end// -->
       