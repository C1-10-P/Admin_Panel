<?php
session_start();

if (!isset($_SESSION["admin"]) || $_SESSION["admin"] !== true) {
    header("Location: login.php");
  
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php include("index.php") ;?>
<!-- 
    <a href="logout.php">Logout</a> -->
</body>
</html>
