<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="./css/bootstrap.css" />
    <script src="./js/popper.js"></script>
    <script src="./js/bootstrap.js"></script>
</head>

<body>
    <?php 
include "./navbar.php";

?>
    <div class="container">
        <h1> สมัครสมาชิก </h1>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <form action="reg_insert.php" method="POST">
                    Username:
                    <input type="text" name="username" class="form-control" />
                    Password:
                    <input type="text" name="password" class="form-control" />
                    ชื่อ:
                    <input type="text" name="firstname" class="form-control" />
                    นามสกุล:
                    <input type="text" name="lastname" class="form-control" />
                    อีเมล:
                    <input type="text" name="email" class="form-control" />
                    ที่อยู่:
                    <textarea type="text" name="address" row="4" class="form-control"></textarea>
                    <input type="summit" value="บันทึกข้อมูล" class="btn btn-primary" />

                </form>
            </div>
        </div>
    </div>
</body>

</html>