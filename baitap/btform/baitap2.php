<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bài tập 2</title>
    <link href="../baitap.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
if(isset($_POST['submit']))
{
 $bk = $_POST["bk"];
 $dt = $bk * $bk * 3.14;
 $cv = 2 * $bk * 3.14;
}
?>
<form name="chuvi" method="post" action="baitap2.php">
    <table width="500" border="0" align="center">
        <tr align="center">
        <td class="a1" colspan="2">DIỆN TÍCH VÀ CHU VI HÌNH TRÒN</td>
</tr>
    <tr>
        <td>bán kính:</td>
        <td><input type="text" name="bk" value="<?php if(isset($_POST['bk'])) echo $bk;  ?>">
</tr>
    <tr>
        <td>diện tích:</td>
        <td><input type="text" name="dt" value="<?php if(isset($_POST['dt'])) echo $dt;  ?>" readonly="readonly">
</tr>
    <tr>
        <td>chu vi:</td>
        <td><input type="text" name="cv" value="<?php if(isset($_POST['cv'])) echo $cv;  ?>" readonly="readonly"> 

</tr>
<tr>
    <td><input type="submit" name="submit" value="Tính"></td>
</tr>
</body>
</html>