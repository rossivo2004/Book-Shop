<?php
require_once 'pdo.php';

function thong_ke_hang_hoa(){
    $sql = "SELECT lo.ma_loai, lo.ten_loai,"
            . " COUNT(*) so_luong,"
            . " MIN(hh.don_gia) gia_min,"
            . " MAX(hh.don_gia) gia_max,"
            . " AVG(hh.don_gia) gia_avg"
            . " FROM hang_hoa hh "
            . " JOIN loai lo ON lo.ma_loai=hh.ma_loai "
            . " GROUP BY lo.ma_loai, lo.ten_loai";
    return pdo_query($sql);
}

function thong_ke_binh_luan(){
    $sql = "SELECT hh.ma_hh, hh.ten_hh,"
            . " COUNT(*) so_luong,"
            . " MIN(bl.ngay_bl) cu_nhat,"
            . " MAX(bl.ngay_bl) moi_nhat"
            . " FROM binh_luan bl "
            . " JOIN hang_hoa hh ON hh.ma_hh=bl.ma_hh "
            . " GROUP BY hh.ma_hh, hh.ten_hh"
            . " HAVING so_luong > 0";
    return pdo_query($sql);
}


function show_pagination_select_withoutSeach($item,$tukhoa,$limi, $trang){
    $sql = "SELECT * FROM ".$item." WHERE 1";
    
    $sql.= " ORDER BY id DESC limit ".$limi." offset " . $trang ;
    return pdo_query($sql);
}

function show_pagination_select($item,$tukhoa,$limi, $trang){
    $sql = "SELECT * FROM ".$item." WHERE 1";
    
if($tukhoa!=""){
    $sql .=" AND id = ".$tukhoa." ";
}
    $sql.= " ORDER BY id DESC limit ".$limi." offset " . $trang ;
    return pdo_query($sql);
}


function thongke_admin_doanhthu(){
    $sql = "SELECT SUM(tongthanhtoan) AS total FROM bill";
    return pdo_query($sql);

}

function thongke_admin_bill(){
    $sql = "SELECT COUNT(*) AS total_bill FROM bill";
    return pdo_query($sql);
}

function thongke_admin_sp(){
    $sql = "SELECT COUNT(*) AS total_sp FROM sach";
    return pdo_query($sql);
}

function thongke_admin_dm(){
    $sql = "SELECT COUNT(*) AS total_dm FROM loaisach";
    return pdo_query($sql);
}

function thongke_admin_tg(){
    $sql = "SELECT COUNT(*) AS tg FROM tacgia";
    return pdo_query($sql);
}

function thongke_admin_nxb(){
    $sql = "SELECT COUNT(*) AS total_nxb FROM nxb";
    return pdo_query($sql);
}