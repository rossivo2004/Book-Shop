<?php
if(is_array($loai)&&(count($loai)>0)){
    extract($loai);
    $idloaichitiet=$id;
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
                <h2 class="content-title">Sửa danh mục</h2>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Danh mục</h4>
                </div>
                <div class="card-body">
                    <form action="index.php?page=fixloaisach" method="post" enctype="multipart/form-data">
                        <div class="mb-4">
                            <label for="product_name" class="form-label">Tên danh mục</label>
                            <input type="text" name="name" placeholder="Nhập ở đây" class="form-control" value="<?=$name?>"
                                id="product_name">
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Mô tả danh mục</label>
                            <textarea name="mota" placeholder="Nhập ở đây"  value="<?=$mota?>" class="form-control" rows="4"><?=$mota?></textarea>
                        </div>
                        
                        <br>
                        <div>
                            <button class="btn btn-light rounded font-sm mr-5 text-body hover-up">Hủy</button>
                            <input type="hidden" name="id" value="<?=$idloaichitiet?>">
                            <button type="submit" name="fixcatalog" class="btn btn-md rounded font-sm hover-up">Sửa</button>
                        </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Ảnh danh mục</h4> <?=$img?>
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