
<?php echo $succeed_signUp?> <br>
<div class="container">
    <div style="display:flex;align-item:center;justify-content:center;">
        <form class="nhap-code bg-white" style="padding: 50px 100px; margin: 150px 0 200px 0; border-radius: 8px;" action="index.php?pg=enter_code" method="post">
        <label class="nhap-code_title" for="ma_xac_nhan">Mã xác nhận</label><?php echo $failure_signUp ?> <br>
        <input class="nhap-code_imput" type="text" id="ma_xac_nhan" name="code_confirm" placeholder="Nhập mã xác nhận">
        <input class="nhap-code_btn btn-main" type="submit" name="enter_code" value="Xác nhận">
    </form>
    </div>
    
</div>
