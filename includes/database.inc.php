<?php 
$servername="localhost";
$username="root";
$userpass="";
$database ="media_system";
$conn = mysqli_connect($servername,$username,$userpass,$database);

if($conn->connect_error){
    die("connection failed: " . $conn->connect_error);
}else{
    //echo "connection successful!!";
}

?>