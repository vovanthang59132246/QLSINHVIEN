<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bai tap 6</title>
    <link href="../baitap.css" rel="stylesheet" type="text/css">
</head>
<body>

<form method="post" name="pheptinh" action="kqtinh.php">
    <table width="500" border="0" align="center">
        <tr align="center">
        <td class="a7" colspan="2">PHÉP TÍNH TRÊN 2 SỐ</td>
</tr>
    <tr>
        <td class="a8">Chọn phép tính</td>  
        <td><input type="radio" name="pheptinh" value="cong"
        <?php if((isset($_POST['pheptinh']))&&($_POST['pheptinh']=='cong')) echo 'checked="checked"';?>>Cộng
        <input type="radio" name="pheptinh" value="tru"
        <?php if((isset($_POST['pheptinh']))&&($_POST['pheptinh']=='tru')) echo 'checked="checked"';?>>Trừ
        <input type="radio" name="pheptinh" value="nhan"
        <?php if((isset($_POST['pheptinh']))&&($_POST['pheptinh']=='nhan')) echo 'checked="checked"';?>>Nhan
        <input type="radio" name="pheptinh" value="chia"
        <?php if((isset($_POST['pheptinh']))&&($_POST['pheptinh']=='chia')) echo 'checked="checked"';?>>Chia
        <input type="radio" name="pheptinh" value="laydu"
        <?php if((isset($_POST['pheptinh']))&&($_POST['pheptinh']=='laydu')) echo 'checked="checked"';?>>lấy dư</td>
</tr>
    <tr>
        <td class="a7">Số thứ nhất:</td>
        <td><input type="text" name="st1" value="<?php if(isset($_POST["s1"])) echo $s1; else $s1=""; ?>"></td>
</tr>
    <tr>
        <td class="a7">Số thứ nhì:</td>
        <td><input type="text" name="st2" value="<?php if(isset($_POST["s2"])) echo $s2; else $s2=""; ?>"></td>

</tr>

<tr>
    <td></td>
    <td><input type="submit" name="submit" value="Tính"></td>
</tr>
</body>
</html>