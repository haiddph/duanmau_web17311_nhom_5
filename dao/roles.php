<?php
//update roles
require_once "pdo/pdo.php";
function role_insert($ro_id,$ro_name,$ro_funtion){
$sql ="INSERT INTO roles(ro_id,ro_name,ro_funtion) VALUES(?)";
$ro_id = '1';
$ro_name = 'admin';
$ro_funtion = 'admin';
pdo_execute($ro_id,$ro_name,$ro_funtion);}
//update roles
function role_update($ro_id,$ro_name){
$sql ="UPDATE roles SET ro_id = ? WHERE ro_name=?";
$ro_id = '1';
$ro_name = 'admin';
pdo_execute($ro_id,$ro_name);
}
//delete roles
function role_delete($ro_id,$ro_name){
$sql ="DELETE FROM  roles WHERE ro_id = ? WHERE ro_name =? ";
$ro_id = '1';
$ro_name = 'admin';
pdo_execute($ro_id,$ro_name);
}
// truy vấn các loại 
function role_select(){
$sql = "SELECT * FROM roles";}
//truy vấn 1 loại
function role_selectfrom($sql,$oder_id){
$sql = "SELECT * FROM roles WHERE oder_id=?";
$row = pdo_query_one($sql,$oder_id);}
?> 