<?php
session_start();
include('config.php');
$money=$_POST['money'];
$ID=$_SESSION['ID'];

$query="SELECT Amount from deposit Where ID='$ID'";
$result=mysqli_query($con, $query);
$count=mysqli_num_rows($result);

if ($count>0)
{
$row=mysqli_fetch_array($result);
$deposit=$row['Amount'];
$total=$deposit+$money;
$querys="UPDATE deposit Set Amount='$total' Where ID='$ID' ";
$result=mysqli_query($con, $querys);
header('location:index.php');
} else{

$sql="INSERT INTO Deposit(ID, Amount)VALUES($ID,$money)";
$result=mysqli_query($con,$sql);
header('location:index.php');
}
?>