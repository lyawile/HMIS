<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'homemis'; 
$link = mysqli_connect($host, $user, $password, $database);
if(!$link){
    echo 'connection unsuccessful';
}