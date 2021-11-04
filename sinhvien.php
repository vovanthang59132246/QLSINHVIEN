<!DOCTYPE html>
<html>
<?php
	include('config/constants.php'); 
	mysqli_query($conn, 'SET NAMES UTF8');
?>

<head>
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <script src="https://use.fontawesome.com/aefb9ecc2c.js"></script>
    
    <title>Sinh Viên</title>
    <link rel="stylesheet" href="css/qlsvs.css">
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
                      <li><a href="trangchu.php"><i class="fa fa-home"></i>Trang chủ</a></li>
                      <li><a href="lop.php"><i class="fa fa-users"></i>LỚP</a></li>
                      <li><a id="current" href="sinhvien.php" ><i class="fa fa-graduation-cap"></i>SINH VIÊN</a></li>
                      <li><a href="giangvien.php"><i class="fa fa-users"></i>GIẢNG VIÊN</a></li>
                      <li><a href="diemthi.php"><i class="fa fa-check"></i>ĐIỂM THI</a></li>
                      <li><a href="contact.php"><i class="fa fa-address-book"></i>Contact</a></li>
					  <li><a href="baitap.php"><i class="fa fa-book" aria-hidden="true"></i>BÀI TẬP</a></li>

                  </ul>

              </div>
              <div id="main-contain"> 
			  <h2>DANH SÁCH SINH VIÊN </h2><br>
			  <div id="listSV">
				<form method= "post" id= "f_search"> <input id = "txtSearch" type="search" name= "search" placeholder = "Nhập tên hoặc MSSV">
				<input id= "btnSearch" type = "submit" name = "tim" value="" > 
				</form> 

							  <table width = "70%">
								<tr>
									<th>STT</th>
									
									<th>Họ Tên</th>
									<th>MSSV</th>
									<th>Ngày sinh</th>
									<th>SĐT</th>
									<th>Địa chỉ</th>
									<th>Chức năng</th>
								</tr>
							 
							<?php
								if (isset($_POST['tim'])){
									$giatri = $_POST['search'];
									//echo $giatri;
									if (empty($giatri))
									{
										echo "Bạn muốn tìm gì?";
									}
									   else
									{
										$query = "SELECT * FROM sinhvien WHERE sinhvien.name LIKE '%".$giatri."%' or sinhvien.sinhvienID = '$giatri'";
									}
									}
								else{
								$query = "SELECT * FROM sinhvien";
								}
								$result = mysqli_query($conn, $query);
								if(mysqli_num_rows($result) > 0){
									$i=0;
									while ($r = mysqli_fetch_assoc($result)){
										$i++;
										$sinhvienID = $r['sinhvienID'];
										$ten= $r['name'];
										$ngaysinhsql =$r['birthday'];
										$ngaysinh = date("d-m-Y", strtotime($ngaysinhsql));
										$sdt = $r['phonenumber'];
										$quequan = $r['address'];
										echo "<tr> ";
										echo "<td>$i</td>";	
										echo "<td>$ten</td>"	;
										echo "<td>$sinhvienID</td>";
										echo "<td>$ngaysinh</td>";	
										echo "<td>$sdt</td>"	;
										echo "<td>$quequan</td>"	;
										echo " <td style='text-align: center;'> <a href='chucnang/suasv.php?id=$sinhvienID'><input id='btnSua' type='button' value='sửa' '></a>   <a href='chucnang/xoasv.php?id=$sinhvienID'><input id='btnXoa' type='button' value='xóa'></a> <a href='thongtinsv.php?id=$sinhvienID'><input id='btnChitiet' type='button' value='chi  tiết' '></a>  </td>";
			
										}
									}
								
							?>
							</table>
					  </div>
					
			  <br>
				<form id="formChucnang">
				<a href="chucnang/themSV.php" ><input  id="btnThemSV" type="button" value="THÊM SV"> </a>
				</form>
		
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