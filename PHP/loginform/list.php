<table border=1>
    <tr>
        <th>SN</th>
        <th>Name</th>
        <th>Roll</th>
        <th>Email</th>
    </tr>



<?php
include "database.php";
$sql = "select * from student";
$res= mysqli_query($conn,$sql);
$sn = 1;
if(mysqli_num_rows($res)>0){
    while($row = mysqli_fetch_assoc($res)){
        echo '<tr>';
        echo '<td>'.$sn.'</td>';
        echo '<td>'.$row['name'].'</td>';
        echo '<td>'.$row['roll'].'</td>';
        echo '<td>'.$row['email'].'</td>';
        echo '</tr>';
        $sn++;
    }
}
else{
    echo '<tr><td colspan=4>No Data</td></tr>';
}
?>
</table>
