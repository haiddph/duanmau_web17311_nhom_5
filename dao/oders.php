<?php
//update oders
require_once "pdo/pdo.php";
function oder_insert($oder_id,$oder_name,$oder_price){
$sql ="INSERT INTO oders( oder_id,oder_name,oder_price) VALUES(?)";
$oder_id = '1';
$oder_name = 'phở';
$oder_price = '30.000';
pdo_execute($oder_id,$oder_name,$oder_price);
}
//update oders
function oder_update($oder_id,$oder_name){
$sql ="UPDATE oders SET oder_id = ? WHERE oder_name=?";
$oder_id = '1';
$oder_name = 'phở';
pdo_execute($oder_id,$oder_name);
}
//delete oders
function oder_delete($oder_id,$oder_name){
$sql ="DELETE FROM  oders WHERE oder_id = ? WHERE oder_name =? ";
$oder_id = '1';
$oder_name = 'phở';
pdo_execute($oder_id,$oder_name);}
// truy vấn các loại 
function oder_select(){
$sql = "SELECT * FROM oders";}
//truy vấn 1 loại
function oder_selectfrom($sql,$oder_id){
$sql = "SELECT * FROM oders WHERE oder_id=?";
$row = pdo_query_one($sql,$oder_id);}
?> 