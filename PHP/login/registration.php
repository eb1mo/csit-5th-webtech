<?php
    include 'config.php';

    if(!empty($_SESSION["id"])){
        header("Location: index.php");
    }
    
    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];

        $duplicate = mysqli_query($connect, "select * from tbl_user where username = '$username' or email = '$email'");

        if(mysqli_num_rows($duplicate) > 0){
            echo "Username or Email has already been taken";
        }

        else{
            if($password == $confirm_password){
                $query = "insert into tbl_user values('$name', '$username', '$email', '$password', '')";
                mysqli_query($connect, $query);
                echo "Registration successful";
            }

            else{
                echo "Password doesn't match.";
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <h2>Registration</h2>
    <form action="#" method="post">
        
        <label for="name">Name: </label><br>
        <input type="text" name="name"><br><br>

        <label for="username">Username: </label><br>
        <input type="text" name="username"><br><br>

        <label for="email">Email: </label><br>
        <input type="text" name="email"><br><br>

        <label for="password">Password: </label><br>
        <input type="password" name="password"><br><br>

        <label for="confirm_password">Confirm Password: </label><br>
        <input type="password" name="confirm_password"><br><br>

        <input type="submit" name="submit" value="Sign Up"><br><br>
    </form>
    <a href="login.php">Already have an account? Log In</a>
</body>
</html>