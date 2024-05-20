<?php
require_once 'pdo.php';

function blog_insert($id_user,$ten_tieude,$ngay_viet,$mota,$noidung,$img){
    $sql = "INSERT INTO blog    (id_user,tenblog,ngayvietblog,mota,	noidung,img) VALUES(?,?,?,?,?,?)";
    pdo_execute($sql, $id_user,$ten_tieude,$ngay_viet,$mota,$noidung,$img);
}
function get_all_blog(){
    $sql = "SELECT b.id ,b.tenblog,b.ngayvietblog, b.mota,b.img,u.username,u.img avatar FROM `blog` b inner join user u on b.id_user = u.id where status = 1";
    return pdo_query($sql);
}

// function get_blog($id){
//     $sql = "SELECT b.tenblog,b.ngayvietblog, b.mota,b.img,u.username, b.noidung,u.img avatar FROM `blog` b inner join user u on b.id_user = u.id where b.id = ?";
//     return pdo_query($sql,$id);
// }
// SELECT * FROM `blog` b inner join user u on b.id_user = u.id;

function binhluan_admin_all_blog_by_iduser($iduser){
    $sql = "SELECT bl.id, bl.id_user, bl.tenblog, bl.ngayvietblog, bl.mota, bl.noidung, u.username FROM blog bl inner join user u on bl.id_user = u.id WHERE bl.id_user = ? ";
    return pdo_query($sql,$iduser);
}

function get_blog_user($idblog){
    $sql = "SELECT b.id ,b.tenblog,b.ngayvietblog, b.mota,b.img,u.username, b.noidung,u.img avatar FROM `blog` b inner join user u on b.id_user = u.id where b.id = ?";
    return pdo_query($sql,$idblog);
}

// function blog_select_img($id){
//     $sql = "SELECT img FROM blog WHERE id=?";
//     $getimg=pdo_query_one($sql, $id);
//     return $getimg['img'];
// }

// function blog_delete($id){
//     $sql = "DELETE FROM blog WHERE id=?";

//         pdo_execute($sql, $id);

// }

function blog_update($name, $mota ,$noidung, $img, $id){
    if($img!=""){
        $sql = "UPDATE blog SET tenblog=?, mota=?, noidung=?, img=? WHERE id=?";
        pdo_execute($sql, $name, $mota ,$noidung, $img, $id);
    }else{
        $sql = "UPDATE blog SET tenblog=?, mota=?, noidung=? WHERE id=?";
        pdo_execute($sql, $name, $mota ,$noidung, $id);
    }
}


function succed_blog($id_blog){
    $sql = "UPDATE blog SET status = 1 WHERE id=?";
    pdo_execute($sql, $id_blog);
}
function cancel_blog($id_blog){
    $sql = "UPDATE blog SET status = 2 WHERE id=?";
    pdo_execute($sql, $id_blog);
}

function get_blog($idblog){
    $sql = "SELECT b.tenblog,b.ngayvietblog, b.mota,b.img,u.username, b.noidung,u.img avatar FROM `blog` b inner join user u on b.id_user = u.id where b.id = ?";
    return pdo_query($sql,$idblog);
}