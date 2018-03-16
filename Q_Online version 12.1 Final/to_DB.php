<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "q_online";
    
$fname=$_POST['fname2db'];
$lname=$_POST['lname2db'];
$username2db=$_POST['username2db'];
$passwrd=$_POST['password2db'];
$address=$_POST['address2db'];
$city=$_POST['city2db'];
$zip=$_POST['zip2db'];    

$_SESSION['usernametolog']=$_POST['username2db'];
$_SESSION['pwtolog']=$_POST['password2db'];




// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$sql = "INSERT INTO user (fname, lname, username,password,address,city,zip) 
        VALUES ('$fname','$lname','$username2db','$passwrd','$address','$city','$zip')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>