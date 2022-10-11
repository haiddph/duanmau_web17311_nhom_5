
<?php
//update commnent

require_once "pdo/pdo.php";
function commnent_update($com_id,$pro_id,$us_id,$com_connect,$commnet_likes){
$sql ="INSERT INTO commnent( com_id,pro_id,us_id,com_connect,commnet_likes ) VALUES(?)";
pdo_execute($sql,$com_id,$pro_id,$us_id,$com_connect,$commnet_likes);
}
//delete commnent
function commnent_delete($com_id,$pro_id){
    $sql ="DELETE FROM  commnent WHERE com_id = ? WHERE pro_id =? ";
    $com_id = '1';
    $pro_id = '1';
    pdo_execute($sql,$com_id,$pro_id);
    }

// truy vấn các loại 
function commnent_select(){
$sql = "SELECT * FROM commnent";
}
//truy vấn 1 loại
function commnent_selectfrom($com_id){
$sql = "SELECT * FROM commnent WHERE com_id=?";
$row = pdo_get_connection($sql,$com_id);
}
?> 