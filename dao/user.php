<?php
//update user
require_once "pdo/pdo.php";
function user_insert($us_id,$us_name,$us_password,$us_email,$us_img,$us_status,$us_roles){


$sql ="INSERT INTO user(us_id,us_name,us_password,us_email,us_img,us_status,us_roles) VALUES(?)";
$us_id = '1';
$us_name = 'admin';
$us_password = '***';
$us_email = ' admin@gmail.com ';
$us_img='';
$us_status='dang hoat dong';
$us_roles = ' admin';
pdo_execute($us_id,$us_name,$us_password,$us_email,$us_img,$us_status,$us_roles);}
//update user
function user_update($us_id,$us_name){
$sql ="UPDATE roluseres SET us_id = ? WHERE us_name=?";
$us_id = '1';
$us_name = 'admin';
pdo_execute($us_id,$us_name);}
//delete user
function user_delete($us_id,$us_name) {


$sql ="DELETE FROM  user WHERE us_id = ? WHERE us_name =? ";
$us_id = '1';
$us_name = 'admin';
pdo_execute($us_id,$us_name);}
// truy vấn các loại 
function user_select(){
$sql = "SELECT * FROM user";}
//truy vấn 1 loại
function user_selectfrom($sql,$us_id){
$sql = "SELECT * FROM user WHERE us_id=?";
$row = pdo_query_one($sql,$us_id);}
?> 