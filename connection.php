<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_bernante_sample";

$conn = mysqli_connect($servername, $username, $password, $database);

$select_all = mysqli_query($conn, "SELECT * FROM tbl_user");




?>