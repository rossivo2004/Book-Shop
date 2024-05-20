

<form action="index.php?pg=updateblog" method="post" enctype="multipart/form-data" style="width: 800px; margin: 0 auto; margin-top: 30px;">
    <div class="mb-4">
        <label for="product_name" class="form-label">Tiêu đề blog</label>
        <input type="text" name="name" placeholder="Nhập tiêu đề" value="<?php echo $infor_blog[0]['tenblog'] ?>" class="form-control" id="product_name" />
    </div>
    <div class="mb-4">
                                    <label for="product_slug" class="form-label">Mô tả</label>
                                    <input type="text" name="mota" placeholder="Nhập mô tả" value="<?php echo $infor_blog[0]['mota'] ?>" class="form-control" id="product_slug" />
                                </div>
    <div class="mb-4">
        <label class="form-label">Nội dung</label>
        <textarea placeholder="Nhập nội dung " name="noidung"  class="form-control"><?php echo $infor_blog[0]['noidung'] ?></textarea>
    </div>
    <div class="mb-4">
        <label class="form-label">Chọn ảnh</label> <br>
        <img src="./view/layout/assets/images/<?php echo $infor_blog[0]['img'] ?>" alt=""> 
        <br>
        <img src="assets/imgs/theme/upload.svg" alt="">
        <input class="form-control" name="img" type="file">
    </div>
    <br>
    <div class="d-grid">
    <input type="hidden" name="id" value="<?php echo $infor_blog[0]['id'] ?>">
        <button type="submit" name="fixblog" class="btn btn-primary mb-4">Sửa blog</button>
    </div>
</form>
