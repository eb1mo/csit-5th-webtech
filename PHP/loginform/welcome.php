<?php
session_start();
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
    header("Location: login.php");
    exit;
}
echo "<h2>Welcome Welcome Welcome</h2>" . $_SESSION['username'];
echo '<a href="./logout.php">Logout</a>';
?>
<br>
