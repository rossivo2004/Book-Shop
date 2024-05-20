<?php
session_start();
if(isset($_SESSION['user']) && $_SESSION['user']['role'] == 1  ){

ob_start();
include_once('../model/pdo.php');
include_once('../model/sanpham.php');
include_once('../model/danhmuc.php');
include_once('../model/tacgia.php');
include_once('../model/global.php');
include_once('../model/donhang.php');
include_once('../model/user.php');
include_once('../model/thong-ke.php');
include_once('../model/binhluansp.php');
include_once('../model/voucher.php');
include_once('../model/blog.php');

include_once('../view/mail.php');



include_once('header.php');
$allblog = binhluan_admin_all_blog();
$allbinhluan = binhluan_admin_all();
$allsach = sach_select_all(100);
$alldanhmucsach = danhmuc_select_all();
$alltacgia = tacgia_select_all();
$allbill = chitiet_bill(200);
$alluser = user_select_all();
$allusernew = user_select_new(4);
$allnxb = nxb_select_all();
$tk_doanhthu = thongke_admin_doanhthu();
$tk_donhang = thongke_admin_bill();
$tk_sp = thongke_admin_sp();
$tk_dm = thongke_admin_dm();
$tk_tg = thongke_admin_tg();
$tk_nxb = thongke_admin_nxb();
$allvoucher=voucher_select_all();
if (!isset($_GET['page'])) {
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

    $trang = ($result_per_page - 1) * 4;
    $bill_new = show_pagination_select_withoutSeach('bill', $tukhoa,4, $trang);
    // var_dump($bill_new);
    // $sachsp = sach_select($tukhoa, $idloai, $idtg, 12, $trang);
    $number_of_product = count(select_all_bill($tukhoa));

    $number_of_page = ceil($number_of_product / 4);

    include_once('home.php');
} else {
    switch ($_GET['page']) {
        case 'product':
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
            $trang = ($result_per_page - 1) * 9;
            $sachsp = sach_select($tukhoa, $idloai, $idtg, 9, $trang);
            $number_of_product = count(sach_select_all_product($tukhoa, $idloai, $idtg));

            $number_of_page = ceil($number_of_product / 9);
            include_once('admin-product.php');
            break;

        case 'addsp':
            include_once('admin-addproduct.php');
            break;

        case 'addproduct':
            if (isset($_POST['addproduct'])) {
                $name = $_POST['name'];
                $mota = $_POST['mota'];
                $giagoc = $_POST['price1'];
                $giakhuyenmai = $_POST['price2'];
                $iddm = $_POST['idloaisach'];
                $idtg = $_POST['tacgia'];
                $idspmoi = $_POST['spmoi'];
                $idnxb = $_POST['nhaxuatban'];
                $img = $_FILES['img']['name'];
                sanpham_insert($iddm, $name, $img, $giagoc,$idspmoi, $giakhuyenmai, $mota, $idtg, $idnxb);

                $target_file = IMG_PATH_ADMIN . $img;
                move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);

            }
            header('location: index.php?page=product');
            break;

            case 'delaccount':
                if (isset($_GET['idacc']) && ($_GET['idacc'] > 0)) {
                    $id = $_GET['idacc'];
                    $img = IMG_PATH_ADMIN . user_select_img($id);
                    if (is_file($img)) {
                        unlink($img);
                    }
                    try {
                        user_delete($id);
                        user_delete_bill($id);
                        user_delete_binhluan($id);
                        user_delete_blog($id);
                        user_delete_cart($id);
                        user_delete_voucher_detail($id);
                    } catch (\Throwable $th) {
                        echo '<div class="text-align:center>" không được xóa </div>';
                    }
    
                }
                header('location: index.php?page=account');
                break;

        case 'fixproduct':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $sp = sach_chitiet($id);
                // var_dump($sp['id_nxb'] );
            }
            include_once('admin-fixproduct.php');
            break;

        case 'fixsp':
            if (isset($_POST['fixproduct'])) {
                $name = $_POST['name'];
                $mota = $_POST['mota'];
                $giagoc = $_POST['price1'];
                $giakhuyenmai = $_POST['giamgia'];
                $iddm = $_POST['idloaisach'];
                $idnxb = $_POST['nhaxuatban'];
                $idspmoi = $_POST['spmoi'];
                $id = $_POST['id'];
                $idtg = $_POST['tacgia'];
                $img = $_FILES['img']['name'];

                if ($img != "") {
                    $target_file = IMG_PATH_ADMIN . $img;
                    move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                } else {
                    $img = "";
                }


                sanpham_update($iddm, $name, $img, $giagoc,$idspmoi, $giakhuyenmai, $mota, $idtg, $idnxb, $id);

            }
            header('location: index.php?page=product');
            break;

        case 'delproduct':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $img = IMG_PATH_ADMIN . sach_select_img($id);
                if (is_file($img)) {
                    unlink($img);
                }
                try {
                    sanpham_delete($id);
                } catch (\Throwable $th) {
                    echo '<div class="text-align:center>" không được xóa </div>';
                }

            }
            header('location: index.php?page=product');
            break;
        // thêm sửa xóa sp ở trên 

        // <----------------------------------------------------------------------->

        // thêm sửa xóa danh mục

        case 'catalog':

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
            
                $trang = ($result_per_page - 1) * 4;
                
                $catalog_show = show_pagination_select('loaisach', $tukhoa,4, $trang);
                // var_dump($catalog_show);
                // $sachsp = sach_select($tukhoa, $idloai, $idtg, 12, $trang);
                $number_of_product = count(select_all_loaisach_search($tukhoa));
            
                $number_of_page = ceil($number_of_product / 4);
            include_once('admin-catalog.php');
            break;

        case 'addcatalog':
            if (isset($_POST['addcatalog'])) {
                $name = $_POST['name'];
                $mota = $_POST['mota'];
                $img = $_FILES['img']['name'];
                loai_insert($name, $img, $mota);

                $target_file = IMG_PATH_ADMIN . $img;
                move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);

            }
            header('location: index.php?page=catalog');
            break;

        case 'fixloaisach':
            if (isset($_POST['fixcatalog'])) {
                $name = $_POST['name'];
                $mota = $_POST['mota'];
                $id = $_POST['id'];
                $img = $_FILES['img']['name'];

                if ($img != "") {
                    $target_file = IMG_PATH_ADMIN . $img;
                    move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                } else {
                    $img = "";
                }


                loai_update($name, $mota, $img, $id);

            }
            header('location: index.php?page=catalog');
            break;

        case 'fixcatalog':
            if (isset($_GET['idloai']) && ($_GET['idloai'] > 0)) {
                $id = $_GET['idloai'];
                $loai = loai_chitiet($id);
            }
            include_once('admin-fixcatalog.php');
            break;

        case 'delcatalog':
            if (isset($_GET['idloai']) && ($_GET['idloai'] > 0)) {
                $id = $_GET['idloai'];
                $img = IMG_PATH_ADMIN . loai_select_img($id);
                if (is_file($img)) {
                    unlink($img);
                }
                try {
                    loai_delete($id);
                } catch (\Throwable $th) {
                    echo '<div class="text-align:center>" không được xóa </div>';
                }

            }
            header('location: index.php?page=catalog');
            break;
            case 'others-detail':
                if(isset($_GET['idbill'])&&($_GET['idbill'])>0){
                    $idbill=$_GET['idbill'];
                    $bill_chitiet= bill_select_by_id($idbill);
                }
                $detail_bill_result = search_product_detail_bill($_GET['idbill']);
                include_once('admin-others-detail.php');
                break;
        case 'others':
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
            
                $trang = ($result_per_page - 1) * 9;
                
                $bill_show = show_pagination_select('bill', $tukhoa,9, $trang);
                // var_dump($catalog_show);
                // $sachsp = sach_select($tukhoa, $idloai, $idtg, 12, $trang);
                $number_of_product = count(select_all_bill($tukhoa));
            
                $number_of_page = ceil($number_of_product / 9);

            include_once('admin-others.php');
            break;
            case 'succed_bill';
            succed_bill($_GET['id']);
            $email_user =  Email_bill_select_by_id($_GET['id']);
            $content = '<div>Đơn hàng của bạn đã đượng hoàn thành ! <a href="http://localhost/DA1-08-12-2023/controller/index.php?pg=detail_bill_show&id_bill='.$_GET['id'].'">Kiểm tra đơn hàng</a></div>';
            send_mail('Don hang hoan thanh !', $email_user[0]['nguoidat_email'],$content);
            update_diem_tich_luy($_GET['id_user'],5);
            header('location: index.php?page=others');
            break;
        case 'others-detail':
            if(isset($_GET['idbill'])&&($_GET['idbill'])>0){
                $idbill=$_GET['idbill'];
                $bill_chitiet= bill_select_by_id($idbill);
            }
            $detail_bill_result = search_product_detail_bill($_GET['idbill']);
            include_once('admin-others-detail.php');
            break;


        case 'logout_admin':
    unset($_SESSION['user']);
    header('Location: http://localhost/DA1-08-12-2023/controller/index.php');
    break;


        // thêm sữa xóa nhà xuất bản
        case 'reviews':
            include_once('admin-reviews.php');
        break;

        case 'delbinhluan' :
            if (isset($_GET['idbl']) && ($_GET['idbl'] > 0)) {
                $id = $_GET['idbl'];              
                    binhluan_delete($id);  

            }
            header('location: index.php?page=reviews');
            break;
        case 'nxb':
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
            
                $trang = ($result_per_page - 1) * 9;
                
                $nxb_show = show_pagination_select('nxb', $tukhoa,9, $trang);
                // var_dump($catalog_show);
                // $sachsp = sach_select($tukhoa, $idloai, $idtg, 12, $trang);
                $number_of_product = count( select_all_nxb_search($tukhoa));
            
                $number_of_page = ceil($number_of_product / 9);
            include_once('admin-nxb.php');
            break;

        case 'addnxb':
            if (isset($_POST['addnxb'])) {
                $name = $_POST['name'];
                $img = $_FILES['img']['name'];
                nxb_insert($name, $img);

                $target_file = IMG_PATH_ADMIN . $img;
                move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);

            }
            header('location: index.php?page=nxb');
            break;


        case 'fixnxb':
            if (isset($_GET['idnxb']) && ($_GET['idnxb'] > 0)) {
                $id = $_GET['idnxb'];
                $nxb = nxb_chitiet($id);
            }
            include_once('admin-fixnxb.php');
            break;
            
        case 'fixnhaxuatban':
            if (isset($_POST['fixnhaxb'])) {
                $name = $_POST['name'];
                $id = $_POST['id'];
                $img = $_FILES['img']['name'];

                if ($img != "") {
                    $target_file = IMG_PATH_ADMIN . $img;
                    move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                } else {
                    $img = "";
                }


                nxb_update($name, $img, $id);

            }
            header('location: index.php?page=nxb');
            break;

        case 'delnxb':
            if (isset($_GET['idnxb']) && ($_GET['idnxb'] > 0)) {
                $id = $_GET['idnxb'];
                $img = IMG_PATH_ADMIN . loai_select_img($id);
                if (is_file($img)) {
                    unlink($img);
                }
                try {
                    nxb_delete($id);
                } catch (\Throwable $th) {
                    echo '<div class="text-align:center>" không được xóa </div>';
                }

            }
            header('location: index.php?page=nxb');
            break;

        // thêm sữa xóa nxb xong 

        // thêm sữa xóa tác giả
        case 'tacgia':

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
            
                $trang = ($result_per_page - 1) * 9;
                
                $tacgia_show = show_pagination_select('tacgia', $tukhoa,9, $trang);
                // var_dump($catalog_show);
                // $sachsp = sach_select($tukhoa, $idloai, $idtg, 12, $trang);
                $number_of_product = count( select_all_tacgia_search($tukhoa));
            
                $number_of_page = ceil($number_of_product / 9);
            include_once('admin-tacgia.php');
            break;

        case 'addtacgia':
            if (isset($_POST['addtg'])) {
                $name = $_POST['name'];
                tacgia_insert($name);
            }
            header('location: index.php?page=tacgia');
            break;

        case 'fixtacgia':
            if (isset($_GET['idtg']) && ($_GET['idtg'] > 0)) {
                $id = $_GET['idtg'];
                $tg = tacgia_chitiet($id);
            }
            include_once('admin-fixtacgia.php');
            break;

        case 'fixtg';
            if (isset($_POST['fixtacgia'])) {
                $name = $_POST['name'];
                $id = $_POST['id'];

                tacgia_update($name, $id);

            }
            header('location: index.php?page=tacgia');
            break;

        case 'deltacgia':
            if (isset($_GET['idtg']) && ($_GET['idtg'] > 0)) {
                $id = $_GET['idtg'];
                tacgia_delete($id);
            }
            header('location: index.php?page=tacgia');
            break;

        // thêm sửa xóa tác giả xong

        // show và xóa account
        case 'reviews-blog' :
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
            
                $trang = ($result_per_page - 1) * 9;
                
                $tacgia_show = show_pagination_select('blog', $tukhoa,9, $trang);
                // var_dump($catalog_show);
                // $sachsp = sach_select($tukhoa, $idloai, $idtg, 12, $trang);
                $number_of_product = count(  show_pagination_select_withoutSeach('blog',$tukhoa,9, $trang));
            
                $number_of_page = ceil($number_of_product / 9);
            include_once('admin-reviews-blog.php');
            break;
            case 'success_blog':
                succed_blog($_GET['idblog']);
                update_diem_tich_luy($_GET['iduser'],5);
                header('location: index.php?page=reviews-blog');
                
                break;
                case 'cancel_blog':
                    cancel_blog($_GET['idblog']);
                    
                    header('location: index.php?page=reviews-blog');
                    
                    break;
            case 'blogdetail' :
                if(isset($_GET['idblog'])&&($_GET['idblog']>0)){
                    $idblog=$_GET['idblog'];
                    $blog_detail=get_blog($idblog);
                }
                include_once('admin-blog-detail.php');
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
                    header('location: index.php?page=reviews-blog');
                    break;
        case 'account':
            if(isset($_GET['iduser'])&&($_GET['iduser'])>0){
                $iduser=$_GET['iduser'];
                $user_one=user_select_by_id($iduser);
               return include_once('admin-account-chitiet.php');
                
            }
            
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
            
                $trang = ($result_per_page - 1) * 4;
                
                $user_show = show_pagination_select_user('user', $tukhoa,4, $trang);
               
                // $sachsp = sach_select($tukhoa, $idloai, $idtg, 12, $trang);
                $number_of_product = count(select_all_user_search($tukhoa));
            
                $number_of_page = ceil($number_of_product / 4);
            include_once('admin-account.php');
            break;

        case 'delaccount':
            if (isset($_GET['idacc']) && ($_GET['idacc'] > 0)) {
                $id = $_GET['idacc'];
                // $img = IMG_PATH_ADMIN . user_select_img($id);
                // if (is_file($img)) {
                //     unlink($img);
                // }
                user_delete($id);
                try {
                    
                   
                } catch (\Throwable $th) {
                    echo '<div class="text-align:center>" không được xóa </div>';
                }

            }
            
            // header('location: index.php?page=account');
            break;

        // show và xóa account end


        case 'voucher' :
            include_once ('admin-voucher.php');
            break;


            case 'addvoucher':
                if (isset($_POST['taovoucher'])) {
                    $sotien = $_POST['sotien'];
                    $diemtl = $_POST['diemtl'];
                    voucher_insert( $sotien, $diemtl);
                }
                header('location: index.php?page=voucher');
                break;
    
            case 'fixvoucher':
                if (isset($_GET['idvoucher']) && ($_GET['idvoucher'] > 0)) {
                    $id = $_GET['idvoucher'];
                    $voucher = voucher_chitiet($id);
                }
                include_once('admin-fixvoucher.php');
                break;
    
            case 'fixvc';
                if (isset($_POST['fixvoucher'])) {
                    $sotien = $_POST['sotien'];
                    $diemtl = $_POST['diemtl'];
                    $id = $_POST['id'];

                    voucher_update($sotien, $diemtl, $id);
    
                }
                header('location: index.php?page=voucher');
                break;
    
            case 'delvoucher':
                if (isset($_GET['idvoucher']) && ($_GET['idvoucher'] > 0)) {
                    $id = $_GET['idvoucher'];
                    voucher_delete($id);
                }
                header('location: index.php?page=voucher');
                break;
        default:


            
            include_once('home.php');
            break;
    }

}

include_once('footer.php');

}else{
    header('Location: http://localhost/DA1-08-12-2023/controller/index.php');

}

?>