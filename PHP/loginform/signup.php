<?php
include 'database.php';

$username='';
$email='';
$password='';
$cpassword='';

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

    $regUsername='/^Prime-[A-Za-z]+$/';
    $regEmail= '/^[A-Za-z]{1}[A-Za-z._0-9]{3,20}[@]{1}[a-z]{1,}[.]{1}[a-z]{1,7}+$/';
    $regPassword='/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[\W_]).{8,}$/';

    if(empty($username) || empty($email) || empty($password) || empty($cpassword)){
        echo "ALL fields is required....";
    }
    elseif(!preg_match($regUsername,$username) || strlen($username) <= 8){
        echo "UserName must atleast contain 8 alphabets and start with 'Prime-'.";
    }
    // elseif(!FILTER_INPUT(INPUT_POST,'email',FILTER_VALIDATE_EMAIL)){   //in php default email validation..it works for everything else as well
    //     echo "Invalid email format.";
    // }
    elseif(!preg_match($regEmail,$email)){
        echo "Invalid email format.";
    }
    elseif(!preg_match($regPassword,$password)){
        echo "Should contain atleast 1uppercase,1lowercase,1specialcharacter and 1number";
    }
    elseif(strcmp($password,$cpassword)){
        echo "Password doesnt match..";
    }
    else{
        // echo "The Username is: " . $_POST["username"] . "<br>";
        // echo "The Email is: " . $_POST["email"] . "<br>";
        // echo "The Password is: " . $_POST["password"] . "<br>";
        // echo "The CPassword is: " . $_POST["cpassword"] . "<br>"; 
        
        $pwd = sha1($password);

        $sql = "insert into `signup-database`(username,email,password) values('$username','$email','$pwd')" ;
        $res = mysqli_query($conn,$sql);

        if($res){
            echo "Data inserted..";
        }
        else{
            echo "Failed..".mysqli_error($conn);
        }
    }
}    

?>

<h2>--Sign Up--</h2>
<form action="#" method="post" class="signup-form">
    <label for="username">Username:</label>
    <input type="text"  name="username" value='<?php echo $username; ?>'><br><br>

    <label for="email">Email:</label>
    <input type="text"  name="email" value='<?php echo $email; ?>'><br><br>

    <label for="password">Password:</label>
    <input type="password"  name="password" value='<?php echo $password; ?>'><br><br>

    <label for="cpassword">Confirm Password:</label>
    <input type="password"  name="cpassword" value='<?php echo $cpassword; ?>'><br><br>

    <input type="submit" value="Sign Up" name="submit">
</form>
<!-- <style>
    body{
        background-color: #7698B3;
    }
    .signup-form{
        margin:auto;
        background-color: whitesmoke;
        padding: 10px;
        border-radius: 8px;
    }
</style> -->