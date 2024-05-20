<section class="content-main">
    <div class="row">
        <div class="col-9">
            <div class="content-header">
                <h2 class="content-title">Thêm sản phẩm mới</h2>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Sản phẩm</h4>
                </div>
                <div class="card-body">
                    <form action="index.php?page=addproduct" method="post" enctype="multipart/form-data">
                        <div class="mb-4">
                            <label for="product_name" class="form-label">Tên sản phẩm</label>
                            <input type="text" name="name" placeholder="Nhập ở đây" class="form-control"
                                id="product_name">
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Mô tả sản phẩm</label>
                            <textarea name="mota" placeholder="Nhập ở đây" class="form-control" rows="4"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <label class="form-label">Giá gốc</label>
                                    <div class="row gx-2">
                                        <input placeholder="đ" type="text" name="price1" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <label class="form-label">Phần trăm khuyến mãi</label>
                                    <input placeholder="%" type="text" name="price2" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <label class="form-label">Sản phẩm mới</label>
                                    <input  type="text" name="spmoi" class="form-control">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div>
                            <button class="btn btn-light rounded font-sm mr-5 text-body hover-up">Hủy</button>
                            <button type="submit" name="addproduct"
                                class="btn btn-md rounded font-sm hover-up">Thêm</button>
                        </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Ảnh sản phẩm</h4>
                </div>
                <div class="card-body">
                    <div class="input-upload">
                        <img src="assets/imgs/theme/upload.svg" alt="">
                        <input class="form-control" name="img" type="file">
                    </div>
                </div>
            </div>
            <!-- card end// -->
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Thể loại</h4>
                </div>
                <div class="card-body">
                    <div class="row gx-2">
                        <div class="col-sm-6 mb-3">
                            <label class="form-label">Loại sách</label>
                            <select class="form-select" name="idloaisach">
                                <option> Thể loại </option>
                                <?php
                                foreach ($alldanhmucsach as $item) {
                                    extract($item);
                                    if($id==$iddm){
                                        $se="selected";
                                    } else{
                                        $se="";
                                    } 
                                    echo'<option value="'.$id.'" '.$se.'> '.$name.' </option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label class="form-label">Tác giả</label>
                            <select class="form-select" name="tacgia">
                                <option> Tác giả </option>
                                <?php
                                foreach ($alltacgia as $item) {
                                    extract($item);
                                    if($id==$idtg){
                                        $se="selected";
                                    } else{
                                        $se="";
                                    } 
                                    echo'<option value="'.$id.'" '.$se.'> '.$name.' </option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label class="form-label">Nhà xuất bản</label>
                            <select class="form-select" name="nhaxuatban">
                                <option> Nhà xuát bản</option>
                                <?php
                                foreach ($allnxb as $item) {
                                    extract($item);
                                    if($id==$idnxb){
                                        $se="selected";
                                    } else{
                                        $se="";
                                    } 
                                    echo'<option value="'.$id.'" '.$se.'> '.$name.' </option>';
                                }
                                ?>
                            </select>
                        </div>
                        
                        <!-- <div class="mb-4">
                                    <label for="product_name" class="form-label">Tags</label>
                                    <input type="text" class="form-control">
                                </div> -->
                    </div>
                    <!-- row.// -->
                </div>
            </div>
            <!-- card end// -->
        </div>
    </div>
    </form>
</section>