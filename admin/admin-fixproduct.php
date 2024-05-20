<?php
if(is_array($sp)&&(count($sp)>0)){
    extract($sp);
    $idchitiet=$id;
    $imgpath=IMG_PATH_ADMIN.$img;
    if(is_file($imgpath)){
        $img='<img src="'.$imgpath.'" width="80px">';
    }else{
        $img="";
    }
}
?>
<section class="content-main">
    <div class="row">
        <div class="col-9">
            <div class="content-header">
                <h2 class="content-title">Cập nhật sản phẩm</h2>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Sản phẩm</h4>
                </div>
                <div class="card-body">
                    <form action="index.php?page=fixsp" method="post" enctype="multipart/form-data">
                        <div class="mb-4">
                            <label for="product_name" class="form-label">Tên sản phẩm</label>
                            <input type="text" name="name" placeholder="Nhập ở đây" class="form-control" value="<?=$name?>"
                                id="product_name">
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Mô tả sản phẩm</label>
                            <textarea name="mota" placeholder="Nhập ở đây" class="form-control" rows="4"><?=$mota?></textarea>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <label class="form-label">Giá gốc</label>
                                    <div class="row gx-2">
                                        <input placeholder="đ" type="text" name="price1" class="form-control" value="<?=$price1?>"> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <label class="form-label">Giá khuyến mãi</label>
                                    <input placeholder="đ" type="text" name="giamgia" class="form-control" value="<?=$giamgia?>">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <label class="form-label">Sản phẩm mới ?</label>
                                    <input  type="text" name="spmoi" class="form-control" value="<?=$moi?>">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div>
                            <input type="hidden" name="id" value="<?=$idchitiet?>">
                            <button class="btn btn-light rounded font-sm mr-5 text-body hover-up">Hủy</button>
                            <button type="submit" name="fixproduct" class="btn btn-md rounded font-sm hover-up">Sửa</button>
                        </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Ảnh sản phẩm</h4> <?=$img?>
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
                                    if($id==$idloaisach){
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
                                    if($id==$idtacgia){
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
                                <option> Nhà xuất bản </option>
                                <?php
                                
                                foreach ($allnxb as $item) {
                                    extract($item);
                                    if($id==$id_nxb){
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