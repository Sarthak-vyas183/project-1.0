<?php
require("dbconnect.php");
$sname =$_POST['sname'];
$email =$_POST['email'];
$contact =$_POST['contact'];
$pass =$_POST['pass'];
$AadharNo =$_POST['AadharNo'];
$skilled =$_POST['skilled'];
$skillname =$_POST['skillname'];
$age =$_POST['age'];
$addr =$_POST['addr'];
$state =$_POST['state'];
$city =$_POST['city'];
$pin =$_POST['pin'];
$BriefIntro = $_POST['BriefIntro'];

$hash = password_hash($pass, PASSWORD_DEFAULT);

$a="insert into labordata values('".$sname."','".$email."','".$contact."','".$hash."' , '".$AadharNo."','".$skilled."','".$skillname."','.$age.','".$addr."', '".$state."' , '".$city."' , '.$pin.' , '".$BriefIntro."')";



  if($conn->query($a) === TRUE) {
    echo "<script>alert('Registered successfully'); window.location.href='http://localhost/fourm2/index.php';</script>";

    
    
} else {
    echo "error" . mysqli_error($conn);
     
};

?>  
