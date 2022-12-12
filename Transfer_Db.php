<?php
session_start();

include('config.php');

$ID=$_SESSION['ID'];

$money=$_POST['money'];
$remail=$_POST['remail'];

$sql="SELECT * from register Where Email='$remail'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);

if($count>0)
{
    $sql="SELECT Amount from deposit Where ID='$ID'";
$result=mysqli_query($con,$sql);
$counts=mysqli_num_rows($result);

        if($counts>0){
        $row=mysqli_fetch_array($result);
        $Amount=$row['Amount'];

        if($Amount>$money){
            $query="SELECT ID From register Where Email='$remail'";
            $result=mysqli_query($con,$query);
            $row=mysqli_fetch_array($result);
            $RID=$row['ID'];

            $sql="SELECT Amount from deposit where ID='$ID'";
            $result=mysqli_query($con,$sql);
            $third=mysqli_num_rows($result);
            if($third>0)
            {
                $sum=$Amount-$money;

                $query="UPDATE deposit SET Amount='$sum' Where ID='$ID'";
                $result=mysqli_query($con, $query);

                $sql="SELECT Amount from deposit where ID='$RID' ";
                $results=mysqli_query($con, $sql);
                $row=mysqli_fetch_array($results);
                $mon=$row['Amount'];
                $total=$mon+$money;

                $query="UPDATE deposit SET Amount='$total' Where ID='$RID'";
                $result=mysqli_query($con, $query);
                $_SESSION['done']='1';
                header("Location:Transfer.php");
            
            }else
            {
                $sum=$Amount-$money;

                $query="UPDATE deposit SET Amount='$sum' Where ID='$ID'";
                $result=mysqli_query($con, $query);
                $query="INSERT INTO deposit(ID,Amount)VALUES('$RID','$money')";
                $result=mysqli_query($con,$query);
                $_SESSION['done']='1';
                header("Location:Transfer.php");
            }
        }
        else{
            $_SESSION['No_Money']='1';
            header("Location:Transfer.php");
        }
    }
}
else{
    $_SESSION['alert_email']='1';
    header("Location:Transfer.php");
}
?>