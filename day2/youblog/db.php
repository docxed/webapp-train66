<?php
$host = 'localhost'; // ชื่อ host
$user = 'root'; // ชื่อ user ที่ใช้ในการล็อกอิน
$password = '123456'; // รหัสผ่าน
$name = 'youblog'; // ชื่อฐานข้อมูล

$conn = new mysqli($host, $user, $password, $name); // สร้าง connection ไปยังฐานข้อมูล
if ($conn->connect_error) { // ตรวจสอบว่าเชื่อมต่อสำเร็จหรือไม่
    die('ไม่สามารถเชื่อมต่อฐานข้อมูลได้' . $conn->connect_error); // ถ้าไม่สำเร็จให้แสดง error
}
