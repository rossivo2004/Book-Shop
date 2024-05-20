<?php
require_once 'pdo.php';


// function bill_insert_id($madh, $ngaydh, $iduser , $nguoidat_ten, $nguoidat_email, $nguoidat_sdt, $nguoidat_diachi  ,$total ,$ship ,$voucher ,$tongthanhtoan ,$pttt){
//     $sql = "INSERT INTO bill(madh, ngaydh, iduser , nguoidat_ten, nguoidat_email, nguoidat_sdt, nguoidat_diachi ,total ,ship ,voucher ,tongthanhtoan ,pttt) VALUES ( ?, ?, ?, ? ,?, ?, ?, ?, ?, ? ,? ,?)";
//     return pdo_execute_id($sql, $madh, $ngaydh, $iduser , $nguoidat_ten, $nguoidat_email, $nguoidat_sdt, $nguoidat_diachi  ,$total ,$ship ,$voucher ,$tongthanhtoan ,$pttt);
// }

function chitiet_bill($limi){
    $sql = "SELECT * FROM bill ORDER BY id asc limit ".$limi;
    return pdo_query($sql);
}


// lấy đơn hàng gần nhất của người đặt hàng
function check_user_bill($iduser){
    $sql = "SELECT * FROM `bill` WHERE iduser = ? ORDER by id DESC limit 1 ";
    return pdo_query($sql,$iduser);
}


function get_tongdonhang_nologin(){
    $tongall=0;
    foreach ($_SESSION['giohangsach'] as $item) {
        extract ($item);
        $tongcong=$price1*$soluong;
        $ship=number_format(30000);
        $tongall=(int)$tongall+(int)$tongcong+(int)$ship;
    }
    return $tongall;
}


function get_tongdonhang_login($id_user){
    $sql = "SELECT SUM(c.soluong * s.price1) total FROM `cart` c inner join sach s on c.idpro = s.id inner join user u on ? = u.id ";
    return pdo_query($sql,$id_user);
}
// function cart_insert($idpro, $price, $name, $img, $soluong, $thanhtien, $idbill){
//     $sql = "INSERT INTO cart(idpro, price, name, img, soluong, thanhtien, idbill) VALUES (?, ?, ?, ?, ?, ? ,?)";
//     pdo_execute($sql, $idpro,  $price, $name, $img, $soluong, $thanhtien ,$idbill);
// }

// function bill_insert_login($iduser, $id ,$price, $name, $img, $soluong, $thanhtien){
//     $sql = "INSERT INTO bill(iduser, nguoidat_ten , name, img, soluong, thanhtien, idbill) VALUES (?, ?, ?, ?, ?, ? ,?)";
//     pdo_execute($sql, $idpro,  $price, $name, $img, $soluong, $thanhtien ,);
// }
// function bill_insert_nologin($idpro, $price, $name, $img, $soluong, $thanhtien){
//     $sql = "INSERT INTO bill(idpro, price, name, img, soluong, thanhtien, idbill) VALUES (?, ?, ?, ?, ?, ? ,?)";
//     pdo_execute($sql, $idpro,  $price, $name, $img, $soluong, $thanhtien ,);
// }

function bill_insert_login($iduser, $ngaydh,  $nguoidat_ten, $nguoidat_email, $nguoidat_sdt, $nguoidat_diachi  ,$total ,$ship ,$voucher ,$tongthanhtoan ,$pttt){
    $sql = "INSERT INTO bill(iduser, nguoidat_ten, nguoidat_email , nguoidat_sdt, nguoidat_diachi,ngay_dat,total ,ship ,voucher ,tongthanhtoan ,pttt) VALUES ( ?, ?, ?, ? ,?, ?, ?, ?, ?, ? ,? )";
    return pdo_execute_id($sql, $iduser, $nguoidat_ten, $nguoidat_email, $nguoidat_sdt, $nguoidat_diachi  ,$ngaydh,$total ,$ship ,$voucher ,$tongthanhtoan ,$pttt);
}

function bill_insert_nologin( $ngaydh,  $nguoidat_ten, $nguoidat_email, $nguoidat_sdt, $nguoidat_diachi  ,$total ,$ship ,$voucher ,$tongthanhtoan ,$pttt){
    $sql = "INSERT INTO bill( nguoidat_ten, nguoidat_email , nguoidat_sdt, nguoidat_diachi,ngay_dat,total ,ship ,voucher ,tongthanhtoan ,pttt) VALUES ( ?, ?, ? ,?, ?, ?, ?, ?, ? ,? )";
    return pdo_execute_id($sql, $nguoidat_ten, $nguoidat_email, $nguoidat_sdt, $nguoidat_diachi  ,$ngaydh,$total ,$ship ,$voucher ,$tongthanhtoan ,$pttt);
}



function id_bill_login($iduser){
    $sql = "SELECT id FROM `bill` WHERE iduser = ? ORDER by id desc limit 1 ";
    return pdo_query($sql,$iduser);
}

function id_bill_nologin($sdt){
    $sql = "SELECT id FROM `bill` WHERE nguoidat_sdt = ? ORDER by id desc limit 1 ";
    return pdo_query($sql,$sdt);
}

function bill_detail_insert($id_bill, $idpro, $soluong, $gia ){
    $sql = "INSERT INTO detail_bill(id_bill, id_pro,soluong, gia) VALUES (?,?,?,?)";
    pdo_execute($sql, $id_bill, $idpro, $soluong, $gia);
}


function search_idbill($id_bill){
    $sql = "SELECT * FROM `bill` WHERE id = ? ";
    return pdo_query($sql,$id_bill);
}
function select_all_bill_user($id_user){
    $sql = "SELECT * FROM `bill` WHERE iduser = ? ";
    return pdo_query($sql,$id_user);
}

function select_all_bill_user_delivered($id_user){
    $sql = "SELECT * FROM `bill` WHERE iduser = ? and status = 0 order by id desc";
    return pdo_query($sql,$id_user);
}
function search_product_detail_bill($id_bill){
    $sql = "SELECT * FROM `detail_bill` dbl inner join sach s on dbl.id_pro = s.id WHERE id_bill = ?;";
    return pdo_query($sql,$id_bill);
}


function select_all_bill($tukhoa){
    $sql = "SELECT * FROM `bill` where 1 ";
    if($tukhoa!=""){
        $sql .=" AND id = ".$tukhoa." ";
    }
    $sql.= "ORDER BY id DESC" ;
    return pdo_query($sql);
}

function succed_bill($id_bill){
    $sql = "UPDATE bill SET status = 1 WHERE id=?";
    pdo_execute($sql, $id_bill);
}
function cancel_bill($id_bill){
    $sql = "UPDATE bill SET status = 2 WHERE id=?";
    pdo_execute($sql, $id_bill);
}
function bill_select_by_id($idbill){
    $sql = "SELECT * FROM bill WHERE id=?";
    return pdo_query($sql, $idbill);
}

function search_product_bill_by_user($iduserbill){
    $sql = "SELECT * FROM `detail_bill` dbl inner join sach s on dbl.id_pro = s.id WHERE id_bill = ?;";
    return pdo_query($sql,$iduserbill);
}
function Email_bill_select_by_id($idbill){
    $sql = "SELECT nguoidat_email FROM bill WHERE id=?";
    return pdo_query($sql, $idbill);
}