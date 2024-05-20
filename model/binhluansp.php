<?php
require_once 'pdo.php';

function binhluan_insert($iduser, $idsanpham, $noidung, $ngaybl){
    $sql = "INSERT INTO binhluan(idpro, iduser, noidung, ngaybl ) VALUES (?,?,?,?)";
    pdo_execute($sql, $iduser, $idsanpham, $noidung, $ngaybl);
}

// function binhluan_update($ma_bl, $ma_kh, $ma_hh, $noi_dung, $ngay_bl){
//     $sql = "UPDATE binhluan SET ma_kh=?,ma_hh=?,noi_dung=?,ngay_bl=? WHERE ma_bl=?";
//     pdo_execute($sql, $ma_kh, $ma_hh, $noi_dung, $ngay_bl, $ma_bl);
// }

// function binhluan_delete($ma_bl){
//     $sql = "DELETE FROM binhluan WHERE ma_bl=?";
//     if(is_array($ma_bl)){
//         foreach ($ma_bl as $ma) {
//             pdo_execute($sql, $ma);
//         }
//     }
//     else{
//         pdo_execute($sql, $ma_bl);
//     }
// }
function binhluan_admin_all(){
    $sql = "SELECT bl.id, bl.idpro, bl.iduser, bl.noidung, bl.ngaybl, bl.trangthai, u.username, p.name, p.img
        FROM binhluan bl
        INNER JOIN user u ON bl.iduser = u.id
        INNER JOIN sach p ON bl.idpro = p.id
        ORDER BY bl.id DESC";
    return pdo_query($sql);
}
function binhluan_select_all(){
    $sql = "SELECT * FROM binhluan  ORDER BY id  DESC";
    return pdo_query($sql);
}

function binhluan_select_by_id($idsanpham){
    $sql = "SELECT * FROM binhluan bl inner join user u  on bl.iduser = u.id WHERE idpro= ? ";
    return pdo_query($sql, $idsanpham);
}

// function binhluan_exist($ma_bl){
//     $sql = "SELECT count(*) FROM binhluan WHERE ma_bl=?";
//     return pdo_query_value($sql, $ma_bl) > 0;
// }
//-------------------------------//
// function binhluan_select_by_hang_hoa($ma_hh){
//     $sql = "SELECT b.*, h.ten_hh FROM binhluan b JOIN hang_hoa h ON h.ma_hh=b.ma_hh WHERE b.ma_hh=? ORDER BY ngay_bl DESC";
//     return pdo_query($sql, $ma_hh);
// }

function binhluan_delete($id){
    $sql = "DELETE FROM binhluan WHERE id=?";

        pdo_execute($sql, $id);

}

function binhluan_admin_all_blog(){
    $sql = "SELECT bl.id, bl.id_user, bl.tenblog, bl.ngayvietblog, bl.mota, bl.noidung, u.username ,bl.status FROM blog bl inner join user u on bl.id_user = u.id ORDER BY bl.id asc ";
    return pdo_query($sql);
}

// function get_blog($idblog){
//     $sql = "SELECT b.tenblog,b.ngayvietblog, b.mota,b.img,u.username, b.noidung,u.img avatar FROM `blog` b inner join user u on b.id_user = u.id where b.id = ?";
//     return pdo_query($sql,$idblog);
// }

function blog_select_img($id){
    $sql = "SELECT img FROM blog WHERE id=?";
    $getimg=pdo_query_one($sql, $id);
    return $getimg['img'];
}

function blog_delete($id){
    $sql = "DELETE FROM blog WHERE id=?";

        pdo_execute($sql, $id);

}