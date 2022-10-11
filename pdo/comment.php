
<?php
//update commnent
require_once "pdo/pdo.php";
$sql ="INSERT INTO commnent( com_id,pro_id,us_id,com_connect,commnet_likes ) VALUES(?)";
$com_id = '1';
$pro_id = '1';
$us_id = '1';
$com_connect = ' phở này ngon tuyệt ';
$commnet_likes='';
pdo_execute($sql,$com_id,$pro_id,$us_id,$com_connect,$commnet_likes);
//update commnent
$sql ="UPDATE commnent SET com_id = ? WHERE pro_id=?";
$com_id = '1';
$pro_id = '1';
pdo_execute($sql,$com_id,$pro_id);
//delete commnent
$sql ="DELETE FROM  commnent WHERE com_id = ? WHERE pro_id =? ";
$com_id = '1';
$pro_id = '1';
pdo_execute($sql,$com_id,$pro_id);
// truy vấn các loại 
$sql = "SELECT * FROM commnent";
//truy vấn 1 loại

$sql = "SELECT * FROM commnent WHERE com_id=?";
$row = pdo_query_one($sql,$com_id);
?> 