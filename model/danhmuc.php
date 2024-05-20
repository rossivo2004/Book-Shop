<?php
require_once 'pdo.php';

// /**
//  * Thêm loại mới
//  * @param String $ten_loai là tên loại
//  * @throws PDOException lỗi thêm mới
//  */
// function loai_insert($ten_loai){
//     $sql = "INSERT INTO loai(ten_loai) VALUES(?)";
//     pdo_execute($sql, $ten_loai);
// }
// /**
//  * Cập nhật tên loại
//  * @param int $ma_loai là mã loại cần cập nhật
//  * @param String $ten_loai là tên loại mới
//  * @throws PDOException lỗi cập nhật
//  */
// function loai_update($ma_loai, $ten_loai){
//     $sql = "UPDATE loai SET ten_loai=? WHERE ma_loai=?";
//     pdo_execute($sql, $ten_loai, $ma_loai);
// }
// /**
//  * Xóa một hoặc nhiều loại
//  * @param mix $ma_loai là mã loại hoặc mảng mã loại
//  * @throws PDOException lỗi xóa
//  */
// function loai_delete($ma_loai){
//     $sql = "DELETE FROM loai WHERE ma_loai=?";
//     if(is_array($ma_loai)){
//         foreach ($ma_loai as $ma) {
//             pdo_execute($sql, $ma);
//         }
//     }
//     else{
//         pdo_execute($sql, $ma_loai);
//     }
// }
/**
 * Truy vấn tất cả các loại
 * @return array mảng loại truy vấn được
 * @throws PDOException lỗi truy vấn
 */
function danhmuc_select_all(){
    $sql = "SELECT * FROM loaisach ORDER BY id DESC";
    return pdo_query($sql);
}

function get_name_dm($id){
    $sql = "SELECT name FROM loaisach WHERE id=?";
    return pdo_query_value($sql,$id);
}

// /**
//  * Truy vấn một loại theo mã
//  * @param int $ma_loai là mã loại cần truy vấn
//  * @return array mảng chứa thông tin của một loại
//  * @throws PDOException lỗi truy vấn
//  */
// function loai_select_by_id($ma_loai){
//     $sql = "SELECT * FROM loai WHERE ma_loai=?";
//     return pdo_query_one($sql, $ma_loai);
// }
// /**
//  * Kiểm tra sự tồn tại của một loại
//  * @param int $ma_loai là mã loại cần kiểm tra
//  * @return boolean có tồn tại hay không
//  * @throws PDOException lỗi truy vấn
//  */
// function loai_exist($ma_loai){
//     $sql = "SELECT count(*) FROM loai WHERE ma_loai=?";
//     return pdo_query_value($sql, $ma_loai) > 0;
// }
function loai_insert($name, $img, $mota){
    $sql = "INSERT INTO loaisach(name, img, mota) VALUES(?,?,?)";
    pdo_execute($sql, $name, $img, $mota);
}
// /**
//  * Cập nhật tên loại
//  * @param int $ma_loai là mã loại cần cập nhật
//  * @param String $ten_loai là tên loại mới
//  * @throws PDOException lỗi cập nhật
//  */
function loai_update($name, $mota, $img, $id){
    if($img!=""){
        $sql = "UPDATE loaisach SET name=?, mota=?, img=? WHERE id=?";
        pdo_execute($sql, $name, $mota, $img, $id);
    }else{
        $sql = "UPDATE loaisach SET name=?, mota=? WHERE id=?";
        pdo_execute($sql, $name, $mota, $id);
    }
    
}
// /**
//  * Xóa một hoặc nhiều loại
//  * @param mix $ma_loai là mã loại hoặc mảng mã loại
//  * @throws PDOException lỗi xóa
//  */
function loai_delete($id){
    $sql = "DELETE FROM loaisach WHERE id=?";
    // if(is_array($ma_loai)){
    //     foreach ($ma_loai as $ma) {
    //         pdo_execute($sql, $ma);
    //     }
    // }
    // else{
        pdo_execute($sql, $id);
    // }
}
/**
 * Truy vấn tất cả các loại
 * @return array mảng loại truy vấn được
 * @throws PDOException lỗi truy vấn
 */

function loai_chitiet($id){
    $sql = "SELECT * FROM loaisach WHERE id=?";
    return pdo_query_one($sql, $id);
}

function loai_select_img($id){
    $sql = "SELECT img FROM loaisach WHERE id=?";
    $getimg=pdo_query_one($sql, $id);
    return $getimg['img'];
}




function select_all_loaisach_search($tukhoa){
    $sql = "SELECT * FROM `loaisach` where 1  ";
    if($tukhoa!=""){
        $sql .=" AND name like '%".$tukhoa."%' ";
    }
    $sql.= " ORDER BY id DESC" ;
    return pdo_query($sql);
}