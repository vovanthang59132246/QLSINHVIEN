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
    
    <title>Sinh Viên</title>
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
                      <li><a href="../lop.php"><i class="fa fa-users" aria-hidden="true"></i>LỚP</a></li>
                      <li><a id="current"  href="../sinhvien.php" ><i class="fa fa-graduation-cap" aria-hidden="true"></i>SINH VIÊN</a></li>
                      <li><a  href="../giangvien.php"><i class="fa fa-users" aria-hidden="true"></i>GIẢNG VIÊN</a></li>
                      <li><a   href="../diemthi.php"><i class="fa fa-check" aria-hidden="true"></i>ĐIỂM THI</a></li>
                      <li><a href="../contact.php"><i class="fa fa-address-book" aria-hidden="true"  ></i>CONTACT</a></li>
					  <li><a href="../baitap.php"><i class="fa fa-book" aria-hidden="true"  ></i>BÀI TẬP</a></li>
                  </ul>

              </div>
              <div id="main-contain"> 
				<h2>Thêm Sinh Viên</h2>
				
				<div class="form">
					<span style="font-size: 20px; color: red; font-style: italic"><b>Mời nhập thông tin sinh viên : </b> </span> </br>
					(Chú ý điền đủ thông tin)
				
					</br></br>
					<form method="post">
						<table>
							<tr> 
								<td>Họ tên </td>
								<td> <input type="text" name="ten" autofocus></td>
							</tr>
							
							<tr>
								<td>Ngày sinh </td>
								<td> <input type="date" name="ngaysinh"></td>
							</tr>
							<tr>
								<td>Số điện thoại </td>
								<td> <input type="text" name="sdt"></td>
							</tr>
							<tr>
								<td>Quê quán </td>
								<td> <input type="text" name="quequan"></td>
							</tr>
							<tr>
								<td>Chọn Lớp  </td>
								<td> <select name="lop">
									 <?php
											 $q = "SELECT * FROM lophoc";
											 $rs = mysqli_query($conn, $q);
											 if(mysqli_num_rows($rs)>0)
											 {
												 $i =0;
												 while ($row  = mysqli_fetch_assoc($rs))
												 {
													 $i++;
													 $lopID = $row['lopID'];
													 $tenlop = $row['tenlop'];
	
													// echo $tenlop;
													echo"<option value= '$lopID'>$tenlop</option>";
												 }
											 }
									 ?>
									</select>
								</td>
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
							if(empty($_POST['ten']) or empty($_POST['ngaysinh']) or empty($_POST['sdt']) or empty($_POST['quequan'])) {echo'<p style="color:red;font-weight:bold; "> Bạn chưa nhập thông tin đầy đủ !</p> ';}
							else
							{ 
								$hotenSV = $_POST['ten'];
								$ngaySinh = $_POST['ngaysinh'];
								$lopID = $_POST['lop'];
								$sDt = $_POST['sdt'];
								$queQuan = $_POST['quequan'];
								$query = "INSERT INTO `sinhvien`( `name`, `lopID`,`birthday`, `phonenumber`, `address`) VALUES('$hotenSV','$lopID','$ngaySinh','$sDt','$queQuan')";
								mysqli_query($conn,$query) or die("thêm dữ liệu thất bại");
								header('location:../sinhvien.php');
							}
						}
					?>
					<br>
					Chọn menu bên trái hoặc click vào <a href="../sinhvien.php" style="color: blue; text-decoration:underline; font-weight:bold;">đây</a> để quay lại danh sách sinh viên.
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
