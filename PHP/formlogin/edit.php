<?php
include "database.php";
$id=$_GET['id'];
$sql = "select * from student where id=".$id;
$res = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($res);
$name = $row['name'];
$roll = $row['roll'];
$email = $row['email'];

?>

<form action="update.php" method="post">

    <input type="hidden" name='id' value="<?php echo $id; ?>">

    <label for="name">Name</label>
    <input type="text"  name="name" value='<?php echo $name; ?>'><br><br>

    <label for="email">Email</label>
    <input type="text"  name="email" value='<?php echo $email; ?>'><br><br>

    <label for="roll">Roll:</label>
    <input type="text" id="roll" name="roll" value='<?php echo $roll; ?>'><br><br>

    <input type="submit" value="GOGO" name="submit">
</form>