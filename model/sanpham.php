<?php
require_once 'pdo.php';

// function sanpham_insert($ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta){
//     $sql = "INSERT INTO sanpham(ten_hh, don_gia, giam_gia, hinh, ma_loai, dac_biet, so_luot_xem, ngay_nhap, mo_ta) VALUES (?,?,?,?,?,?,?,?,?)";
//     pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet==1, $so_luot_xem, $ngay_nhap, $mo_ta);
// }

// function sanpham_update($ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta){
//     $sql = "UPDATE sanpham SET ten_hh=?,don_gia=?,giam_gia=?,hinh=?,ma_loai=?,dac_biet=?,so_luot_xem=?,ngay_nhap=?,mo_ta=? WHERE ma_hh=?";
//     pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet==1, $so_luot_xem, $ngay_nhap, $mo_ta, $ma_hh);
// }

// function sanpham_delete($ma_hh){
//     $sql = "DELETE FROM sanpham WHERE  ma_hh=?";
//     if(is_array($ma_hh)){
//         foreach ($ma_hh as $ma) {
//             pdo_execute($sql, $ma);
//         }
//     }
//     else{
//         pdo_execute($sql, $ma_hh);
//     }
// }
function sach_select_all_product($tukhoa,$idloaisach,$idtacgia){
   

    $sql = "SELECT * FROM sach WHERE 1";
    if($idloaisach!=""){
        $sql .=" AND idloaisach= ".$idloaisach;
    }
    if($idtacgia!=""){
        $sql .=" AND idtacgia= ".$idtacgia;
    }
    if($tukhoa!=""){
        $sql .=" AND name like '%".$tukhoa."%'";
    }
    return pdo_query($sql);
}
function sach_select_all($limi){
    $sql = "SELECT * FROM sach ORDER BY id DESC limit ".$limi;
    return pdo_query($sql);
}

function sach_select_top1($limi){
    $sql = "SELECT * FROM sach ORDER BY view DESC limit ".$limi;
    return pdo_query($sql);
}

function sach_select_giamgia($limi){
    $sql = "SELECT * FROM sach WHERE giamgia>0 ORDER BY id DESC limit ".$limi;
    return pdo_query($sql);
}

function sach_select_moi($limi){
    $sql = "SELECT * FROM sach WHERE moi>0 ORDER BY id DESC limit ".$limi;
    return pdo_query($sql);
}


function sach_select_lienquan($idloaisach,$id,$limi){
    $sql = "SELECT * FROM sach WHERE idloaisach=? AND id<>? ORDER BY view DESC limit ".$limi;
    return pdo_query($sql,$idloaisach,$id);
}

function sach_select($tukhoa,$idloaisach,$idtacgia,$limi, $trang){
    $sql = "SELECT * FROM sach WHERE 1";
    if($idloaisach!=""){
        $sql .=" AND idloaisach= ".$idloaisach;
    }
    if($idtacgia!=""){
        $sql .=" AND idtacgia= ".$idtacgia;
    }
    if($tukhoa!=""){
        $sql .=" AND name like '%".$tukhoa."%'";
    }
    $sql.= " ORDER BY id DESC limit ".$limi." offset " . $trang ;
    return pdo_query($sql);
}

function sach_select_by_id($idloaisach){
    $sql = "SELECT * FROM sach WHERE id=?";
    return pdo_query_one($sql, $idloaisach);
}

// function sanpham_exist($ma_hh){
//     $sql = "SELECT count(*) FROM sanpham WHERE ma_hh=?";
//     return pdo_query_value($sql, $ma_hh) > 0;
// }

// function sanpham_tang_so_luot_xem($ma_hh){
//     $sql = "UPDATE sanpham SET so_luot_xem = so_luot_xem + 1 WHERE ma_hh=?";
//     pdo_execute($sql, $ma_hh);
// }

// function sanpham_select_top10(){
//     $sql = "SELECT * FROM sanpham WHERE so_luot_xem > 0 ORDER BY so_luot_xem DESC LIMIT 0, 10";
//     return pdo_query($sql);
// }

// function sanpham_select_dac_biet(){
//     $sql = "SELECT * FROM sanpham WHERE dac_biet=1";
//     return pdo_query($sql);
// }

// function sanpham_select_by_loai($ma_loai){
//     $sql = "SELECT * FROM sanpham WHERE ma_loai=?";
//     return pdo_query($sql, $ma_loai);
// }

// function sanpham_select_keyword($keyword){
//     $sql = "SELECT * FROM sanpham hh "
//             . " JOIN loai lo ON lo.ma_loai=hh.ma_loai "
//             . " WHERE ten_hh LIKE ? OR ten_loai LIKE ?";
//     return pdo_query($sql, '%'.$keyword.'%', '%'.$keyword.'%');
// }

// function sanpham_select_page(){
//     if(!isset($_SESSION['page_no'])){
//         $_SESSION['page_no'] = 0;
//     }
//     if(!isset($_SESSION['page_count'])){
//         $row_count = pdo_query_value("SELECT count(*) FROM sanpham");
//         $_SESSION['page_count'] = ceil($row_count/10.0);
//     }
//     if(exist_param("page_no")){
//         $_SESSION['page_no'] = $_REQUEST['page_no'];
//     }
//     if($_SESSION['page_no'] < 0){
//         $_SESSION['page_no'] = $_SESSION['page_count'] - 1;
//     }
//     if($_SESSION['page_no'] >= $_SESSION['page_count']){
//         $_SESSION['page_no'] = 0;
//     }
//     $sql = "SELECT * FROM sanpham ORDER BY ma_hh LIMIT ".$_SESSION['page_no'].", 10";
//     return pdo_query($sql);
// }

function sanpham_insert($iddm, $name, $img, $giagoc,$idspmoi, $giakhuyenmai, $mota, $idtg, $id_nxb ){
    $sql = "INSERT INTO sach(idloaisach, name, img, price1, moi,giamgia, mota, idtacgia, id_nxb ) VALUES (?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql, $iddm, $name, $img, $giagoc,$idspmoi, $giakhuyenmai, $mota, $idtg, $id_nxb );
}

// function sanpham_update($ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta){
//     $sql = "UPDATE sanpham SET ten_hh=?,don_gia=?,giam_gia=?,hinh=?,ma_loai=?,dac_biet=?,so_luot_xem=?,ngay_nhap=?,mo_ta=? WHERE ma_hh=?";
//     pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet==1, $so_luot_xem, $ngay_nhap, $mo_ta, $ma_hh);
// }

function sanpham_update($iddm, $name, $img, $giagoc,$idspmoi, $giakhuyenmai, $mota, $idtg, $id_nxb , $id){
    if($img!=""){
        $sql = "UPDATE sach SET idloaisach=?,name=?,img=?,price1=?, moi= ?,giamgia=?,mota=?,idtacgia=?,id_nxb =? WHERE id=?";
        pdo_execute($sql, $iddm, $name, $img, $giagoc,$idspmoi, $giakhuyenmai, $mota, $idtg, $id_nxb , $id);
    }else{
        $sql = "UPDATE sach SET idloaisach=?,name=?,price1=?, moi= ?,giamgia=?,mota=?,idtacgia=?,id_nxb =? WHERE id=?";
        pdo_execute($sql, $iddm, $name, $giagoc,$idspmoi, $giakhuyenmai, $mota, $idtg, $id_nxb , $id);
    }
    
}

function sanpham_delete($id){
    $sql = "DELETE FROM sach WHERE  id=?";
    // if(is_array($ma_hh)){
    //     foreach ($ma_hh as $ma) {
    //         pdo_execute($sql, $ma);
    //     }
    // }
    // else{
        pdo_execute($sql, $id);
    // }
}

function sach_chitiet($id){
    $sql = "SELECT * FROM sach WHERE id=?";
    return pdo_query_one($sql, $id);
}

function sach_select_img($id){
    $sql = "SELECT img FROM sach WHERE id=?";
    $getimg=pdo_query_one($sql, $id);
    return $getimg['img'];
}




function select_all_nxb_search($tukhoa){
    $sql = "SELECT * FROM `nxb` where 1 ";
    if($tukhoa!=""){
        $sql .=" AND name like '%".$tukhoa."%'";
    }
    $sql.= "ORDER BY id DESC" ;
    return pdo_query($sql);
}


function dem_sach($item,$id){
    $sql = "SELECT COUNT(*) soluong FROM `sach` WHERE ".$item." = ?";
    return pdo_query($sql,$id);
}


function dem_sach_all(){
    $sql = "SELECT COUNT(*) soluong FROM `sach` WHERE 1";
    return pdo_query($sql);
}

function tang_view_sp($id){
    $sql = "UPDATE sach SET view = view + 1 WHERE id = ?";
    pdo_execute($sql, $id);
}
