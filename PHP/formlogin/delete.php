<?php
include "database.php";

$id = $_GET['id'];
$sql = "Delete from student where id=".$id;
$res = mysqli_query($conn,$sql);
if($res){
    header('location:list.php?del=true');
}
else{
    header('location:list.php?del=false');
}



?>