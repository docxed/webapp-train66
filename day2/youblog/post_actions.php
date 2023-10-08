<?php
include './db.php'; // เรียกใช้ไฟล์ db.php
if (isset($_POST['create'])) { // สร้างโพสต์
    $title = $_POST['title']; // รับค่า title จากฟอร์ม
    $content = $_POST['content']; // รับค่า content จากฟอร์ม
    $sql = "INSERT INTO post (title, content) VALUES ('$title', '$content')"; // คำสั่ง sql เพื่อเพิ่มข้อมูล
    $result = mysqli_query($conn, $sql); // สั่งให้คิวรี่คำสั่ง sql
    if ($result) { // ตรวจสอบว่าสำเร็จหรือไม่
        echo '<script>alert("สร้างโพสต์สำเร็จ"); window.location.href="./home.php";</script>'; // สั่งให้ alert และ redirect ไปหน้า home.php
    } else { // กรณีไม่สำเร็จ
        echo 'สร้างโพสต์ไม่สำเร็จ' . $conn->error; // แสดง error
    }
} else if (isset($_POST['update'])) { // แก้ไขโพสต์
    $title = $_POST['title']; // รับค่า title จากฟอร์ม
    $content = $_POST['content']; // รับค่า content จากฟอร์ม
    $postId = $_POST['postId']; // รับค่า postId จากฟอร์ม
    $sql = "UPDATE post SET title='$title', content='$content' WHERE id=$postId"; // คำสั่ง sql เพื่อแก้ไขข้อมูล
    $result = mysqli_query($conn, $sql); // สั่งให้คิวรี่คำสั่ง sql
    if ($result) { // ตรวจสอบว่าสำเร็จหรือไม่
        echo '<script>alert("แก้ไขโพสต์สำเร็จ"); window.location.href="./update.php?postId=' . $postId . '";</script>'; // สั่งให้ alert และ redirect ไปหน้า update.php
    } else { // กรณีไม่สำเร็จ
        echo 'แก้ไขโพสต์ไม่สำเร็จ' . $conn->error; // แสดง error
    }
} else if (isset($_GET['delete'])) { // ลบโพสต์
    $postId = $_GET['postId']; // รับค่า postId จาก url
    $sql = "DELETE FROM post WHERE id=$postId"; // คำสั่ง sql เพื่อลบข้อมูล
    $result = mysqli_query($conn, $sql); // สั่งให้คิวรี่คำสั่ง sql
    if ($result) { // ตรวจสอบว่าสำเร็จหรือไม่
        echo '<script>alert("ลบโพสต์สำเร็จ"); window.location.href="./home.php";</script>'; // สั่งให้ alert และ redirect ไปหน้า home.php
    } else { // กรณีไม่สำเร็จ
        echo 'ลบโพสต์ไม่สำเร็จ' . $conn->error; // แสดง error
    }
}
