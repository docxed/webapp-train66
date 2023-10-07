<?php
session_start(); // เปิด session เพื่อเก็บข้อมูลของผู้ใช้
include './middlewares/is_loggedin.php'; // ตรวจสอบว่ามีการล็อกอินอยู่หรือไม่
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

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="./home.php">You Blog</a>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./home.php">หน้าแรก</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo $_SESSION['user_email']; ?>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item text-danger" href="./logout.php">ออกจากระบบ</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container my-5">
        <!-- Content -->
        <h2>สร้างโพสต์ใหม่</h2>
        <hr>
        <br>
        <form action="./post_actions.php" method="POST">
            <div class="mb-3">
                <label for="title" class="form-label">หัวข้อ</label>
                <input name="title" type="text" class="form-control" placeholder="หัวข้อ" maxlength="100" required />
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">เนื้อหา</label>
                <textarea name="content" class="form-control" placeholder="เนื้อหา" required></textarea>
            </div>
            <button name="create" type="submit" class="btn btn-success">โพสต์</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>