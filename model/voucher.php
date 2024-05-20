<?php
require_once 'pdo.php';

function voucher_select_all(){
    $sql = "SELECT * FROM voucher ORDER BY id asc";
    return pdo_query($sql);
}
function voucher_select_by_id($id){
    $sql = "SELECT * FROM voucher where id = ? ORDER BY id DESC";
    return pdo_query($sql,$id);
}
function voucher_detail_insert($id_user,$id_voucher){
    $sql = "INSERT INTO voucher_detail(id_user, id_voucher) VALUES (?,?)";
    pdo_execute($sql, $id_user,$id_voucher);
}

function voucher_select_by_id_user($id_user){
    $sql = "SELECT v.id id_voucher, v.sotien_giam FROM `voucher_detail` vd join voucher v on vd.id_voucher = v.id where vd.id_user = ? and vd.status = 0";
    return pdo_query($sql,$id_user);
}
function status_voucher_update_inUse($id_user, $id_voucher){
    $sql = "UPDATE voucher_detail SET status = 1 WHERE id_user=? and id_voucher = ? and status =  0 limit 1 ";
    pdo_execute($sql, $id_user, $id_voucher);
}
function status_voucher_update_NotinUse($id_user, $id_voucher){
    $sql = "UPDATE voucher_detail SET status = 0 WHERE id_user=? and id_voucher = ? and status =  1 limit 1 ";
    pdo_execute($sql, $id_user, $id_voucher);
}


// N.Huy
function voucher_all_by_iduser($iduser){
    $sql = "SELECT vc.id, vc.sotien_giam, vd.id_voucher,vd.id_user, vd.status, u.id, u.diem_tich_luy  FROM voucher_detail vd inner join voucher vc on  vd.id_voucher = vc.id inner join user u on vd.id_user = u.id WHERE vd.id_user = ? ";
    return pdo_query($sql,$iduser);
} 

// admin
function  voucher_insert( $sotien, $diemtl){
    $sql = "INSERT INTO voucher(sotien_giam, diemtichluy_can) VALUES(?,?)";
    pdo_execute($sql,  $sotien, $diemtl);
}

function voucher_chitiet($id){
    $sql = "SELECT * FROM voucher WHERE id=?";
    return pdo_query_one($sql, $id);
}

function voucher_update($sotien, $diemtl, $id){
    $sql= "UPDATE voucher SET sotien_giam = ?, diemtichluy_can = ? WHERE id = ?";
    pdo_execute($sql, $sotien, $diemtl, $id);
}

function voucher_delete($id){
    $sql = "DELETE FROM voucher WHERE id=?";
    pdo_execute($sql, $id);

}
