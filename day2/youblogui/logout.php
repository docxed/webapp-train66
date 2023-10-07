<?php
session_start(); // เปิด session เพื่อเก็บข้อมูลของผู้ใช้
session_destroy(); // ลบ session ทั้งหมด
header("location: index.php"); // สั่งให้ redirect ไปหน้า index.php
