<table border=1>
    <thead>
        <tr>
            <th>SN</th>
            <th>Name</th>
            <th>Roll</th>
            <th>Email</th>
</tr>
</thead>
<tbody>
<?php
include "database.php";
$sql ="select * from tbl_student";
$res= mysqli_query($conn,$sql);
$sn=1;
if(mysqli_num_rows($res)>0){
    while($row =mysqli_fetch_assoc($res)){
        print_r($row);
       echo '<tr>';
       echo '<td>'.$sn.'</td>';
       echo '<td>'.$row['name'].'</td>';
       echo '<td>'.$row['roll'].'</td>';
       echo '<td>'.$row['email'].'</td>';
       echo'</tr>';
       $sn++;
    //    echo '<td>'.$sn.'</td>';
    }
}
else{
    echo '<tr><td colspan="4">No data</td></tr>';
}

?>
</tbody>
</table>