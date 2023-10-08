<?php
session_start(); // เปิด session เพื่อเก็บข้อมูลของผู้ใช้
include './middlewares/is_loggedin.php'; // ตรวจสอบว่ามีการล็อกอินอยู่หรือไม่
include './db.php'; // เรียกใช้ไฟล์ db.php เพื่อเชื่อมต่อฐานข้อมูล
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
        <h2>หน้าแรก</h2>
        <hr>
        <br>
        <div class="text-end">
            <a href="./create.php">
                <button class="btn btn-success">สร้างโพสต์ใหม่</button>
            </a>
        </div>
        <br>

        <div class="row">
            <?php
            /*
                Code here
            */
            ?>
            <div class="col-sm-12 col-md-4 col-lg-3 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title"><?php /* Code here */ ?></h4>
                        <div>
                            <a href="./view.php?postId=<?php /* Code here */ ?>" class="btn btn-primary mb-2" role="button">
                                รายละเอียด
                            </a>
                            <a href="./update.php?postId=<?php /* Code here */ ?>" class="btn btn-secondary mb-2" role="button">
                                แก้ไข
                            </a>
                            <!-- ส่งค่า postId ไปที่ post_actions.php โดยใช้ method GET -->
                            <a href="./post_actions.php?delete=delete&postId<?php /* Code here */ ?>" class="btn btn-outline-danger mb-2" role="button" onclick="return confirm('คุณต้องการลบใช่หรือไม่?')">>ลบ</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            /*
                Code here
            */
            ?>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>