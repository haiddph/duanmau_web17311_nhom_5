<?php
//update roles
require_once "pdo/pdo.php";
$sql ="INSERT INTO roles(ro_id,ro_name,ro_funtion) VALUES(?)";
$ro_id = '1';
$ro_name = 'admin';
$ro_funtion = 'admin';
pdo_execute($ro_id,$ro_name,$ro_funtion);
//update roles
$sql ="UPDATE roles SET ro_id = ? WHERE ro_name=?";
$ro_id = '1';
$ro_name = 'admin';
pdo_execute($ro_id,$ro_name);
//delete roles
$sql ="DELETE FROM  roles WHERE ro_id = ? WHERE ro_name =? ";
$ro_id = '1';
$ro_name = 'admin';
pdo_execute($ro_id,$ro_name);
// truy vấn các loại 
$sql = "SELECT * FROM roles";
//truy vấn 1 loại

$sql = "SELECT * FROM roles WHERE oder_id=?";
$row = pdo_query_one($sql,$oder_id);
?> 