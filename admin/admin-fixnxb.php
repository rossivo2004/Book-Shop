<?php
if(is_array($nxb)&&(count($nxb)>0)){
    extract($nxb);
    $idnxb=$id;
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
                <h2 class="content-title">Sửa nhà xuất bản</h2>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Nhà xuất bản</h4>
                </div>
                <div class="card-body">
                    <form action="index.php?page=fixnhaxuatban" method="post" enctype="multipart/form-data">
                        <div class="mb-4">
                            <label for="product_name" class="form-label">Tên nhà xuất bản</label>
                            <input type="text" name="name" placeholder="Nhập ở đây" class="form-control" value="<?=$name?>"
                                id="product_name">
                        </div>
                        <br>
                        <div>
                            <button class="btn btn-light rounded font-sm mr-5 text-body hover-up">Hủy</button>
                            <input type="hidden" name="id" value="<?=$idnxb?>">
                            <button type="submit" name="fixnhaxb" class="btn btn-md rounded font-sm hover-up">Sửa</button>
                        </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Ảnh nhà xuất bản</h4> <?=$img?>
                </div>
                <div class="card-body">
                    <div class="input-upload">
                        <img src="assets/imgs/theme/upload.svg" alt="">
                        <input class="form-control" name="img" type="file">
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    </form>
</section>