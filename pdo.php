<?php

function pdo_get_connection(){
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// ecgo kết nối thành công 
return $conn;

 }catch (PDOException $e ){
echo " lỗi kết nối:". $e-getMessage();

 }

}
function pdo_execute($sql){
    $sql_args = array_slice(func_get_args(),1);
    try{
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt -> execute($sql_args);
    }   
    catch (PDOException $e )
    {
throw $e;
    }finally{
        unset($conn);
    }
}
?>