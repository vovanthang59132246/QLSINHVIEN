<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài tập 4</title>
    <link href="../baitap.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
if(isset($_POST['submit']))
{
$t = $_POST["t"];
$l = $_POST["l"];
$h = $_POST["h"];
$dc = $_POST["dc"];
$kq= $_POST["kq"];
$td = $t + $l + $h;
if($td > $dc && $t != 0 && $l != 0 && $h != 0){
    $kq = "Đậu";
}
else{
    $kq = "Rớt";
}
}
?>
<form method="post" name="kqthidh" action="baitap4.php">
    <table width="500" border="0" align="center">
        <tr align="center">
        <td class="a3" colspan="2">KẾT QUẢ THI ĐẠI HỌC</td>
</tr>
    <tr>
        <td>Toán:</td>
        <td><input type="text" name="t" value="<?php if(isset($_POST['t'])) echo $t; ?>">
</tr>
    <tr>
        <td>Lý:</td>
        <td><input type="text" name="l" value="<?php if(isset($_POST['l'])) echo $l; ?>"></td>
</tr>
    <tr>
        <td>Hóa:</td>
        <td><input type="text" name="h" value="<?php if(isset($_POST['h'])) echo $h; ?>"></td>

</tr>
<tr>
        <td>Điểm chuẩn:</td>
        <td><input type="text" name="dc" value="<?php if(isset($_POST['dc'])) echo $dc; ?>"></td>

</tr>
<tr>
        <td>Tổng điểm:</td>
        <td><input type="text" name="td" value="<?php if(isset($_POST['td'])) echo $td; ?>" readonly="readonly"></td>

</tr>
<tr>
        <td>kết quả thi:</td>
        <td><input type="text" name="kq" value="<?php if(isset($_POST['kq'])) echo $kq; ?>" readonly="readonly"></td>

</tr>
<tr>
    <td></td>
    <td><input type="submit" name="submit" value="Xem kết quả"></td>
</tr>
</body>
</html>