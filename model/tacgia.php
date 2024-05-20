<?php
require_once 'pdo.php';

function tacgia_select_all(){
    $sql = "SELECT * FROM tacgia ORDER BY id DESC";
    return pdo_query($sql);
}
// select_all_tacgia_search
function select_all_tacgia_search($tukhoa){
    $sql = "SELECT * FROM `tacgia` where 1  ";
    if($tukhoa!=""){
        $sql .=" AND name like '%".$tukhoa."%' ";
    }
    $sql.= " ORDER BY id DESC" ;
    return pdo_query($sql);
}
function tacgia_insert($name){
    $sql = "INSERT INTO tacgia(name) VALUES (?)";
    pdo_execute($sql, $name);
}

function tacgia_update($name, $id){
    $sql = "UPDATE tacgia SET name=? WHERE id=?";
    pdo_execute($sql, $name, $id);
}

function tacgia_chitiet($id){
    $sql = "SELECT * FROM tacgia WHERE id=?";
    return pdo_query_one($sql, $id);
}

function tacgia_delete($id){
    $sql = "DELETE FROM tacgia WHERE id=?";
        pdo_execute($sql, $id);

}
function get_name_tacgia($id){
    $sql = "SELECT name FROM tacgia WHERE id=?";
    return pdo_query_value($sql,$id);
}