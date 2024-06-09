<!DOCTYPE html>
<html>
<head>
    <title>Form Submission</title>
</head>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>

    <label for="roll_no">Roll No:</label>
    <input type="text" id="roll_no" name="roll_no"><br><br>

    <input type="submit" value="Submit">
</form>
<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $roll_no = $_POST["roll_no"];



