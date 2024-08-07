<?php
    $empno=$_POST["eno"];
    $name=$_POST["nm"];
    $email=$_POST["email"];
    $salary=$_POST["sal"];

    $con=new mysqli("localhost","root","","sakshi");
    $sql="insert into employee(empno,name,email,salary)values('$empno','$name','$email','$salary')";

    $con->query($sql);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="pink">
    <h1>Welcome to php CRUD operations</h1>
    <a href="index.php">Home</a>
    <a href="insert.php">Insert</a>
    <a href="display.php">Display</a>
    <a href="search.php">Search</a>
    <a href="update.php">Update</a>
    <a href="contact.php">Contact</a>
    <hr size="4" color="blue">
    <h1>Data save!!!!</h1>
    <hr size="4" color="blue">
    
    www.cybrom.com 2024
 
    
</body>
</html>