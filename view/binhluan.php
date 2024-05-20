<?php
session_start();
include "../model/pdo.php";
include "../model/binhluansp.php";



if(isset($_GET['idsanpham'])){
    // echo $_GET['idsanpham'];
    $idsanpham=$_GET['idsanpham'];
}
if(isset($_POST['guidanhgia'])){
    $idsanpham=$_POST['idsanpham'];
    $noidung=$_POST['noidungbl'];
    $ngaybl=date(' d/m/Y');
  
    $iduser=$_SESSION['user']['id'];
    
    binhluan_insert($idsanpham, $iduser, $noidung, $ngaybl );
}

$danhsachbl=binhluan_select_by_id($idsanpham);
$html_dsbl="";
foreach ($danhsachbl as $item) {
    extract($item); 
    $html_dsbl.='<div style="">
    <img src="./view/layout/assets/images/'.$img.'" width="50px" height="50px" style="float: left; position: relative;
    top: 35px;
    left: 20px;" alt="">
    <div style="border: 2px solid #2b648b;
                border-radius: 8px;
                position: relative;
                padding: 15px 15px 0;
                margin-bottom: 10px;">
            <strong style="font-size: 20px;
                        
                            line-height: 31px;
                            color: #2b648b;
                            margin-left:35px;">'.$username.'</strong> - <span style="font-size: 17px;
                            color: #777;
                            font-weight: bold;
                            line-height: 31px;" >'.$ngaybl.'</span>
        <div class="description">
            <p style="font-size: 20px;
                    color: #333333;
                    line-height: 28px;
                    margin-left:70px;" >'.$noidung.'</p>
        </div>
    </div>
</div>';
//     $html_dsbl.='
//     <ul>
//                                             <li>
//                                             <div class="product-comment mb-20">
//                                             <img src="/view/layout/assets/images/'.$img.'" alt="">
//                                             <div class="product-comment-content">
//                                                 <p class="meta">
//                                                     <strong>'.$username.'</strong> - <span>'.$ngaybl.'</span>
//                                                 <div class="description">
//                                                     <p>'.$noidung.'</p>
//                                                 </div>
//                                             </div>
//                                         </div>
//                                             </li>
//                                         </ul>
    
//   ';

    
}
?>
<div class="danhsachbl">
    <?=$html_dsbl?>
    <?php if(isset($_GET['idproduct'])){
    // echo $_GET['idsanpham'];
    echo '-----------------------------------------------------------------------------------' ;
}?>
</div>
<?php
if(isset($_SESSION['user'])&&(count($_SESSION['user'])>0)){


?>


<div class="review-form-wrapper">
    <div class="review-form">
        <span >Thêm một bài đánh giá </span>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <p class="comment-notes">
            </p>
            <div class="input-element">
                <div class="comment-form-comment">
                    <input type="hidden" name="idsanpham" value="<?php echo $idsanpham?>">
                    <textarea style="border: none;" name="noidungbl" cols="100" rows="8"></textarea> 
                </div><br>
                <div class="comment-submit">
                    <button type="submit" style="background-color: #febb0a;
                                                color: #ffffff;
                                                font-size: 16px;
                                                line-height: 12px;
                                                height: 45px;
                                                font-weight: 600;
                                                padding: 15px 30px;
                                                text-transform: uppercase;
                                                border-radius: 0px;
                                                position: relative;
                                                -webkit-transition: all 0.3s ease 0s;
                                                -o-transition: all 0.3s ease 0s;
                                                transition: all 0.3s ease 0s;
                                                border: none;" 
                                                name="guidanhgia" class="form-button">gửi</button>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
}else{
    $_SESSION['trang']="single-product";
    $_SESSION['idpro']=$_GET['idsanpham'];
    echo 'Bạn phải <a href="index.php?pg=login" target="_parent" style="color:#febb0a; text-decoration: none;" > đăng nhập </a> để đánh giá ! <br>
    <br>
    <br>';
}
?>
