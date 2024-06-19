<?php
    include 'config.php';
    if(!empty($_SESSION["id"])){
        header("Location: index.php");
    }
    
    if(isset($_POST["submit"])){
        $usernameemail = $_POST["usernameemail"];
        $password = $_POST["password"];
        $result = mysqli_query($connect, "select * from tbl_user where Username = '$usernameemail' or Email = '$usernameemail'");
        $row = mysqli_fetch_assoc($result);

        if(mysqli_num_rows($result) > 0){
            if($password == $row["password"]){
                $_SESSION["Log In"] = true;
                $_SESSION["id"] = $row["id"];
                header("Location: index.php");
            }

            else{
                echo "Wrong Password";
            }
        }

        else{
            echo "User not registered";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>
    <h2>Log In</h2>
    <form action="#" method="post">

        <label for="usernameemail">Username or Email: </label><br>
        <input type="text" name="usernameemail" id="usernameemail"><br><br>

        <label for="password">Password: </label><br>
        <input type="password" name="password" id="password"><br><br>

        <input type="submit" name="submit" value="Log In"><br><br>
    </form>

    <a href="registration.php">Don't have an account? Sign Up</a>
</body>
</html>