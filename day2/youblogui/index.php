<?php
session_start();
if (isset($_SESSION['user_email'])) { // ตรวจสอบว่ามีการล็อกอินอยู่หรือไม่
    header("location: home.php"); // ถ้ามีการล็อกอินอยู่ให้ redirect ไปที่ home.php
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
        <h2>ล็อกอิน</h2>
        <hr>
        <br>
        <!-- ส่งข้อมูลไปที่ auth.php โดยใช้ method POST -->
        <form action="./auth.php" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">อีเมล</label>
                <input name="email" type="email" class="form-control" placeholder="อีเมล" maxlength="50" required />
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">รหัสผ่าน</label>
                <input name="password" type="password" class="form-control" placeholder="รหัสผ่าน" maxlength="20" required />
            </div>
            <button name="login" type="submit" class="btn btn-primary">ล็อกอิน</button>
            <a href="./regster.php" class="btn btn-light" role="button">
                สมัครสมาชิก
            </a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>