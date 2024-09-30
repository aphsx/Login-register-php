<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "login-register";
$port = NULL;
$socket = "";
$connect = mysqli_connect ($hostname, $username, $password, $database, $port, $socket);

if(!$connect){
    die("Connection failed:" . mysqli_connect_error($connect));
}else{
    mysqli_set_charset($connect, 'utf8');
}
?>