<?php
include 'connect.php';
$id = $_GET['id'];
$sql_ptl = "DELETE FROM `phim_the_loai` WHERE phim_id = '$id'";
mysqli_query($conn, $sql_ptl);
$sql = "DELETE FROM `phim` WHERE id = '$id'";
mysqli_query($conn, $sql);
header('Location: index.php?page_layout=phim');
