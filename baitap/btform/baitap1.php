<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bài tập 1</title>
    <link href="../baitap.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
if(isset($_POST['submit']))
{
 $cd = $_POST["cd"];
 $cr = $_POST["cr"];
 $cd =$cd + 0;
 $cr =$cr + 0;
 $dt = $cd * $cr ;
}
?>

<form method="post" name="phep_toan">
<table width="500" border="0" align="center">
        <tr align="center">
        <td class="a1" colspan="2">DIỆN TÍCH HÌNH CHỮ NHẬT</td>
</tr>
<tr>
    <td>Chiều dài:</td>
    <td> <input id="cd" type="text" name="cd" value="<?php  if(isset($_POST['cd'])) echo $cd;  ?>"></td>
</tr>
<tr>
    <td>Chiểu rộng:</td>
    <td><input id="cr" type="text" name="cr" value="<?php  if(isset($_POST['cr'])) echo $cr;  ?>"></td>
</tr>
<tr>

    <td>diện tích:</td> 
    <td><input type="text" name="dt" value="<?php  if(isset($_POST['dt'])) echo $dt;?>" readonly="readonly"></td>
</tr>
<tr>
    <td></td>
    <td align="center"><input type="submit" name="submit" value="tính"></td>
</tr>

</body>
</html>