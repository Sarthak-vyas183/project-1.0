<?php
require("dbconnect.php");
$sname =$_POST['sname'];
$email =$_POST['email'];
$contact =$_POST['contact'];
$pass =$_POST['pass'];
$AadharNo =$_POST['AadharNo'];
$labourCount =$_POST['labourCount'];


$hash = password_hash($pass, PASSWORD_DEFAULT);

$a="insert into contractordata values('".$sname."','".$email."','".$contact."','".$hash."' , '.$AadharNo.', '.$labourCount.')";


  if($conn->query($a) === TRUE) {
    echo "<script>alert('Registered successfully'); window.location.href='http://localhost/fourm2/index.php';</script>";
} else {
    echo "error" . mysqli_error($conn);
};
     
?> 












