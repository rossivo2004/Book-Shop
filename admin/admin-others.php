<section class="content-main">
            <div class="content-header">
                <div>
                    <h2 class="content-title card-title">Danh sách đơn đặt hàng</h2>
                    <!-- <p>Lorem ipsum dolor sit amet.</p> -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <header class="card-header">
                            <div class="row gx-3">
                                <div class="col-lg-4 col-md-6 me-auto">
                                <form action="" method="get">
                        <input type="hidden" name="page" value="others">
                    <input type="search" name="tukhoa" placeholder="Tìm kiếm theo id" class="form-control bg-white">
                    </form>
                                </div>
                                
                            </div>
                        </header>
                        <!-- card-header end// -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên khách hàng </th>
                                            <th>Giá tiền</th>
                                            <th>Trạng thái</th>
                                            <th>Ngày đặt</th>
                                            <th class="text-end"> Thao tác </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($bill_show as $item){ ?>

                                            <?php extract($item) ?>
                                            <tr>
                                            <td><?php echo $id ?></td>
                                            <td><b><?php echo $nguoidat_ten ?></b></td>
                                            <td><?php echo $tongthanhtoan ?> VNĐ</td>
                                            <td>
                                            <?php if($status == 0 ){ ?>
                                                <span class="badge badge-pill badge-soft-warning">  Đang chờ xử lí</span>
                                            <?php }else if($status == 1){ ?>
                                                <span class="badge badge-pill badge-soft-success">Hoàn thành</span> 
                                                <?php }else{?>
                                                    <span class="badge badge-pill badge-soft-danger"> Đã hủy</span>
                                                    <?php } ?>
                                        </td>
                                            <td><?php echo $ngay_dat ?></td>
                                            <td class="text-end">
                                                
                                            <a href="index.php?page=others-detail&idbill=<?php echo $id ?>" class="btn btn-md rounded font-sm">Xem chi tiết</a>
                                                <?php if($status == 0){?>
                                                <div class="dropdown">
                                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="?page=succed_bill&id=<?php echo $id ?>&id_user=<?php echo $iduser ?>">Hoàn thành</a>
                                                        <a  class="dropdown-item text-danger" href="#">Hủy</a>
                                                        
                                                    </div>
                                                </div>
                                                <!-- dropdown //end -->
                                                <?php } ?>
                                            </td>
                                        </tr>
                                        <?php }?>
                                    
                                       
                                    </tbody>
                                </table>
                            </div>
                            <!-- table-responsive //end -->
                        </div>
                        <!-- card-body end// -->
                    </div>
                    <!-- card end// -->
                </div>
            </div>
            <div class="pagination-area mt-30 mb-50">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-start">
                    <?php if ($result_per_page == 1) { ?>
                        <li class="page-item"><a class="page-link" href="?page=others&trang=<?php echo $number_of_page ?>&tukhoa=<?php echo $tukhoa ?>"><i class="material-icons md-chevron_left"></i></a></li>

                        <?php } else { ?>
                            <li class="page-item"><a class="page-link" href="?page=others&trang=<?php echo ($result_per_page - 1) ?>&tukhoa=<?php echo $tukhoa ?>"><i class="material-icons md-chevron_left"></i></a></li>
                            <?php } ?>      
                    <!-- <li class="page-item"><a class="page-link" href="?"><i class="material-icons md-chevron_left"></i></a></li> -->

                    <?php for ($i = 1; $i <= $number_of_page; $i++) { ?>

                        <li class="page-item <?php if ($i == $result_per_page) { ?> active<?php } ?>   "><a class="page-link" href="?page=others&trang=<?php echo $i ?>&tukhoa=<?php echo $tukhoa ?>"><?php echo sprintf("%02d", $i) ?></a></li>
                                          
                                        <?php } ?>


 



                       


                            <?php if ($result_per_page == $number_of_page) { ?>
                        <li class="page-item"><a class="page-link" href="?page=others&trang=<?php echo 1 ?>&tukhoa=<?php echo $tukhoa ?>"><i class="material-icons md-chevron_right"></i></a></li>

                        <?php } else { ?>
                            <li class="page-item"><a class="page-link" href="?page=others&trang=<?php echo ($result_per_page + 1) ?>&tukhoa=<?php echo $tukhoa ?>"><i class="material-icons md-chevron_right"></i></a></li>
                            <?php } ?> 
                        <!-- <li class="page-item"><a class="page-link" href="#"><i class="material-icons md-chevron_right"></i></a></li> -->
                    </ul>
                </nav>
            </div>
        </section>