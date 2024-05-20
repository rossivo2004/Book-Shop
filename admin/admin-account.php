<section class="content-main">
            <div class="content-header">
                <h2 class="content-title">Danh sách tài khoản</h2>
                <div>
                    <!-- <a href="#" class="btn btn-primary"><i class="material-icons md-plus"></i> Create new</a> -->
                </div>
            </div>
            <div class="card mb-4">
                <header class="card-header">
                    <div class="row gx-3">
                        <div class="col-lg-4 col-md-6 me-auto">
                        <form action="" method="get">
                        <input type="hidden" name="page" value="account">
                    <input type="search" name="tukhoa" placeholder="Tìm kiếm danh mục" class="form-control bg-white">
                    </form>
                        </div>
                        <div class="col-lg-2 col-md-3 col-6">
                            <select class="form-select">
                                <option>Status</option>
                                <option>Active</option>
                                <option>Disabled</option>
                                <option>Show all</option>
                            </select>
                        </div>
                        <div class="col-lg-2 col-md-3 col-6">
                            <select class="form-select">
                                <option>Show 20</option>
                                <option>Show 30</option>
                                <option>Show 40</option>
                            </select>
                        </div>
                    </div>
                </header>
                <!-- card-header end// -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Người dùng</th>
                                    <th>Email</th>
                                    <th>Số điện thoại</th>
                                    <th>Địa chỉ</th>
                                    <th class="text-end"> Thao tác </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($alluser as $item) {
                                    extract($item);
                                    echo '<tr>
                                    <td width="40%">
                                        <a href="#" class="itemside">
                                            <div class="left">
                                                <img src="assets/imgs/people/avatar1.jpg" class="img-sm img-avatar" alt="Userpic">
                                            </div>
                                            <div class="info pl-3">
                                                <h6 class="mb-0 title">'.$username.'</h6>
                                                <small class="text-muted">ID người dùng: '.$id  .'</small>
                                            </div>
                                        </a>
                                    </td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="dabfb6bfbbb4b5a8e8eae8e89abfa2bbb7aab6bff4b9b5b7">['.$email.']</a></td>
                                    <td><span class="badge rounded-pill alert-success">'.$dienthoai.'</span></td>
                                    <td>'.$diachi.'</td>
                                    <td class="text-end">
                                        <a href="index.php?page=delaccount&idacc='.$id.'" class="btn btn-sm btn-brand rounded font-sm mt-15">Xóa</a>
                                    </td>
                                </tr>';
                                }
                                ?>
                                
                                
                            </tbody>
                        </table>
                        <!-- table-responsive.// -->
                    </div>
                </div>
                <!-- card-body end// -->
            </div>
            <!-- card end// -->


            <div class="pagination-area mt-30 mb-50">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-start">


                    <?php if ($result_per_page == 1) { ?>
                        <li class="page-item"><a class="page-link" href="?page=account&trang=<?php echo $number_of_page ?>&tukhoa=<?php echo $tukhoa ?>"><i class="material-icons md-chevron_left"></i></a></li>

                        <?php } else { ?>
                            <li class="page-item"><a class="page-link" href="?page=account&trang=<?php echo ($result_per_page - 1) ?>&tukhoa=<?php echo $tukhoa ?>"><i class="material-icons md-chevron_left"></i></a></li>
                            <?php } ?>      
                    <!-- <li class="page-item"><a class="page-link" href="?"><i class="material-icons md-chevron_left"></i></a></li> -->

                    <?php for ($i = 1; $i <= $number_of_page; $i++) { ?>

                        <li class="page-item <?php if ($i == $result_per_page) { ?> active<?php } ?>   "><a class="page-link" href="?page=account&trang=<?php echo $i ?>&tukhoa=<?php echo $tukhoa ?>"><?php echo sprintf("%02d", $i) ?></a></li>
                                          
                                        <?php } ?>


 



                       


                            <?php if ($result_per_page == $number_of_page) { ?>
                        <li class="page-item"><a class="page-link" href="?page=account&trang=<?php echo 1 ?>&tukhoa=<?php echo $tukhoa ?>"><i class="material-icons md-chevron_right"></i></a></li>

                        <?php } else { ?>
                            <li class="page-item"><a class="page-link" href="?page=account&trang=<?php echo ($result_per_page + 1) ?>&tukhoa=<?php echo $tukhoa ?>"><i class="material-icons md-chevron_right"></i></a></li>
                            <?php } ?> 
                        <!-- <li class="page-item"><a class="page-link" href="#"><i class="material-icons md-chevron_right"></i></a></li> -->
                    </ul>
                </nav>
            </div>
     
        </section>