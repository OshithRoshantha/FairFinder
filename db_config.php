<?php
$dbConnection = mysqli_connect("localhost:3306", "root", "", "fairFinder");
if (!$dbConnection) {
    die("Connection failed: " . mysqli_connect_error());
}
if($dbConnection)
    mysqli_query($dbConnection,"create database if not exists fairFinder");
mysqli_select_db($dbConnection,"fairFinder"); 
?>