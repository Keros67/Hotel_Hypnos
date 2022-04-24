<?php
include('dbConnect.php');

$server="localhost";
$username="root";
$password="root";
$dbname="hotel";
$con = mysqli_connect($server,$username,$password,$dbname);

$SQL = "SELECT * FROM general_settings"; 

$query=mysqli_query($con,$SQL);
$general_setting=mysqli_fetch_assoc($query);

?>