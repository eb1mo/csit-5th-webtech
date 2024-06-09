<?php
// hw - name must be greater than 8 chars
// procedural, object , PDO
//Procedural

include "database.php";
$name = $email = $roll = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST["myname"];
    $email = $_POST["email"];
    $roll = $_POST["roll"];
    // $regName = "/^[A-Z a-z]+$/";
    $regName = "/^[A-Z a-z]{8,}$/";
    $regRoll = "/^[0-9]+$/";

    if(empty($_POST['myname']) || empty($_POST['email']) || empty($_POST['roll'])){
        echo("All fields are required");
    }
    elseif(!preg_match($regName, $name)){
        echo ("Name should be more than 8 characters & should only be alphabets.");
    }
    elseif(!FILTER_INPUT(INPUT_POST,"email",FILTER_VALIDATE_EMAIL)){
        echo ("Email not valid.");
    }
    elseif(!preg_match($regRoll, $roll)){
        echo ("Roll should only be numbers.");
    }
    else {
       $sql = "insert into tbl_student(name,roll,email)
       values('$name',$roll,'$email')";
       $res = mysqli_query($conn,$sql);
    
    if($res){
        header('location:list.php');
    }
    else{
        echo "failed".mysqli_error($conn);
    }
    }
    // echo "The entered name is " . $_POST['myname'];
    // echo "<br>";
    // echo "The entered email is " .  $_POST['email'];
    // echo "<br>";
    // echo "The entered roll is " . $_POST['roll'];
}
?>




<form action="" method="post">
    <label for="myname">Name:</label>
    <input type="text" name="myname" value="<?php echo $name; ?>">
    <br><br>

    <label for="email"> Email:</label>
    <input type="text" name="email" value="<?php echo $email; ?>">
    <br><br>
    <label for="roll"> Roll:</label>

    <input type="text" name="roll" value="<?php echo $roll; ?>">
    <br><br>
    <input type="submit" name="submit" value="submit">
    <br>

</form>