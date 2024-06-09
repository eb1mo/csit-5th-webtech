<form action="#" method="post">
    <input type="text" name="myname" >
    <input type="submit" name="submit" value="ok">
</form>
<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
    print_r($_POST);
}
//superglobal variable or array
/*
$_POST[]: method = post
$_GET[]:    method=get
$_REQUEST[]: method=post|get
$_SERVER
*/
// if(!empty($_GET)){

//     print_r($_REQUEST['myname']);
// }
// echo '<pre>';
// print_r($_SERVER);
?>