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
                            <input type="text" placeholder="Tìm kiếm" class="form-control">
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
                                foreach ($user_one as $item) {
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
           
        </section>