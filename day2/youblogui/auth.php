<?php
include './db.php'; // เรียกใช้ไฟล์ db.php
session_start(); // เปิด session เพื่อเก็บข้อมูลของผู้ใช้

if (isset($_POST['register'])) { // สมัครสมาชิก
    $email = $_POST['email']; // รับค่า email จากฟอร์ม
    $fname = $_POST['fname']; // รับค่า fname จากฟอร์ม
    $lname = $_POST['lname']; // รับค่า lname จากฟอร์ม
    $password = $_POST['password']; // รับค่า password จากฟอร์ม

    $sql1 = "SELECT * FROM user WHERE email='$email'"; // คำสั่ง sql เพื่อเลือกข้อมูล (เช็คว่ามี email นี้ในฐานข้อมูลหรือไม่)
    $result1 = mysqli_query($conn, $sql1); // สั่งให้คิวรี่คำสั่ง sql
    if (mysqli_num_rows($result1) > 0) { // ตรวจสอบว่ามีผลลัพธ์หรือไม่ (mysqli_num_rows คือ นับจำนวนแถวที่ได้จากการ query)
        echo '<script>alert("อีเมลนี้มีผู้ใช้แล้ว"); window.location.href="./register.php";</script>'; // สั่งให้ alert และ redirect ไปหน้า index.php
    } else { // กรณีไม่มีผลลัพธ์
        $sql2 = "INSERT INTO user (email, fname, lname, password) VALUES ('$email', '$fname', '$lname', '$password')"; // คำสั่ง sql เพื่อเพิ่มข้อมูล
        $result2 = mysqli_query($conn, $sql2); // สั่งให้คิวรี่คำสั่ง sql
        if ($result2) { // ตรวจสอบว่าสำเร็จหรือไม่
            echo '<script>alert("สมัครสมาชิกสำเร็จ"); window.location.href="./index.php";</script>'; // สั่งให้ alert และ redirect ไปหน้า index.php
        } else { // กรณีไม่สำเร็จ
            echo 'สมัครสมาชิกไม่สำเร็จ' . $conn->error; // แสดง error
        }
    }
} else if (isset($_POST['login'])) { // ล็อกอิน
    $email = $_POST['email']; // รับค่า email จากฟอร์ม
    $password = $_POST['password']; // รับค่า password จากฟอร์ม

    $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'"; // คำสั่ง sql เพื่อเลือกข้อมูล
    $result = mysqli_query($conn, $sql); // สั่งให้คิวรี่คำสั่ง sql
    if ($result->num_rows > 0) { // ตรวจสอบว่ามีผลลัพธ์หรือไม่
        $row = $result->fetch_assoc(); // ดึงข้อมูลออกมา

        // สร้าง session ไว้เก็บข้อมูลของผู้ใช้ (session คือ ตัวแปรที่สร้างขึ้นมาเพื่อเก็บข้อมูลไว้ใช้งาน ซึ่งต่างจากตัวแปรทั่วไปที่จะหายไปเมื่อปิดหน้าเว็บ)
        $_SESSION['user_id'] = $row['id']; // สร้าง session ไว้เก็บ id
        $_SESSION['user_email'] = $row['email']; // สร้าง session ไว้เก็บ email

        echo '<script>window.location.href="./home.php";</script>'; // สั่งให้ redirect ไปหน้า home.php
    } else { // กรณีไม่มีผลลัพธ์
        echo '<script>alert("อีเมลหรือรหัสผ่านไม่ถูกต้อง"); window.location.href="./index.php";</script>'; // สั่งให้ alert และ redirect ไปหน้า index.php
    }
}
