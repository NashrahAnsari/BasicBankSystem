<?php
include('config.php');
if (!isset($con)) {
    echo " not correct";
}

$name=$_POST['Name'];
$email=$_POST['Email'];
$pass=$_POST['Password'];
$query="INSERT INTO register(Name,Email,Password) VALUES ('$name','$email','$pass')";
$results=mysqli_query($con, $query);

if($results==TRUE){
    echo "Sucessfull";
}
else {
    echo "TRY AGAIN!!";
}

?>