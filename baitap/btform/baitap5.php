<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bài tập 5</title>
    <link href="../baitap.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
if(isset($_POST['submit']))
{
$gbd = $_POST["gbd"];
$gkt = $_POST["gkt"];
$ttt = 0;
if($gbd < $gkt){
    $ttt = ($gkt - $gbd) * 45000;

}
else{
    echo '<script type ="text/JavaScript">';  

   echo 'alert("Giờ kết thúc phải > giờ bắt đầu")';
   echo '</script>';  

}
}
?>
<form method="post" name="karaoke" action="baitap5.php">
    <table class="a4" width="500" border="0" align="center">
        <tr align="center">
        <td class="a6" colspan="2">TÍNH TIỀN KARAOKE</td>
</tr>
    <tr>
        <td>Giờ bắt đầu:</td>
        <td><input type="text" name="gbd" value="<?php if(isset($_POST['gbd'])) echo $gbd; ?>">
</tr>
    <tr>
        <td>Giờ kết thúc:</td>
        <td><input type="text" name="gkt" value="<?php if(isset($_POST['gkt'])) echo $gkt; ?>"></td>
</tr>
    <tr>
        <td>Tiền thanh toán:</td>
        <td><input type="text" name="ttt" value="<?php if(isset($_POST['ttt'])) echo $ttt; ?>"></td>

</tr>

<tr>
    <td></td>
    <td><input type="submit" name="submit" value="Tính tiền"></td>
</tr>
</body>
</html>