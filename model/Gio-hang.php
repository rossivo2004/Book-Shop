<?php
require_once 'pdo.php';

function cart_insert($iduser, $idsanpham, $soluong){
    $sql = "INSERT INTO cart(idpro, id_user, soluong) VALUES (?,?,?)";
    pdo_execute($sql, $idsanpham,$iduser, $soluong);
}

function update_cart_soluong($soluong,$ma_hh, $id_user){
    $sql = "UPDATE cart SET soluong = soluong + ? WHERE idpro =? and id_user = ?";
        pdo_execute($sql, $soluong, $ma_hh,$id_user);
}

function update_cart_soluong_minus($ma_hh, $id_user){
    $sql = "UPDATE cart SET soluong = soluong - 1 WHERE idpro =? and id_user = ?";
        pdo_execute($sql,$ma_hh,$id_user);
}
function update_cart_soluong_plus($ma_hh, $id_user){
    $sql = "UPDATE cart SET soluong = soluong + 1 WHERE idpro =? and id_user = ?";
        pdo_execute($sql, $ma_hh,$id_user);
}

function cart_sp_exist($ma_hh, $id_user){
    $sql = "SELECT count(*) FROM cart WHERE idpro =? and id_user = ?";
    return pdo_query_value($sql, $ma_hh,$id_user) > 0;
}

function cart_select_all($id_user){
    $sql = "SELECT c.id, s.id idpro , s.name,(s.price1 - (s.giamgia/100) * s.price1) price1 , s.img, c.soluong FROM `cart` c inner join sach s on c.idpro = s.id inner join user u on  c.id_user = u.id where u.id = ?";
    return pdo_query($sql,$id_user);
}

function cart_delete($ma_hh){
    $sql = "DELETE FROM cart WHERE  id=?";
    if(is_array($ma_hh)){
        foreach ($ma_hh as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $ma_hh);
    }
}
function cart_delete_all(){
    $sql = "DELETE FROM cart ";
    pdo_execute($sql);
    
}