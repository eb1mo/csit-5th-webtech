<?php
// superglobal variable or array
/*
$_POST[] : method=post
$_GET[] : method=get
$_REQUEST[] : method=post/get
*/

include "database.php";


$name='';
$email='';
$roll='';


if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $name= $_POST['name'];
    $email= $_POST['email'];
    $roll= $_POST['roll'];

    $regName= '/^[A-Za-z ]+$/';
    $regRoll= '/^[0-9]+$/';
    // $regEmail= '/^[a-z]{1}[a-z._0-9]{3,20}[@]{1}[a-z]{1,}[.]{1}[a-z.]{1,7}+$/';


    if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['roll'])){
        echo "ALL fields is required....";
    }
    elseif(!preg_match($regName,$name) || strlen($name) <= 8){
        echo "Name can only consists alphabets.";
    }
    // elseif (strlen($name) <= 8) {
    //     echo "Name must be more than 8 characters.";
    // }
    elseif(!FILTER_INPUT(INPUT_POST,'email',FILTER_VALIDATE_EMAIL)){   //in php default email validation..it works for everything else as well
        echo "Invalid email format.";
    }
    elseif(!preg_match($regRoll,$roll)){
        echo "Roll can only consists number.";
    }
    else{
        $sql = "insert into student(name,roll,email)
        values('$name',$roll,'$email')";
        $res = mysqli_query($conn,$sql);

        if($res){
           
           header('location:list.php'); // echo "Data inserted.";
        }
        else{
            echo "Failed..".mysqli_error($conn);
        }
        
    // echo "The name is: " . $_POST["name"] . "<br>";
    // echo "The email is: " . $_POST["email"] . "<br>";
    // echo "The roll is: " . $_POST["roll"] . "<br>";
    }
}


?>


<form action="#" method="post">
    <label for="name">Name</label>
    <input type="text"  name="name" value='<?php echo $name; ?>'><br><br>

    <label for="email">Email</label>
    <input type="text"  name="email" value='<?php echo $email; ?>'><br><br>

    <label for="roll">Roll:</label>
    <input type="text" id="roll" name="roll" value='<?php echo $roll; ?>'><br><br>

    <input type="submit" value="GOGO" name="submit">
</form>


