<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'msfc';
$conn = mysqli_connect($servername, $username,$password, $dbname);

if (!$conn) {
    die('Connection failed'. $mysqli_error);
}

$fname = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gen = $_POST['gender'];
$age = $_POST['age'];
$ctry = $_POST['country'];

$sql="INSERT INTO msfc_tbl(fname,Email,phone,Gender,Age,Country) VALUES('$fname','$email','$phone','$gen','$age','$ctry')";

if (mysqli_query($conn,$sql)) {
    echo "record submitted succesifully";
} 
else {
    echo ("Error: ".$sql."<br>".mysqli_error($conn));
}

// close connection
mysqli_close($conn);

?>