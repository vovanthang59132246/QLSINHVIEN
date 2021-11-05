<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <script src="https://use.fontawesome.com/aefb9ecc2c.js"></script>
    
    <title>BÀI TẬP</title>
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

</br>
    <div class="body">
      <div class="container"> 
        <div id="menu">
                  <ul>
                      <li><a  href="trangchu.php  "><i class="fa fa-home" aria-hidden="true"></i></i>TRANG CHỦ</a></li>
                      <li><a href="lop.php"><i class="fa fa-users" aria-hidden="true"></i>LỚP</a></li>
                      <li><a  href="sinhvien.php" ><i class="fa fa-graduation-cap" aria-hidden="true"></i>SINH VIÊN</a></li>
                      <li><a  href="giangvien.php"><i class="fa fa-users" aria-hidden="true"></i>GIẢNG VIÊN</a></li>
                      <li><a href="diemthi.php"><i class="fa fa-check" aria-hidden="true"></i>ĐIỂM THI</a></li>
                      <li><a href="contact.php"><i class="fa fa-address-book" aria-hidden="true"  ></i>CONTACT</a></li>
                      <li><a id="current"  href="baitap.php"><i class="fa fa-book" aria-hidden="true"></i>BÀI TẬP</a></li>


                  </ul>

            	</div>
              <div id="main-contain"> 
			  <h2>ĐIỂM THI </h2>
				<div class= "chucnang">
						<div class="infGiangvien">
						<div>
							<a href="baitapsql.php"><img src="image/sql.png" width="120px" height="120px";>  </a>
						</div>
						<div>
							<b> BÀI TẬP SQL </b> </br>
						</div>
					</div>
					<div class="infGiangvien">
						<div>
							<a href="btarray.php"><img src="image/form.png" width="120px" height="120px";>  </a>
						</div>
						<div>
							<b> BÀI TẬP FORM  </b> </br>
						</div>
					</div>
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
