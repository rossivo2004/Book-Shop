<?php
session_start();
ob_start();
include_once('../model/pdo.php');
include_once('../model/Gio-hang.php');
include_once('../model/sanpham.php');
include_once('../model/danhmuc.php');
include_once('../model/tacgia.php');
include_once('../model/blog.php');
include_once('../model/donhang.php');
include_once('../model/user.php');
include_once('../view/header.php');
include_once('../model/voucher.php');
include_once('../model/global.php');
include_once('../view/mail.php');

$allsach = sach_select_all(10);
$alldanhmucsach = danhmuc_select_all();
$sachtop1 = sach_select_top1(1);
$sachgiamgia = sach_select_giamgia(20);
$sachmoi = sach_select_moi(20);
// chi tiết bill
$chitietbill = chitiet_bill(20);
if (!isset($_SESSION['user']) && !isset($_SESSION['giohangsach'])) {
    $_SESSION['user'] =  [];
    $_SESSION['giohangsach'] = [];
}
if(!empty($_SESSION['user'])){
    $diem_TL = user_select_diem($_SESSION['user']['id']);
    $_SESSION['user']['diem_tich_luy']= $diem_TL['diem_tich_luy'];

}

if (!isset($_GET['pg'])) {
    include_once('../view/home.php');
} else {
    switch ($_GET['pg']) {
        case 'sanpham':
            // show danh mục tác giả và sách
            // show danh mục tác giả và sách
            $alldanhmucsach = danhmuc_select_all();
            $alltacgia = tacgia_select_all();

            // lấy sản phẩm theo tác giả và sách
            if (!isset($_GET['idloaisach'])) {
                $idloai = '';
            } else {
                $idloai = $_GET['idloaisach'];
            }

            if (!isset($_GET['idtacgia'])) {
                $idtg = '';
            } else {
                $idtg = $_GET['idtacgia'];
            }

            // tìm kiếm sp theo tên
            if (isset($_GET['tukhoa'])) {
                $tukhoa = $_GET["tukhoa"];
            } else {
                $tukhoa = "";
            }

            if (!isset($_GET['trang'])) {
                $result_per_page = 1;
            } else {
                $result_per_page = $_GET['trang'];
            }
            $trang = ($result_per_page - 1) * 12;
            $sachsp = sach_select($tukhoa, $idloai, $idtg, 12, $trang);
            $number_of_product = count(sach_select_all_product($tukhoa, $idloai, $idtg));

            $number_of_page = ceil($number_of_product / 12);

            include_once('../view/sanpham.php');
            break;

        case 'timkiem':
            if (isset($_GET['timkiem'])) {
                $tukhoa = $_GET["tukhoa"];
            } else {
                $tukhoa = "";
            }
            header('location: index.php?pg=sanpham&tukhoa = ' . $tukhoa . '');
            break;
        case 'change_voucher_view':

            $voucher_all = voucher_select_all();
            include_once('../view/change_voucher.php');
            break;
        case 'change_voucher':


            if ($_SESSION['user']['diem_tich_luy'] >= $_GET['diem']) {
                $update_diem_tich_luy =  $_SESSION['user']['diem_tich_luy'] - $_GET['diem'];
                update_diem_tich_luy($_SESSION['user']['id'], $update_diem_tich_luy);
                voucher_detail_insert($_SESSION['user']['id'], $_GET['id']);
                $_SESSION['user']['diem_tich_luy'] =  $update_diem_tich_luy;
                header('location: index.php?pg=change_voucher_view&succeed=1');
            } else {
                header('location: index.php?pg=change_voucher_view&failure=1');
            }
            break;
        case 'single-product':
            // lấy theo id sách chi tiết
            if (isset($_GET['idproduct'])) {
                $id = $_GET['idproduct'];
                $sachchitiet = sach_select_by_id($id);

                // lấy sách liên quan đến sách chi tiết
                $idloaisach = $sachchitiet['idloaisach'];
                $sachlienquan = sach_select_lienquan($idloaisach, $id, 4);
                $theloai = get_name_dm($idloaisach);
                $tacgia = get_name_tacgia($sachchitiet['idtacgia']);
                
                tang_view_sp($id);

                include_once('../view/single-product.php');
            }

            break;

        case 'sp1':
            include_once('../view/sanpham1.php');
            break;

            function user_delete_bill($id){
                $sql = "DELETE FROM bill WHERE iduser=?";
                  return  pdo_execute($sql, $id);
            }
            
            function user_delete_binhluan($id){
                $sql = "DELETE FROM binhluan WHERE iduser=?";
                  return  pdo_execute($sql, $id);
            }
            
            function user_delete_blog($id){
                $sql = "DELETE FROM blog WHERE id_user=?";
                  return  pdo_execute($sql, $id);
            }
            
            function user_delete_cart($id){
                $sql = "DELETE FROM cart WHERE id_user=?";
                  return  pdo_execute($sql, $id);
            }
            
            function user_delete_voucher_detail($id){
                $sql = "DELETE FROM voucher_detail WHERE id_user=?";
                  return  pdo_execute($sql, $id);
            }


        case 'login':
            include_once('../view/login.php');
            break;

        case 'login1':
            include_once('../view/logincheck.php');
            break;

        case 'logincheck':
            if (isset($_POST['dangnhapcheck']) && ($_POST['dangnhapcheck'])) {
                $usernamecheck = $_POST['username'];
                $passwordcheck = $_POST['password'];
                // check xem đúng thông tin không ?
                $check1 = check_acccheck($usernamecheck, $passwordcheck);
                if (is_array($check1) && (count($check1) > 0)) {
                    $_SESSION['user'] = $check1;
                    header('location: index.php?pg=thanhtoan');
                } else {
                    $tb = '<div class="not-account" style="color: red;">Tài khoản hoặc mật khẩu không đúng !</div>';
                    $_SESSION['tb'] = $tb;
                    header('location: index.php?pg=login');
                }
            }
            include_once('../view/login.php');
            break;


        case 'updateacc':
            if (isset($_POST['capnhat'])) {
                $username = $_POST['username'];
                $dienthoai = $_POST['dienthoai'];
                $email = $_POST['email'];
                $diachi = $_POST['diachi'];
                $id = $_POST['id'];
                // cập nhật thông tin mới
                user_update($username, $diachi, $email, $dienthoai, $id);

            }
            include_once('../view/myaccount-up.php');  
            break;

            case 'updatepass':
                if (isset($_POST['changett'])) {
                    $mkmoi = $_POST['newpassword'];
                    $mkcu = $_POST['oldpassword'];
                    $id = $_POST['id'];
                    
                    // Kiểm tra mật khẩu cũ
                    $checkpass = checkpass($mkcu, $id);
                    
                    if (is_array($checkpass) && (count($checkpass) > 0)) {
                        // Cập nhật mật khẩu mới
                        pass_update($mkmoi, $id);
                        header('location: index.php?pg=updatepass');
                    } else {
                        $tb = '<div class="not-account" style="color: red;">Mật khẩu không đúng!</div>';
                        $_SESSION['tbcheckmk'] = $tb;
                        header('location: index.php?pg=myaccount');
                    }
                }
                include_once('../view/myaccount-uppass.php');
                break;
            case 'fixblog':
                if(isset($_GET['idblog'])&&($_GET['idblog']>0)){
                    $idblog=$_GET['idblog'];
                    $infor_blog = get_blog_user($idblog);
                }
                include_once('../view/blog-detail-user.php');
                break;

                case 'delblog' :
                    if (isset($_GET['idblog']) && ($_GET['idblog'] > 0)) {
                        $id = $_GET['idblog'];
                        $img = IMG_PATH_ADMIN . blog_select_img($id);
                        if (is_file($img)) {
                            unlink($img);
                        }
                        try {
                            blog_delete($id);
                        } catch (\Throwable $th) {
                            echo '<div class="text-align:center>" không được xóa </div>';
                        }
        
                    }
                    header('location: index.php?pg=myaccount');
                    break;

                    case 'updateblog' :
                        if(isset($_POST['fixblog'])){
                            $name=$_POST['name'];
                            $mota=$_POST['mota'];
                            $noidung=$_POST['noidung'];
                            $img = $_FILES['img']['name'];
                            $id=$_POST['id'];
            
                            if ($img != "") {
                                $target_file = IMG_PATH_ADMIN . $img;
                                move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                            } else {
                                $img = "";
                            }
            
                            blog_update($name, $mota ,$noidung, $img, $id);
                        }
                        break;
                        case 'myaccount':
                            if (isset($_SESSION['user']) && (count($_SESSION['user']) > 0)) {
                                $iduser=$_SESSION['user']['id'];
                                $userbill=check_user_bill($iduser);
                                $userdetail=check_user($iduser);
                                $all_blog_iduser=binhluan_admin_all_blog_by_iduser($iduser);
                                $all_voucher_iduser=voucher_all_by_iduser($iduser);
                                include_once '../view/myaccount.php';
                            }
                            break;
                case 'view-detail' :
                    if(isset($_GET['iduserbill'])&&($_GET['iduserbill']>0)){
                        $iduserbill=$_GET['iduserbill'];
                        $viewdetailuserbill=search_product_bill_by_user($iduserbill);
                    }
                    include_once('../view/list-chitiet-user.php');
                    break;

        case 'thoat':
            include_once('../view/logout.php');
            break;
            case 'enter_code':
                $succeed_signUp = $failure_signUp = '';
                $ok = 1;
                if(isset($_SESSION['code_signUp'])){
                    if(isset($_POST['enter_code'])){
                        if($_POST['code_confirm'] != $_SESSION['code_signUp'] ){
                            $ok = 0;
                            $failure_signUp = 'Mã không đúng';
                        }
                        if($ok == 1){
                            user_insert( $_SESSION['username_tmp'],  $_SESSION['pass_tmp']  ,  $_SESSION['email_tmp'] );
                            unset( $_SESSION['email_tmp']);
                            unset( $_SESSION['username_tmp']);
                            unset( $_SESSION['pass_tmp']);
                            unset( $_SESSION['code_signUp']);

                            $succeed_signUp ='<div class="dangki-thanhcong">Đăng kí thành công</div>';
                            header('location: index.php?pg=login&succeed_signUp='.$succeed_signUp.'');
                        }
                        
                        }
                  
                    include_once('../view/nhap_code.php');
                }else{
                   

                    // header('location: index.php');

                }
                break;
            case 'forgot_password':
                if(isset($_POST['Enter_email'])){
                    if(count(check_email_exit($_POST['Email_confirm']) )== 1 ){
                $code_random = rand(1000, 3000);
                $content = '<div>Đổi mật khẩu nhấp vào đây :<a href="http://localhost/DA1-08-12-2023/controller/index.php?pg=change_pass_form&code='.$code_random.'">Nhấp vào đây</a> </div>';
                $_SESSION['code_change_pass'] = $code_random;
                $_SESSION['Email_change_pass'] = $_POST['Email_confirm'];

                send_mail('Doi mat khau',$_POST['Email_confirm'] ,$content);
                        echo'<div style="text-align: center; width: 100%; padding-top: 50px">Chúng tôi đã gởi thông tin thay đổi mật khẩu vào Email của bạn.<br>Vui lòng kiểm tra Email</div>';
                    }else{
                        echo'<div style="text-align: center; width: 100%; padding-top: 50px">Chúng tôi đã gởi thông tin thay đổi mật khẩu vào Email của bạn.<br>Vui lòng kiểm tra Email</div>';
                    }
                    
                }
                
                include_once('../view/email_forgot_pass.php');
                break;
        
                case 'change_pass_form':
                    $pass= $confirm_pass = $err_pass_confirm = $succeed_change= '';
                    // nếu nhận được submit cập nhật thì 
                    if(isset($_POST['enter_change_password'])){
                      if($_POST['new_password'] == $_POST['confirm_new_password']){
                          pass_update_by_email($_POST['new_password'],  $_SESSION['Email_change_pass']);
                          //thay đổi password thành công
                          $succeed_change = 'Thành công';
                          header('location: index.php?pg=change_pass_form&code='. $_SESSION['code_change_pass'].'&succeed='.$succeed_change.'');
                          unset($_SESSION['Email_change_pass']);
                          unset( $_SESSION['code_change_pass']);
                      }else{
                        $err_pass_confirm= 'Mật khẩu xác nhận không đúng !';
                      header('location: index.php?pg=change_pass_form&code='. $_SESSION['code_change_pass'].'&failure='.$err_pass_confirm.'');
                          
      
                      }
                    }else{
                      if(isset( $_SESSION['code_change_pass'] ) && $_GET['code'] ==  $_SESSION['code_change_pass']){
                          
                          include_once('../view/Change_pass_form.php');
                      }else if(isset($_GET['succeed'])){
                        include_once('../view/Change_pass_form.php');
                         
                        
                        
      
                      }else{
                        header('location: index.php');
                      }
                    }
                    if(isset($_POST['enter_change_password'])){
                      echo 'oh';
                    }
                     
      
                      break;

        case 'dangky':
            $ok = 1;
            $pass= $confirm_pass = $err_ = $succeed_change= '';
            if (isset($_POST['dangky'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                // thực hiện thêm người đăng ký
                // echo ($password);

                
                if(check_email($email)){
                    $ok = 0;
                    echo '<div style="text-align:center; margin: 5px;color: red;">Email đăng kí đã tồn tại ! Vui lòng chọn email khác</div>';
                }
                 if(check_username($username)){
                    $ok = 0;
                    echo '<div style="text-align:center; margin: 5px;color: red;">Tên đăng nhập đã tồn tại ! Vui lòng chọn tên khác</div>';
                }
                if( $ok == 1){
                    $code_random = rand(1000, 3000);
                    $content = '<html>
                    <head>
                        <title>Chào mừng bạn đến với trang web</title>
                    </head>
                    <body>
                        <h2>Xác nhận đăng ký</h2>
                        <p>Cảm ơn bạn đã đăng ký tài khoản. Đây là mã xác nhận của bạn: <b>' . $code_random . '</b></p>
                        <p>Xin vui lòng nhập mã này để hoàn tất quá trình đăng ký.</p>
                    </body>
                </html>
                    ';
                    send_mail('CODE',$email ,$content);
                    
                    $_SESSION['code_signUp'] = $code_random;
                    $_SESSION['email_tmp'] =  $email;
                    $_SESSION['pass_tmp'] =  $password;
                    $_SESSION['username_tmp'] =  $username;
                    header('location: index.php?pg=enter_code');
                }
               

            }
            include_once('../view/login.php');
            break;

        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                // check xem đúng thông tin không ?
                $check = checkuser($username, $password);


                if (is_array($check) && (count($check) > 0)) {
                    $_SESSION['user'] = $check;
                    if (!empty($_SESSION['giohangsach'])) {

                        // foreach ($_SESSION['giohangsach'] as $item) {
                        //     if (cart_sp_exist($item['idpro'])) {
                        //         update_cart_soluong($item['soluong'], $item['idpro']);
                        //     } else {
                        //         cart_insert($_SESSION['user']['id'], $item['idpro'], $item['soluong']);
                        //     }
                        // }
                        foreach ($_SESSION['giohangsach'] as $item) {
                            if (!cart_sp_exist($item['idpro'], $_SESSION['user']['id'])) {
                                cart_insert($_SESSION['user']['id'], $item['idpro'], $item['soluong']);
                            }
                        }
                        unset($_SESSION['giohangsach']);
                    }
                    header('location: index.php');
                    if ($_SESSION['trang'] == "productdetail") {
                        header('location: index.php?pg=single-product&idproduct=' . $_SESSION['idsanpham'] . '#binhluan');
                    } else {
                        if ($_SESSION['user']['role'] == 1) {
                            header('location: ../admin/index.php'); 
                        } else {
                            header('location: index.php'); 
                        }
                    }
                } else {
                    $tb = '<div class="not-account" style="color: red;">Tài khoản hoặc mật khẩu không đúng !</div>';
                    $_SESSION['tb'] = $tb;
                    header('location: index.php?pg=login');
                }
            }
            break;

            


        case 'blog':
            $erro_title = $erro_content = $erro_file = $erro_decribe = $success = $falure = '';
            $ok = 1;


            $all_blog = get_all_blog();
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                if (empty($_POST['blogTitle'])) {
                    $erro_title =  '<span class="Erro">Bạn phải nhập tiêu đề blog !</span>';
                    $ok = 0;
                } else {
                    $tieude = $_POST['blogTitle'];
                }
                if (empty($_POST['blogDescription'])) {
                    $erro_decribe = '<span class="Erro">Bạn phải nhập mô tả blog !</span>';
                    $ok = 0;
                } else {
                    $decribe = $_POST['blogDescription'];
                }
                if (empty($_POST['blogContent'])) {
                    $erro_content = '<span class="Erro">Bạn phải nhập nội dung blog !</span> ';
                    $ok = 0;
                } else {
                    $content = $_POST['blogContent'];
                }
                if ($_FILES['fileInput']['size'] == 0) {
                    $erro_file = '<span class="Erro">Bạn phải upload ảnh</span>';
                    $ok = 0;
                }
                if ($ok == 1) {
                    try {
                        date_default_timezone_set('Asia/Ho_Chi_Minh');
                        $date = date('Y/m/d H:i:s');

                        $img = basename($_FILES['fileInput']['name']);
                        $path = __DIR__ . "././../view/layout/assets/images/";
                        $target_file = $path . $img;
                        move_uploaded_file($_FILES["fileInput"]["tmp_name"], $target_file);


                        blog_insert($_SESSION['user']['id'], $tieude, $date, $decribe, $content, $img);

                        // hang_hoa_insert($loai_hh,$name, $img, $date,$decribe, $price,$mount);

                        $success = '<span class="success">Thêm thành công</span><br>';
                    } catch (PDOException $e) {
                        $falure = '<span class="Erro">Thêm Thất bại</span><br>';
                    }
                }
            }
            include_once('../view/blog.php');

            break;

        case 'blog_detail';
            $all_blog = get_all_blog();
            $infor_blog = get_blog($_GET['id']);
            include_once('../view/blog_detail.php');

            break;

        case 'cart':
            // 
            $tongall = 0;
            $so_tien_giam = 0;
            if (empty($_SESSION['user'])) {
                if (empty($_SESSION['giohangsach'])) {
                    $ship = 0;
                } else {
                    $ship = 30000;
                }
            } else {
                $user_voucher = voucher_select_by_id_user($_SESSION['user']['id']);
                if (count(cart_select_all($_SESSION['user']['id'])) == 0) {
                    $ship = 0;
                } else {
                    $ship = 30000;
                }
            }






            // if(isset($_GET['voucher'])&&($_GET['voucher']==1)){
            //     $tongdonhang=$_POST['tongdonhang'];
            //     $mavoucher=$_POST['mavoucher'];
            //     // so sánh với db để lấy mã voucher
            //     $giatrivoucher=number_format(10000);
            //     $thanhtoan=$tongdonhang-$giatrivoucher; 
            // } 
            include_once('../view/cart.php');
            break;

        case 'addcart':

            if (isset($_POST['addcart']) && ($_POST['addcart'])) {

                $idpro = $_POST['idpro'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $price1 = $_POST['price1'];
                $soluong = $_POST['soluong'];
                $thanhtien = (int)$soluong * (int)$price1;
                $page_show = $_POST['page'];
                $i = 0;
                $fg = 0;
                // nếu chưa đăng nhập thì lưu vào trong session còn đã đăng nhập thì lưu vào trong database
                if (empty($_SESSION['user'])) {

                    $sp = ["idpro" => $idpro, "name" => $name, "img" => $img, "price1" => $price1, "soluong" => $soluong, "thanhtien" => $thanhtien];

                    // kiểm tra xem trong giỏ hàng có sp hay không nếu có thì duyệt xem sản phâm có trong giỏ hàng hay chưa nếu có thì tăng số lượng không thì thôi còn nếu không có sản phẩm nào thì cứ cho vào session

                    if (!empty($_SESSION['giohangsach'])) {
                        foreach ($_SESSION['giohangsach'] as $item) {
                            if ($item['idpro'] == $idpro) {
                                $soluong += $item['soluong'];
                                $fg = 1;   // biến này cho biết đã tìm thấy kq khớp 
                                $_SESSION['giohangsach'][$i]['soluong'] = $soluong;
                                break;
                            }
                            $i++;
                        }
                    }

                    if ($fg == 0) {
                        $_SESSION['giohangsach'][] = $sp;
                    }
                } else {
                    if (cart_sp_exist($idpro, $_SESSION['user']['id'])) {
                        update_cart_soluong($soluong, $idpro, $_SESSION['user']['id']);
                    } else {
                        cart_insert($_SESSION['user']['id'], $idpro, $soluong);
                    }
                }
            }

            // lấy thông tin từ form rồi thêm vào mảng
            // if(isset($_POST['addcart'])&&($_POST['addcart'])){
            //     $idpro=$_POST['idpro'];
            //     $name=$_POST['name'];
            //     $img=$_POST['img'];
            //     $price1=$_POST['price1'];
            //     $soluong=$_POST['soluong'];
            //     $thanhtien=(int)$soluong*(int)$price1;
            //     $i=0;
            //     $fg=0;
            //     $sp=["idpro"=>$idpro,"name"=>$name, "img"=>$img, "price1"=>$price1, "soluong"=>$soluong, "thanhtien"=>$thanhtien];
            // // kiểm tra giỏ hàng , trong vòng lặp nếu trùng id sp với nhau thì cộng số lượng vào
            // if(isset($_SESSION['giohangsach'])&&(count($_SESSION['giohangsach'])>0)){
            //     foreach ($_SESSION['giohangsach'] as $sp) {
            //         if($sp['idpro']==$idpro){
            //             $soluong+=$sp['soluong'];
            //             $fg=1;   // biến này cho biết đã tìm thấy kq khớp 
            //             $_SESSION['giohangsach'][$i]['soluong']=$soluong;
            //             break;
            //         }
            //         $i++;
            //     }
            // }
            // // kiểm tra nêu không trùng sản phẩm thì thêm sản phẩm mới
            // if($fg==0){
            //     $sp=["idpro"=>$idpro,"name"=>$name, "img"=>$img, "price1"=>$price1, "soluong"=>$soluong, "thanhtien"=>$thanhtien];
            //     $_SESSION['giohangsach'][]=$sp;
            // }


            // header('location: index.php?pg=cart');

            // include_once('cart.php');
            // }
            // if($page_show == 1 ){
            //     header('location: index.php');

            // }else{
            //     if($page_show  == 'single-product'){
            //         header('location: index.php?pg=cart');
            //     }else{
            //     header('location: index.php?pg='.$page_show);

            //     }

            // }
            header('location: index.php?pg=cart');
            break;

        case 'delcart':

            if (empty($_SESSION['user'])) {
                if (isset($_GET['position'])) {
                    array_splice($_SESSION['giohangsach'], $_GET['position'], 1);
                }
            } else {
                if (isset($_GET['idpro'])) {
                    cart_delete($_GET['idpro']);
                }
            }

            header('location: index.php?pg=cart');
            break;

        case 'delallcart':

            if (empty($_SESSION['user'])) {
                if (isset($_SESSION['giohangsach']) && (count($_SESSION['giohangsach']) > 0)) {
                    unset($_SESSION['giohangsach']);
                    header('location: index.php?pg=cart');
                }
            } else {
                cart_delete_all();
                header('location: index.php?pg=cart');
            }

            break;

        case 'update_quality':

            if (empty($_SESSION['user'])) {
                if (isset($_POST['minus'])) {
                    $_SESSION['giohangsach'][$_POST['position']]['soluong'] = $_SESSION['giohangsach'][$_POST['position']]['soluong']  - 1;
                } else if (isset($_POST['plus'])) {
                    $_SESSION['giohangsach'][$_POST['position']]['soluong'] = $_SESSION['giohangsach'][$_POST['position']]['soluong']  + 1;
                }
            } else {
                // echo($_POST['idpro']);
                // echo($_SESSION['user']['id']);

                if (isset($_POST['minus'])) {
                    update_cart_soluong_minus($_POST['idpro'],  $_SESSION['user']['id']);
                } else if (isset($_POST['plus'])) {
                    update_cart_soluong_plus($_POST['idpro'], $_SESSION['user']['id']);
                }
                // update_cart_soluong_plus($soluong,$ma_hh, $id_user)
            }


            header('location: index.php?pg=cart');

            break;

        case 'checkout':
            //$_SESSION['user']['id']
            $hoten =  $email = $sdt = $diachi = $pttt = '';
            $tongcong = $tongall  = $voucher = 0;
            if (!empty($_SESSION['user'])) {
                if (!empty(check_user_bill($_SESSION['user']['id']))) {
                    $user_bought_bill =  (check_user_bill($_SESSION['user']['id']));

                    $hoten = $user_bought_bill[0]['nguoidat_ten'];
                    $email = $user_bought_bill[0]['nguoidat_email'];
                    $sdt = $user_bought_bill[0]['nguoidat_sdt'];
                    $diachi = $user_bought_bill[0]['nguoidat_diachi'];
                }
            }

            // tổng cộng tiền từ cart (database/session)
            if (!empty($_SESSION['user'])) {
                $total = get_tongdonhang_login($_SESSION['user']['id']);
            } else {
                foreach ($_SESSION['giohangsach'] as $item) {
                    extract($item);
                    $tongcong = $price1 * $soluong;
                    $tongall = $tongall + $tongcong;
                }
            }

            if(isset($_POST['id_voucher'])){
                $voucher = $_POST['id_voucher'];
                
            }
            //tính tổng tiền phải trả (có tính sale, ship,...)
            $tongall = $_POST['tongtien'];
            $so_tien_giam = $_POST['sotien_giam'];
            $ship = $_POST['ship'];
            $tongthanh_toan = $_POST['tongthanhtoan'];

            if (isset($_POST['donhangcheck']) && ($_POST['donhangcheck'])) {

                $hoten = $_POST['hoten'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];
                $diachi = $_POST['diachi'];
                $pttt = $_POST['pttt'];
                $ngaydh = date("Y-m-d");
                if (!empty($_SESSION['user'])) {
                    
                    bill_insert_login($_SESSION['user']['id'], $ngaydh,  $hoten, $email, $sdt, $diachi, $tongall, $ship, $voucher, $tongthanh_toan, $pttt);
                    $id_bill =  id_bill_login($_SESSION['user']['id']);
                    $cart_all = cart_select_all($_SESSION['user']['id']);
                    foreach ($cart_all as $item) {
                        extract($item);
                        bill_detail_insert($id_bill[0]['id'], $idpro, $soluong, $price1);
                        cart_delete_all();
                        
                    }
                   
                        status_voucher_update_inUse( $_SESSION['user']['id'], $voucher);
                   
                    
                    header('location: index.php?pg=confirm&id_bill=' . $id_bill[0]['id']);
                } else {
                    bill_insert_nologin($ngaydh,  $hoten, $email, $sdt, $diachi, $tongall, $ship, $voucher, $tongthanh_toan, $pttt);
                    $id_bill =  id_bill_nologin($sdt);
                    foreach ($_SESSION['giohangsach'] as $item) {
                        extract($item);
                        bill_detail_insert($id_bill[0]['id'], $idpro, $soluong, $price1);
                    }
                    unset($_SESSION['giohangsach']);
                    header('location: index.php?pg=confirm&id_bill=' . $id_bill[0]['id']);
                }
            }



            include_once '../view/checkout.php';
            break;

        case 'timkiem_bill':
            $bill_result = search_idbill($_POST['idbill']);
            // var_dump($bill_result);
            include_once('../view/list-chitiet.php');
            // if(isset($_POST['timkiem'])&&($_POST['timkiem'])){

            // }else{
            //     echo 'khong co';
            // }

            break;

        case 'detail_bill_show':
            $tongall = 0;
            $voucher_infor  = 0;
            $bill_show = bill_select_by_id($_GET['id_bill']);
            if($bill_show[0]['voucher'] != 0){
                $voucher_infor = voucher_select_by_id( $bill_show[0]['voucher']);
            }
           
            $detail_bill_result = search_product_detail_bill($_GET['id_bill']);
            include_once('../view/detail_bill.php');

            break;

        case 'cancel_bill':
            $voucher_bill = search_idbill($_GET['id_bill']);
            
            cancel_bill($voucher_bill[0]['id']);
            status_voucher_update_NotinUse($_SESSION['user']['id'], $voucher_bill[0]['voucher']);
            // status_voucer_update(0, $_SESSION['user']['id'], $voucher_bill[0]['voucher']);
            header('location: index.php?pg=list');
        break;
        case 'confirm':
            include_once('../view/confirm.php');
            break;

        case 'list':
            if (empty($_SESSION['user'])) {
                $bill_result = search_idbill($_GET['id_bill']);
            } else {
                $bill_result = select_all_bill_user_delivered($_SESSION['user']['id']);
            }

            // var_dump($bill_result);
            include_once('../view/list-chitiet.php');
            // include_once('list-chitiet.php');
            break;

        case 'list-1':
            if (empty($_SESSION['user'])) {
                include_once('../view/list-tracuudh.php');
            } else {
                header('location:index.php?pg=list');
            }

            break;

        case 'list-2':
            include_once('../view/list-chitietdh.php');
            break;

        case 'thanhtoan':
            include_once('../view/checkout1.php');
            break;

        default:
            include_once('../view/home.php');
            break;
    }
}


include_once('../view/footer.php');
