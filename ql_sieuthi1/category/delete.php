<?php
include 'db.php';

$id = $_REQUEST['id'];

$sql = "DELETE FROM mat_hang WHERE `mat_hang`.`id` = $id";

 //thuc hien truy van
 $conn->exec($sql);

 //chuyen huong ve trang chinh
 header("location:index.php");
 
 