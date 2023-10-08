<?php
session_start();
include './middlewares/is_loggedin.php'; // ตรวจสอบว่ามีการล็อกอินอยู่หรือไม่
include './db.php'; // เรียกใช้ไฟล์ db.php

$postId = $_GET['postId']; // รับค่า postId ที่ส่งมาจาก url
$sql = "SELECT * FROM post WHERE id=$postId"; // ดึงข้อมูลโพสต์ที่ต้องการแก้ไข
$result = mysqli_query($conn, $sql); // สั่งให้คิวรี่คำสั่ง sql
$post = $result->fetch_assoc(); // ดึงข้อมูลออกมา fetch_assoc คือ ดึงข้อมูลเป็น array 1 มิติ เช่น ['id' => 1, 'title' => 'Hello World', 'content' => '...']
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
        <h2>ดูข้อมูลโพสต์ ID : <span class="text-primary"><?= $post['id']; ?></span></h2>
        <hr>
        <br>
        <p>
            หัวข้อ : <?= $post['title']; ?>
        </p>
        <p>
            รายละเอียด : <?= $post['content']; ?>
        </p>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>