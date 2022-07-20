<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submited</title>
    <style>
        h1
        {
            color: orange;
            font-family: sans-serif;
            font-size: 2rem;
            text-align: center;

        }
    </style>
</head>
<body>
    
</body>
</html>


<?php

$email1 = $_POST['email'];
$firstname1 = $_POST['firstname'];
$lastname1 = $_POST['lastname'];
$address1 = $_POST['address'];

$conn = new mysqli('localhost','root','','formdatabase');

if($conn->connect_error){
    die('connection failed......'.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into formcontact(email,firstname,lastname,address)
    values(?,?,?,?)");

    
    $stmt->bind_param("ssss", $email1,$firstname1,$lastname1,$address1);
    $stmt->execute();
    echo "<h1> Form Successfully Submitted </h1><br>";
    $stmt->close();
    $conn->close();
}

