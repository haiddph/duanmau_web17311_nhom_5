<?php
//update voucher
require_once "pdo/pdo.php";
function voucher_insert($vou_id,$vou_content,$vou_info,$vou_condition){
$sql ="INSERT INTO voucher(vou_id,vou_content,vou_info,vou_condition) VALUES(?)";
$vou_id = '1';
$vou_content = 'giam50%';
$vou_info = 'admin';
$vou_condition='con 14 ngay';
pdo_execute($vou_id,$vou_content,$vou_info,$vou_condition);}
//update voucher
function voucher_update($vou_id,$vou_content){


$sql ="UPDATE voucher SET vou_id = ? WHERE vou_content=?";
$vou_id = '1';
$vou_content = 'giam50%';

pdo_execute($vou_id,$vou_content);}
//delete voucher
function voucher_delete($vou_id,$vou_content){
$sql ="DELETE FROM  voucher WHERE ro_id = ? WHERE ro_name =? ";
$vou_id = '1';
$vou_content = 'giam50%';

pdo_execute($vou_id,$vou_content);}
// truy vấn các loại 
function voucher_select(){
$sql = "SELECT * FROM voucher";}
//truy vấn 1 loại
function voucher_selectfrom($sql,$vou_id){
$sql = "SELECT * FROM voucher WHERE vou_id=?";
$row = pdo_query_one($sql,$vou_id);}
?> 