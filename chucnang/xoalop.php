<?php
	include('../config/constants.php'); 
	mysqli_query($conn, 'SET NAMES UTF8');
						
	if(isset($_GET['id'])){
	$idlop = $_GET['id'];
	$query = "DELETE FROM `lophoc` WHERE lopID='$idlop'";
	mysqli_query($conn,$query) or die("lớp có sinh viên không thể xóa");
    header('location:../lop.php');
						}
?>