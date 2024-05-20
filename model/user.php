<?php
require_once 'pdo.php';

function user_insert($username, $password, $email){
    $sql = "INSERT INTO user(username, password, email) VALUES (?, ?, ?)";
    pdo_execute($sql, $username, $password, $email);
    }


function check_email($email){
    $sql = "SELECT * FROM user WHERE email=?";
    return pdo_query_one($sql, $email);
}

function check_username($username){
    $sql = "SELECT * FROM user WHERE username=?";
    return pdo_query_one($sql, $username);
}
function user_select_img($id){
    $sql = "SELECT img FROM user WHERE id=?";
    $getimg=pdo_query_one($sql, $id);
    return $getimg['img'];
}

function user_insert_id($username, $password, $hoten, $diachi, $email, $dienthoai){
    $sql = "INSERT INTO user(username, password, name, diachi, email, dienthoai) VALUES (?, ?, ?, ?, ?, ?)";
    return pdo_execute_id($sql, $username, $password, $hoten, $diachi, $email, $dienthoai);
}

function checkuser($username,$password){
    $sql = "Select * from user where username=? and password=?";
    return pdo_query_one($sql, $username,$password);
    // if(is_array($kq)&&(count($kq))){
    //     return $kq["id"];
    // }else{
    //     return 0;
    // }
}

function checkpass($mkcu,$id){
    $sql = "Select password from user where password=? and id=?";
    return pdo_query_one($sql, $mkcu,$id);
}
function check_acccheck($usernamecheck,$passwordcheck){
    $sql = "Select * from user where username=? and password=?";
    return pdo_query_one($sql, $usernamecheck,$passwordcheck);
}

function user_update($username,$diachi,$email,$dienthoai,$id){
    $sql = "UPDATE user SET username=?,diachi=?,email=?,dienthoai=? WHERE id=?";
    pdo_execute($sql, $username,$diachi,$email,$dienthoai,$id);
}

function check_user($iduser){
    $sql = "SELECT * FROM user WHERE id = ? ";
    return pdo_query($sql,$iduser);
}

function pass_update($mkmoi, $id){
    $sql = "UPDATE user SET password=? WHERE id=?";
    pdo_execute($sql,$mkmoi, $id);
}

function get_user($id){
    $sql = "Select * from user where id=? ";
    return pdo_query_one($sql, $id);
}

function get_user_bill($id){
    $sql = "Select * from bill where iduser=? ";
    return pdo_query_one($sql, $id);
}

// function user_delete($ma_kh){
//     $sql = "DELETE FROM user  WHERE ma_kh=?";
//     if(is_array($ma_kh)){
//         foreach ($ma_kh as $ma) {
//             pdo_execute($sql, $ma);
//         }
//     }
//     else{
//         pdo_execute($sql, $ma_kh);
//     }
// }

// function user_select_all(){
//     $sql = "SELECT * FROM user";
//     return pdo_query($sql);
// }

// function user_select_by_id($ma_kh){
//     $sql = "SELECT * FROM user WHERE ma_kh=?";
//     return pdo_query_one($sql, $ma_kh);
// }

// function user_exist($ma_kh){
//     $sql = "SELECT count(*) FROM user WHERE $ma_kh=?";
//     return pdo_query_value($sql, $ma_kh) > 0;
// }

// function user_select_by_role($vai_tro){
//     $sql = "SELECT * FROM user WHERE vai_tro=?";
//     return pdo_query($sql, $vai_tro);
// }

// function user_change_password($ma_kh, $mat_khau_moi){
//     $sql = "UPDATE user SET mat_khau=? WHERE ma_kh=?";
//     pdo_execute($sql, $mat_khau_moi, $ma_kh);
// }



function checkadmin($username,$password){
    $sql = "Select * from user where username=? and password=? and role=1";
    return pdo_query_one($sql, $username,$password);
}



function user_delete($id){
    $sql = "DELETE FROM user  WHERE id=?";
    // if(is_array($ma_kh)){
    //     foreach ($ma_kh as $ma) {
    //         pdo_execute($sql, $ma);
    //     }
    // }
    // else{
       return pdo_execute($sql, $id);
    // }
}

function user_select_all(){
    $sql = "SELECT * FROM user WHERE role != 1";
    return pdo_query($sql);
}

function user_select_new($limi){
    $sql = "SELECT * FROM user ORDER BY id desc limit ".$limi;
    return pdo_query($sql);
}

function user_select_diem($ma_kh){
    $sql = "SELECT diem_tich_luy FROM `user` WHERE id = ? ";
    return pdo_query_one($sql, $ma_kh);
}


function user_select_by_id($iduser){
    $sql = "SELECT * FROM user WHERE id=?";
    return pdo_query($sql, $iduser);
}
// function user_exist($ma_kh){
//     $sql = "SELECT count(*) FROM user WHERE $ma_kh=?";
//     return pdo_query_value($sql, $ma_kh) > 0;
// }

// function user_select_by_role($vai_tro){
//     $sql = "SELECT * FROM user WHERE vai_tro=?";
//     return pdo_query($sql, $vai_tro);
// }

// function user_change_password($ma_kh, $mat_khau_moi){
//     $sql = "UPDATE user SET mat_khau=? WHERE ma_kh=?";
//     pdo_execute($sql, $mat_khau_moi, $ma_kh);
// }



// nhà xuất bản

function nxb_select_all(){
    $sql = "SELECT * FROM nxb";
    return pdo_query($sql);
}

function nxb_insert($name, $img){
    $sql = "INSERT INTO nxb(name, img) VALUES (?, ?)";
    pdo_execute($sql, $name, $img);
}

function nxb_chitiet($id){
    $sql = "SELECT * FROM nxb WHERE id=?";
    return pdo_query_one($sql, $id);
}

function nxb_update($name, $img, $id){
    if($img!=""){
        $sql = "UPDATE nxb SET name=?, img=? WHERE id=?";
        pdo_execute($sql, $name, $img, $id);
    }else{
        $sql = "UPDATE nxb SET name=? WHERE id=?";
        pdo_execute($sql, $name, $id);
    }
    
}

function nxb_delete($id){
    $sql = "DELETE FROM nxb WHERE id=?";
    // if(is_array($ma_kh)){
    //     foreach ($ma_kh as $ma) {
    //         pdo_execute($sql, $ma);
    //     }
    // }
    // else{
        pdo_execute($sql, $id);
    // }
}

function update_diem_tich_luy($id_user,$diem){
    $sql = "UPDATE user SET diem_tich_luy=? WHERE id=?";
    pdo_execute($sql, $diem, $id_user);
}

function select_all_user_search($tukhoa){
    $sql = "SELECT * FROM `user` where 1  ";
    if($tukhoa!=""){
        $sql .=" AND username like '%".$tukhoa."%' ";
    }
    $sql.= " ORDER BY id DESC" ;
    return pdo_query($sql);
}

function show_pagination_select_user($item,$tukhoa,$limi, $trang){
    $sql = "SELECT * FROM ".$item." WHERE 1";
    
if($tukhoa!=""){
    $sql .=" AND username like '%".$tukhoa."%' ";
}
    $sql.= " ORDER BY id DESC limit ".$limi." offset " . $trang ;
    return pdo_query($sql);
}


function check_email_exit($email){
    $sql = "Select * from user where email=?";
    return pdo_query($sql, $email);
}




function pass_update_by_email($changepass, $email){
    $sql = "UPDATE user SET password=? WHERE email=?";
    pdo_execute($sql,$changepass, $email);
}


function email_byid($id_user){
    $sql = "Select email from user where id=?";
    return pdo_query($sql, $id_user);
}
