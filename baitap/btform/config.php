<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bt8</title>
    <link href="chuvi.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php

echo  "ban da nhap thanh cong duoi day la thong tin ban nhap\n"."<br>";
$name = $_POST["name"];
$address = $_POST["address"];
$phone = $_POST["phone"];
$gender = $_POST["gender"];
$country = $_POST["country"];
$ketqua = $_POST["ketqua"];
echo "ho ten:\n"."$name"."<br>";
echo "address:\n"."$address"."<br>";
echo "phone:\n"."$phone"."<br>";
echo "gender:\n"."$gender"."<br>";
echo "country:\n"."$country"."<br>";
echo "Note:\n"."$ketqua";


?>

</body>
</html>