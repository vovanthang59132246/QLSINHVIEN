<?php
	include('../config/constants.php'); 
	mysqli_query($conn, 'SET NAMES UTF8');
						
	if(isset($_GET['id'])){
	$hoten = $_GET['id'];
	$query = "DELETE FROM `sinhvien` WHERE sinhvienID = '$hoten'" ;
	mysqli_query($conn,$query) or die("xóa dữ liệu thất bại");
    header('location:../sinhvien.php');
						}
?>