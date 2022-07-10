<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./css/bootstrap.css" />
    <script src="./js/popper.js"></script>
    <script src="./js/bootstrap.js"></script>
</head>

<body>
    <?php
    include "./navbar.php";

    ?>
    <div class="container">
    <?php

echo "ยินดีต้อนรับเเข้าสู่เว็บไซด์";
echo "<h1> welcome to website </h1>";

$year = 2565;
$crish = $year -543;
echo "ปี พ.ศ. $year ค.ศ. $crish <br/>";
echo "ปี พ.ศ.". $year. "ปี ค.ศ." .$crish. "<br/>";
$salary = 25000;
echo "เงินเดือน $salary บาท <br/>";
echo "เงินเดือน" . $salary . "บาท";

$name = "ดิชพงศ์ ลีละชาต";
$age = 40;
echo "สวัสดี" . $name ;
echo "คุณมีอายุ" . $age."ปี";
$birth = $year-$age;
echo "<br/> พ.ศ. เกิด ". $birth;








?>
</div>
</body>

</html>