<?php 
    include('connection.php');

    $userid = $_GET['id'];
    $sql = "DELETE FROM tbl_user WHERE userid = $userid";
    mysqli_query($conn, $sql);
    header('Location: index.php');
