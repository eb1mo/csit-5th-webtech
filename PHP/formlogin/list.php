<a href="form.php">Add New</a>
<table border=1>
    <tr>
        <th>SN</th>
        <th>Name</th>
        <th>Roll</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
<?php
session_start();
if(isset($_GET['del'])){
    echo "Data Deleted";
}


include "database.php";
$sql = "select * from student";
$res= mysqli_query($conn,$sql);
$sn = 1;
if(mysqli_num_rows($res)>0){
    while($row = mysqli_fetch_assoc($res)){
        $id = $row['id'];
        echo '<tr>';
        echo '<td>'.$sn.'</td>';
        echo '<td>'.$row['name'].'</td>';
        echo '<td>'.$row['roll'].'</td>';
        echo '<td>'.$row['email'].'</td>';
        if(isset($_SESSION['name'])){

            echo "<td><a href='delete.php?id=$id'>Delete</a><a href='edit.php?id=$id'>Edit</a></td>";
            }
            else{
                echo "<td>Action Not availabe</td>";
            }
        echo '</tr>';
        $sn++;
    }
}
else{
    echo '<tr><td colspan=5>No Data</td></tr>';
}
?>
</table>
