<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Họ: " . $_POST["fname"] . "<br>";
    echo "Tên: " . $_POST["lname"] . "<br>";
    echo "Mật khẩu: " . $_POST["pass"] . "<br>";
    echo "Ngày: " . $_POST["date"] . "<br>";
}
?>
