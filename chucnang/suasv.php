<?php
		include('../config/constants.php'); 
        mysqli_query($conn, 'SET NAMES UTF8');
	$query = 'SELECT * FROM sinhvien WHERE sinhvienID = "'.$_GET['id'].'"' ;
	$result = mysqli_query($conn, $query);
								if(mysqli_num_rows($result) > 0){
									$i=0;
									while ($r = mysqli_fetch_assoc($result)){
										$i++;
										$ten= $r['name'];
										$ngaysinh=$r['birthday'];
										$sdt = $r['phonenumber'];
										$quequan = $r['address'];
									}
								}
	//echo $query;
	
?>
<!DOCTYPE html>
<html>
<head>
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <script src="https://use.fontawesome.com/aefb9ecc2c.js"></script>
    
    <title>Sửa Sinh Viên</title>
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
                      <li><a id="current"   href="../sinhvien.php" ><i class="fa fa-graduation-cap" aria-hidden="true"></i>SINH VIÊN</a></li>
                      <li><a  href="../giangvien.php"><i class="fa fa-users" aria-hidden="true"></i>GIẢNG VIÊN</a></li>
                      <li><a  href="../diemthi.php"><i class="fa fa-check" aria-hidden="true"></i>ĐIỂM THI</a></li>
                      <li><a href="../contact.php"><i class="fa fa-address-book" aria-hidden="true"  ></i>CONTACT</a></li>
					  <li><a href="../baitap.php"><i class="fa fa-book" aria-hidden="true"  ></i>BÀI TẬP</a></li>
                  </ul>

              </div>
              <div id="main-contain"> 
				<h2>Sửa thông tin Sinh Viên</h2>
				
				<div class="form">
					<span style="font-size: 20px; color: red; font-style: italic"><b>Mời nhập lại thông tin sinh viên <?php echo $ten ?>: </b> </span> </br>
					(Chú ý điền đủ thông tin)
					</br></br>
					<form method="post">
						<table>
							<tr> 
								<td>Họ tên </td>
								<td> <input type="text" name="ten" value="<?php echo $ten; ?>">
								</td>
							</tr>
							<tr>
								<td>Ngày sinh </td>
								<td> <input type="date" name="ngaysinh" value= "<?php echo $ngaysinh;?>" </td>
							</tr>
							<tr>
								<td>Số điện thoại </td>
								<td> <input type="text" name="sdt" value="<?php echo $sdt; ?>"></td>
							</tr>
							<tr>
								<td>Quê quán </td>
								<td> <input type="text" name="quequan" value="<?php echo $quequan; ?>"></td>
							</tr>
							<tr>
								<td colspan=2>
								<input id="btnChapNhan" type="submit" value="Hoàn tất" name="sua"/>
								</td>
							</tr>
						</table>
						
					</form>
					<br>Chọn menu bên trái hoặc click vào <a href="../sinhvien.php" style="color: blue; text-decoration:underline">đây</a> để quay lại danh sách sinh viên.
					
					
					<?php
						
						if(isset($_POST['sua'])){
							if(empty($_POST['ten']) or empty($_POST['ngaysinh']) or empty($_POST['sdt']) or empty($_POST['quequan'])) {echo'</br> <p style="color:red;font-weight:bold; "> vui lòng không để trống các trường!</p> </br>';}
							else{
								$id = $_GET['id'];
								$hotenSV = $_POST['ten'];
								$ngaySinh = $_POST['ngaysinh'];
								$sDt = $_POST['sdt'];
								$queQuan = $_POST['quequan'];
								$query = "UPDATE `sinhvien` SET name = '$hotenSV', birthday = '$ngaySinh', phonenumber = '$sDt', address = '$queQuan' WHERE sinhvienID = '$id'";
								mysqli_query($conn, $query) or die("sửa không thành công");
								header('location:../sinhvien.php');
							}
						}
					?>
					
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