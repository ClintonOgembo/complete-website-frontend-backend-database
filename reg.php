<?php
$servername = 'localhost';
$username = '';
$password = '';
$dbname = 'db_students';
$conn = mysql_connect($servername, $username, $dbname)

if (!$conn) {
    die('Connection failed'. mysqli_connect_error());
}

$fn = $_POST['txtfn'];
$ln = $_POST['txtfn'];
$gen = $_POST['optgen'];
$dept = $_POST['txtdept'];

$sql='INSERT INTO tbl_reg(fname,lname,gen.dept) VALUES($fn,$ln,$gen,$dept)';

if (mysqli($conn,$sql)) {
    echo "record submitted succesifully";
}
else {
    echo ("Error: ".$sql."<br>".mysqli_error($conn));
}

// close connection
mysqli_close($conn);

?>