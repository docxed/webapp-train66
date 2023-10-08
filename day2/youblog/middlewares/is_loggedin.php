<?php
if (!isset($_SESSION['user_email'])) { // ตรวจสอบว่ามีการล็อกอินอยู่หรือไม่
    header("location: index.php"); // ถ้าไม่มีให้ redirect ไปหน้า index.phps
}
