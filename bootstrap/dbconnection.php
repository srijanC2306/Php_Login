<?php

$dbh = "mysqli:host=localhost ; dbname=friendster";
$username = 'root';
$password = '';

try{
    $pdo = new PDO($dbh , $username , $password);
    echo "Connection successfull";
    die();
}catch(Exception $e){

  echo json_encode(array('status'=>500 , 'message'=>'Database connection error'));
  die();
}

?>