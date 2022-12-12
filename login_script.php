<?php
session_start();
include('config.php');
$email=$_POST['Email'];
$pass=$_POST['Password'];
$sql="SELECT * from register WHERE Email='$email' and Password='$pass'";
$resul=mysqli_query($con, $sql);
$count=mysqli_num_rows($resul);
if ($count>0) {
    $query="SELECT ID From register Where Email='$email' and Password='$pass'";
    $result=mysqli_query($con, $query);
    $row=mysqli_fetch_array($result);
    $_SESSION['ID']=$row['ID'];
    header("location:index.php");

}else {
    echo "Incorrect Email or Password";
}
?>