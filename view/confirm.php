<div class="checkout-confirm">
    
            <div class="checkout-confirm_box">
                <div class="icon-confirm">
                    <img src="../view/layout/assets/images/tt.png" alt="">
                </div>
                <h1>Đơn hàng của bạn đã được đặt thành công !</h1>
                <p>Mã đơn hàng: <?=$_GET['id_bill']?></p>
                <p>Cảm ơn bạn đã tin tưởng chúng tôi <br> Đơn hàng sẽ được bàn giao sớm nhất <br>
                    Xem chi tiết đơn hàng tại mục
                    
                    <?php if(!empty($_SESSION['user'])){ ?>
                        <a class="fw-600" href="index.php?pg=list&id_bill=<?php echo $_GET['id_bill']; ?>">TRA CỨU !</a>
                    <?php }else{ ?>
                        <a class="fw-600" href="index.php?pg=list-1&id_bill=<?php echo $_GET['id_bill']; ?>">TRA CỨU !</a></p>
                        <?php } ?>
                    
                <div class="btn-return_home">
                    <a href="index.php">
                    <button>Trang chủ</button>
                    </a>
                </div>
            </div>
        </div>