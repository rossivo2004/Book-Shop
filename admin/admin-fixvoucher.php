<?php
if(is_array($voucher)&&(count($voucher)>0)){
    extract($voucher);
    $idvoucher=$id;
}
?>
<section class="content-main">
    <div class="row">
        <div class="col-9">
            <div class="content-header">
                <h2 class="content-title">Sửa Voucher</h2>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Voucher</h4>
                </div>
                <div class="card-body">
                    <form action="index.php?page=fixvc" method="post">
                        <div class="mb-4">
                            <label class="form-label">Số tiền giảm %</label>
                            <textarea name="sotien" placeholder="Nhập ở đây"   class="form-control" rows="4"><?=$sotien_giam?></textarea>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Điểm tích lũy</label>
                            <textarea name="diemtl" placeholder="Nhập ở đây" class="form-control" rows="4"><?=$diemtichluy_can?> </textarea>
                        </div>
                        <br>
                        <div>
                            <button class="btn btn-light rounded font-sm mr-5 text-body hover-up">Hủy</button>
                            <input type="hidden" name="id" value="<?=$idvoucher?>">
                            <button type="submit" name="fixvoucher" class="btn btn-md rounded font-sm hover-up">Sửa</button>
                        </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</section>