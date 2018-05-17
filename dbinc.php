<?php

$servername="localhost";
$user_name="root";
$password="reset@123";
$dbname="db";


$conn=mysqli_connect($servername,$user_name,$password,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";



?>