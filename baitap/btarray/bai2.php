<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>test</title>
    <link href="../baitap.css" rel="stylesheet" type="text/css">

</head>
<body>
<?php
$text="";
$arr=array();
if (isset($_POST['submit'])){
$text=$_POST['dayso'];
$arr=explode(",",$text);
$kq=0;
foreach ($arr as $value) $kq=$kq+$value;
if (isset($_POST['reset'])){
    print_r($arr);
    $text=$kq="";
}
}
?>
<form method="post" action="">
    <table align="center" class="a4">
        <tr>
            <td colspan="3" class="a6"> <h1> Nhap va tinh tren day so</h1> </td>
        </tr>
        <tr>
            <td>Nhập dãy số</td>
            <td><input type="text" name="dayso" size="50"
                value="<?php echo  $text;?>"></td>
            <td style="color: #ff0a07">*</td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="submit" value="Tính tổng dãy số">
            </td>
        </tr>
        <tr>
            <td>Tổng dãy số</td>
            <td><input type="text" name="ketqua" value="<?php echo $kq;?>" readonly></td>
            <td></td>
        </tr>
        <tr>
            <td colspan="3" align="center"> (*) Cac so duoc nhap cach nhau bang dau "," </td>
        </tr>
    </table>
</form>
</body>
</html>
