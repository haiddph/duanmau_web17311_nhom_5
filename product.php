
<?php
//update product
require_once "pdo/pdo.php";
$sql ="INSERT INTO product( pro_id,pro_name,pro_,pro_price,pro_voucher,pro_img,pro_date,pro_like,pro_status,pro_connect,pro_comment) VALUES(?)";
$pro_id='1';
$pro_name='phở';
$pro_price = ' 30.000';
$pro_voucher = ' giảm 50% ';
$pro_img ='';
$pro_date='Y-m-d';
$pro_like='';
$pro_status='đang mở cửa ';
$pro_connect='phở thơm ngon hà nội';
$pro_comment='';
pdo_execute($sql,$cate_id,$cate_name,$pro_price,$pro_voucher,$pro_img ,$pro_date,$pro_like, $pro_status,$pro_connect,$pro_comment);
//update product
$sql ="UPDATE product SET cate_id = ? WHERE cate_name =?";
$pro_id='1';
$pro_name='phở';
$pro_price = ' 30.000';
$pro_voucher = ' giảm 50% ';
$pro_img ='';
$pro_date='Y-m-d';
$pro_like='';
$pro_status='đang mở cửa ';
$pro_connect='phở thơm ngon hà nội';
$pro_comment='';

pdo_execute($sql,$cate_id,$cate_name,$pro_price,$pro_voucher,$pro_img ,$pro_date,$pro_like, $pro_status,$pro_connect,$pro_comment);

//delete product
$sql ="DELETE FROM  product WHERE pro_id = ? WHERE pro_name =? ";
$pro_id='1';
$pro_name='phở';

pdo_execute($sql,$pro_id,$pro_name);

// truy vấn các loại 
$sql = "SELECT * FROM product";
//truy vấn 1 loại

$sql = "SELECT * FROM product WHERE pro_id=?";
$row = pdo_query_one($sql,$pro_id);
?> 