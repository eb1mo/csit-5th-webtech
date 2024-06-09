<!DOCTYPE html>
<html>
<head>
    <title>Form Submission</title>
</head>
<body>

<form method="post" action="form.php">
    <input type="text" name="name" placeholder="Your Name">
    <input type="email" name="email" placeholder="Your Email">
    <input type="text" name="roll_no" placeholder="Your Roll No">
    <button type="submit">Submit</button>
</form>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $roll_no = $_POST["roll_no"];

    echo "The entered name is: $name <br>";
    echo "The entered email is: $email <br>";
    echo "The entered roll no is: $roll_no <br>";
}
?>

</body>
</html>
