<!DOCTYPE html>
<html>
<?php
	include('../config/constants.php');
    mysqli_query($conn,'SET NAMES UTF8');
    
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <script src="https://use.fontawesome.com/aefb9ecc2c.js"></script>
    
    <title>Điểm thi</title>
    <link rel="stylesheet" href="../css/qlsvs.css">


  </head>
  <body>
  <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">STUDENT MANAGER</h1>
        </div>
        <nav>
          <ul>
            
            <li><a>Xin chào</a></li>
            <li>          <a href="dangxuat.php" alt="Đăng xuất"> <img src="image/logout.png" width="25px"> </a></li>
          </ul>
        </nav>
      </div>
    </header>

</br>
    <div class="body">
      <div class="container"> 
        <div id="menu">
                  <ul>
				  <li><a  href="../trangchu.php"><i class="fa fa-home" aria-hidden="true"></i></i>TRANG CHỦ</a></li>
                      <li><a href="../lop.php"><i class="fa fa-users" aria-hidden="true"></i>LỚP</a></li>
                      <li><a  href="../sinhvien.php" ><i class="fa fa-graduation-cap" aria-hidden="true"></i>SINH VIÊN</a></li>
                      <li><a  href="../giangvien.php"><i class="fa fa-users" aria-hidden="true"></i>GIẢNG VIÊN</a></li>
                      <li><a id="current"  href="../diemthi.php"><i class="fa fa-check" aria-hidden="true"></i>ĐIỂM THI</a></li>
                      <li><a href="../contact.php"><i class="fa fa-address-book" aria-hidden="true"  ></i>CONTACT</a></li>
					  <li><a href="../baitap.php"><i class="fa fa-book" aria-hidden="true"  ></i>BÀI TẬP</a></li>
                      

                  </ul>

              </div>
              <div id="main-contain"> 
				<h2>Nhập điểm</h2>
				
				<div class="form">
					
					</br></br>
					<form method="post">
						<table>
							<tr> 
								<td>Họ tên </td>
								<td> <select name="ten"> 
									<?php
										$q = "SELECT * FROM sinhvien";
										$rs = mysqli_query($conn, $q);
										if (mysqli_num_rows($rs) >0){
											while ($row = mysqli_fetch_assoc($rs)){
												$svID = $row['sinhvienID'];
											
												$tensv = $row['name'];
												echo '<option value= "'. $svID.'">'. $tensv. '</option> ';
											}
										
										}
									?>
									</select>
									</td>
							</tr>
							
							<tr>
								<td>Lập trình ứng dụng :  </td>
								<td> <input type="text" name="ltud"></td>
							</tr>
							<tr>
								<td>Lập trình vi mạch </td>
								<td> <input type="text" name="ltvm"></td>
							</tr>
							<tr>
								<td>Hệ thống viễn thông </td>
								<td> <input type="text" name="htvt"></td>
							</tr>
							
							<tr>
								<td colspan=2>
								<input id="btnChapNhan" type="submit" value="Hoàn tất" name="themdiem"/>
								</td>
							</tr>
						</table>
						
					</form>
					
					
					
					<?php
					
						
						if(isset($_POST['themdiem'])){
						
							{ 
								
								if ($ten = $svdiemthi){
									echo "sinh viên đã có điểm";
								}
								else{
								$ten = $_POST['ten'];
								$ltud = $_POST['ltud'];
								$ltvm = $_POST['ltvm'];
								$htvt = $_POST['htvt'];
								$query = "INSERT INTO `diemthi`( `sinhvienID`,`ltud`, `ltvm`, `htvt`) VALUES('$ten','$ltud','$ltvm','$htvt')";
								mysqli_query($conn,$query) or die("thêm dữ liệu thất bại");
								header('location:../xemdiem.php');
								}
							}
						}
					?>
					<br>
					Chọn menu bên trái hoặc click vào <a href="../xemdiem.php" style="color: blue; text-decoration:underline; font-weight:bold;">đây</a> để quay lại bảng điểm.
					<br>
					<br>
					
				
				</div>
				
              </div>
                    
            </div>
           
        </div>
        <!--endbody-->
		<div>
      <?php include('footer.php');
      ?>
   </div>
       
    </body>
</html>