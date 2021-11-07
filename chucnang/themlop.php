<!DOCTYPE html>
<html>
<?php
	include('../config/constants.php'); 
	mysqli_query($conn, 'SET NAMES UTF8');
?>
   <head>
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <script src="https://use.fontawesome.com/aefb9ecc2c.js"></script>
    
    <title>Thêm lớp</title>
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
        <!--endheader-->
        <div class="body">
			<div class="container"> 
				<div id="menu">
                    <ul>
					<li><a  href="../trangchu.php"><i class="fa fa-home" aria-hidden="true"></i></i>TRANG CHỦ</a></li>
                      <li><a id="current"  href="../lop.php"><i class="fa fa-users" aria-hidden="true"></i>LỚP</a></li>
                      <li><a  href="../sinhvien.php" ><i class="fa fa-graduation-cap" aria-hidden="true"></i>SINH VIÊN</a></li>
                      <li><a  href="../giangvien.php"><i class="fa fa-users" aria-hidden="true"></i>GIẢNG VIÊN</a></li>
                      <li><a  href="../diemthi.php"><i class="fa fa-check" aria-hidden="true"></i>ĐIỂM THI</a></li>
                      <li><a href="../contact.php"><i class="fa fa-address-book" aria-hidden="true"  ></i>CONTACT</a></li>
					  <li><a href="../baitap.php"><i class="fa fa-book" aria-hidden="true"  ></i>BÀI TẬP</a></li>
                  </ul>

              </div>
              <div id="main-contain"> 
				<h2>Thêm Lớp</h2>
				
				<div class="form">
					<span style="font-size: 20px; color: red; font-style: italic"><b>Mời nhập thông tin lớp học : </b> </span> </br>
					(Chú ý điền đủ thông tin)
					</br></br>
					<form method="post">
						<table>
							<tr> 
								<td>Tên Lớp : </td>
								<td> <input type="text" name="ten" autofocus></td>
							</tr>
							<tr>
								<td>GVCN :</td>
								<td> <input type="text" name="GVCN"></td>
							</tr>
							<tr>
								<td>Phòng học : </td>
								<td> <select name="phonghoc">
										<option>P.101</option>
										<option>P.102</option>
										<option>P.103</option>
										<option>P.201</option>
										<option>P.202</option>
										<option>P.203</option>
										<option>P.301</option>
										<option>P.302</option>
										<option>P.303</option>
									</select>
							</tr>
					
							<tr>
								<td colspan=2>
								<input id="btnChapNhan" type="submit" value="Hoàn tất" name="them"/>
								</td>
							</tr>
						</table>
						
					</form>
					
					
					
					<?php
						
						
						if(isset($_POST['them'])){
							if(empty($_POST['ten']) or empty($_POST['GVCN']) or empty($_POST['phonghoc'])) {echo'</br> <p style="color:red; "> Bạn chưa nhập thông tin đầy đủ ! </p> </br>';}
							else{
							$lop = $_POST['ten'];
							$GVchunhiem = $_POST['GVCN'];
							$phongHoc = $_POST['phonghoc'];
							$query = "INSERT INTO `lophoc`( `tenlop`, `chunhiem`, `phonghoc`) VALUES('$lop','$GVchunhiem','$phongHoc')";
							mysqli_query($conn,$query) or die("thêm dữ liệu thất bại");
							header('location:../lop.php');
							}
						}
						
					?>
					<br>Chọn menu bên trái hoặc click vào <a href="../lop.php" style="color: blue; text-decoration:underline;font-weight:bold;">đây</a> để quay lại danh sách lớp.
					
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