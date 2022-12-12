<?php
session_start();
include('config.php');
$ID=$_SESSION['ID'];

$sql="SELECT Amount From deposit Where ID='$ID'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
if($count>0)
{
  $row=mysqli_fetch_array($result);
  $Total=$row['Amount'];
}else{
  $Total=0;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Bank System</title>
    <style>
      body{
        overflow: hidden;
      }
    </style>
</head>
<body>
</body>
</html>
<?php include('master.php');?>
<div class="content">
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">A Better Way to Send Money</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Send Money Faster and Avoid Excessive Charges</p>
    </div>
    <div class="flex flex-wrap -m-4 text-center flex justify-center">
      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
            <path d="M8 17l4 4 4-4m-4-5v9"></path>
            <path d="M20.88 18.09A5 5 0 0018 9h-1.26A8 8 0 103 16.29"></path>
          </svg>
          <h2 class="title-font font-medium text-3xl text-gray-900">₹<?php echo $Total; ?> </h2>
          <p class="leading-relaxed">Bank Balance</p>
        </div>
      </div>
      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
            <circle cx="9" cy="7" r="4"></circle>
            <path d="M23 21v-2a4 4 0 00-3-3.87m-4-12a4 4 0 010 7.75"></path>
          </svg>
          <h2 class="title-font font-medium text-3xl text-gray-900">
          <?php 
          $query="SELECT COUNT(*) AS count from register";
          $query_result=mysqli_query($con,$query);
          while($row=mysqli_fetch_assoc($query_result)){
          $output=$row['count'];
          echo $output;
          }
          ?> </h2>
          <a href="user.php"><p class="leading-relaxed">Users</p></a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
include('footer.php');
?>
</div>
</div>
</body>
</html>