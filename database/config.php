<?php 

$conn=new mysqli('localhost','root','password','travel');
// echo "<pre>";
// print_r($conn);
if($conn->connect_error){
    echo "connection error";
}


?>