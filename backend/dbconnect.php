<?php
$conn = new mysqli("localhost:3306" , "root" , "" , "project-2.0"); 

if (!$conn) {
    die("Connection failed " . mysqli_connect_error());
} 
else{
    echo "connected to the database";   
}

?>