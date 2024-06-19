<?php
include 'database.php';
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
        $sql = "update student set name='$name', email='$email', roll='$roll' where
        id=".$_POST['id'];
        // echo $sql;die;
        $res = mysqli_query($conn,$sql);

        if($res){
        header('location:list.php');
            // echo "Data Updated.";
        }
        else{
            echo "Failed..".mysqli_error($conn);
        }
        
    }
}
?>