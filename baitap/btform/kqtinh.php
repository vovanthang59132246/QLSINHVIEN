<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KẾT QUẢ</title>
    <link href="../baitap.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
    $pheptinh=$so1=$so2=$kq="";
    if(isset($_POST["submit"])&& isset($_POST["pheptinh"]))
{
    $s1 = $_POST["st1"];
    $s2 = $_POST["st2"];
    switch ($_POST["pheptinh"]){
        case "cong": {
            $pheptinh="cộng";
            $kq=$s1+$s2;
            break;
        }
        case "tru": {
            $pheptinh="trừ";
            $kq=$s1-$s2;
            break;}
        case "nhan": {
            $pheptinh="nhân";
            $kq=$s1*$s2;
            break;}
        case "chia": {
            if($s2!=0){
            $pheptinh="chia";
          
            $kq=$s1/$s2;
            }
            else{
                echo '<script language="javascript">';
   
        echo 'alert("không thể chia cho 0")';
        echo '</script>';
        header( "refresh:2;url=baitap7.php" );
            }
            break;}
        case "laydu": {
            if($s2!=0){
            $pheptinh="lấy dư";
            $kq=$s1%$s2;
            }
            else{
                echo '<script language="javascript">';
   
                echo 'alert("không thể chia cho 0")';
                echo '</script>';
                header( "refresh:2;url=baitap7.php" );
            }
            ;break;}

    };
}
?>
<form method="post" name="kqtinh" action="kqtinh.php">
    <table width="500" border="0" align="center">
        <tr align="center">
        <td class="a7" colspan="2">PHÉP TÍNH TRÊN 2 SỐ</td>
</tr>
    <tr>
        <td class="a8">Chọn phép tính</td>  
        <td><input type="radio" name="pheptinh" checked> <?php echo $pheptinh?>
</tr>
    <tr>
        <td>Số 1:</td>
        <td><input type="text" name="s1" value="<?php echo $s1 ?>"></td>
</tr>
    <tr>
        <td>Số 2:</td>
        <td><input type="text" name="s2" value="<?php echo $s2 ?>"></td>

</tr>
<tr>
        <td>kết quả:</td>
        <td><input type="text" name="kq" value="<?php echo $kq ?>"></td>

</tr>

<tr>
    <td></td>
    <td><input type="submit" name="submit" value="Tính"></td>
</tr>
</body>
</html>