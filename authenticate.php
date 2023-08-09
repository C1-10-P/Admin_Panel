<?php
session_start();

$adminUsername = "admin";
$adminPassword = "admin123"; // You should hash passwords in a real application

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === $adminUsername && $password === $adminPassword) {
        $_SESSION["admin"] = true;
        header("Location: admin_panel.php");
        exit();
    } else {
       
        require('404-1.php');
    }
}
?>
