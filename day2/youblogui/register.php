<?php
session_start();
if (isset($_SESSION['user_email'])) { // ตรวจสอบว่ามีการล็อกอินอยู่หรือไม่
    header("location: home.php"); // ถ้ามีให้ redirect ไปหน้า home.php
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouBlog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container my-5">
        <h2>สมัครสมาชิก</h2>
        <hr>
        <br>
        <form action="./auth.php" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">อีเมล</label>
                <input name="email" type="email" class="form-control" placeholder="อีเมล" maxlength="50" required />
            </div>
            <div class="row g-2 mb-3">
                <div class="col">
                    <label for="fname" class="form-label">ชื่อ</label>
                    <input name="fname" type="text" class="form-control" placeholder="ชื่อ" maxlength="100" required />
                </div>
                <div class="col">
                    <label for="lname" class="form-label">นามสกุล</label>
                    <input name="lname" type="text" class="form-control" placeholder="นามสกุล" maxlength="100" required />
                </div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">รหัสผ่าน</label>
                <input name="password" type="password" class="form-control" placeholder="รหัสผ่าน" maxlength="20" required />
            </div>
            <button name="register" type="submit" class="btn btn-success">สมัครสมาชิก</button>
            <a href="./index.php" class="btn btn-light" role="button">
                ยกเลิก
            </a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>