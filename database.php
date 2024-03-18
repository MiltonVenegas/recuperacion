<?php
$servername = "localhost"; 
$username = "root"; 
$password = "root"; 
$database = "recuperar"; 

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Error al conectarse en la base de datos: ". mysqli_connect_error());
}
