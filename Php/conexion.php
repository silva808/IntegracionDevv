<?php
$host='localhost';
$root='root';
$password='';
$nombrebd='test';
$conn= new mysqli($host,$root,$password,$nombrebd);
if(!$conn){
    die("No es posible conectar a la base de datos");
}
?>