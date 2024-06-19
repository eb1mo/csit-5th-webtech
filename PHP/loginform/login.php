<?php
include 'database.php';

session_start();
$username='';
$password='';

if (isset($_GET['lgt']) && $_GET['lgt'] == 'true') {
    echo "<p>Invalid username or password. Please try again.</p>";
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $username=$_POST['username'];
    $password=$_POST['password'];
    $pwd= sha1($password);

    $sql = "SELECT * FROM `signup-database` where username= '$username' AND password='$pwd'";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)==1){
        $_SESSION['username'] = $username;
        header("location:welcome.php");
    }
    else{
        header("location:login.php?lgt=true");
    }
}

?>

<h2>--LogIn--</h2>
<form action="#" method="post">
    <label for="username">Username:</label>
    <input type="text"  name="username" value='<?php echo $username; ?>'><br><br>

    <label for="password">Password:</label>
    <input type="password"  name="password" value='<?php echo $password; ?>'><br><br>

    <input type="submit" value="LogIn" name="submit">
    <a href="signup.php">SignUp?</a>
</form>