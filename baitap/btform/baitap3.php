<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài tập 3</title>
    <link href="../baitap.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
if(isset($_POST['submit']))
{
 $ch = $_POST["ch"];
 $csc = $_POST["csc"];
 $csm = $_POST["csm"];
 $tt = ($csm-$csc) * 2000;
}
?>
<form method="post" name="tiendien" action="baitap3.php">
    <table width="500" border="0" align="center">
        <tr align="center">
        <td class="a1" colspan="2">THANH TOÁN TIỀN ĐIỆN</td>
</tr>
    <tr>
        <td>Tên chủ hộ:</td>
        <td><input type="text" name="ch" value="<?php if(isset($_POST['ch'])) echo $ch; ?>">
</tr>
    <tr>
        <td>chỉ số cũ:</td>
        <td><input type="text" name="csc" value="<?php if(isset($_POST['csc'])) echo $csc; ?>">(KW)</td>
</tr>
    <tr>
        <td>chỉ số mới:</td>
        <td><input type="text" name="csm" value="<?php if(isset($_POST['csm'])) echo $csm; ?>">(KW)</td>

</tr>
<tr>
        <td>Đơn giá:</td>
        <td><input type="text" name="dg" value="2000" readonly="readonly">(VNĐ)</td>

</tr>
<tr>
        <td>Số tiền thanh toán:</td>
        <td><input type="text" name="tt" value="<?php if(isset($_POST['tt'])) echo $tt; ?>">(VNĐ)</td>

</tr>
<tr>
    <td><input type="submit" name="submit" value="Tính"></td>
</tr>
</body>
</html>