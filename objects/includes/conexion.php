<?php

// Conexión
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'restaurant';
$db = mysqli_connect($server, $username, $password, $database);

mysqli_query($db, "SET NAMES 'UTF-8'");

if(!isset($_SESSION)){
    session_start();
}