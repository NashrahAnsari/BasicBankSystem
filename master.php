<?php
include('config.php');
$ID=$_SESSION['ID'];

$sql="SELECT Name, Email From register Where ID='$ID'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
$name=$row['Name'];
$email=$row['Email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Bank System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .panel{
            width:100%;
            height:900px;

        }

        .head{
            height:10%;
            width:100%;
            background:white;
        }

        .side{
            width:15%;
            height:auto;
            background:white;
            float: left;
        }
        .content{
            float:left;
            width:80%;
            height:auto;
        }
    </style>
</head>
<body>

<div class="panel">
    <div class="head">
    <header class="text-gray-600 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
      <img src="p3.png" height="100px" width="50px" alt="">
      <span class="ml-3 text-xl">Metropolis Bank</span>
    </a>
    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
      <a class="mr-5 hover:text-gray-900" href="demo.php">Home</a>
      <a class="mr-5 hover:text-gray-900" href="Transfer.php">Transfer Money</a>
    </nav>
  </div>
</header>
    </div>

    <div class="side">
    <div class="flex overflow-hidden bg-white rounded-lg">
    <div class="hidden md:flex md:flex-shrink-0">
        <div class="flex flex-col w-64">
            <div class="flex flex-col flex-grow pt-5 overflow-y-auto bg-white border-r border-gray-50">
                <div class="flex flex-col items-center flex-shrink-0 pb-4 bg-blueGray-50">
    <img class="inline-block object-cover object-center w-20 h-20 mb-8 bg-blueGray-100 rounded-full"
    src="p2.png" alt="testimonial">
<h2 class="text-sm font-medium tracking-widest text-black uppercase title-font">
    <?php echo $name; ?></h2>
<p class="text-blueGray-500"><?php echo $email; ?></p>
</div>
                <div class="flex flex-col flex-grow px-4 mt-5">
                    <nav class="flex-1 space-y-1 bg-white">
                        <ul>
                            <li>
                                <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-base text-gray-900 transition duration-500 ease-in-out transform rounded-lg bg-gray-50 focus:shadow-outline" white="" 70="" href="index.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                    </svg>
                                    <span class="ml-4"> Overview</span>
                                </a>
                            </li>
                            <li>
                                <a href="Deposit.php" class="inline-flex items-center w-full px-4 py-2 mt-1 text-base text-gray-900 transition duration-500 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                    </svg>
                                    <span class="ml-4">Deposit</span>
                                </a>
                            </li>
                            <li>
                                <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-base text-gray-900 transition duration-500 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-50" white="" 70="" href="Withdraw.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                    </svg>
                                    <span class="ml-4">Withdraw</span>
                                </a>
                            </li>
    
                            <li>
                                <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-base text-gray-900 transition duration-500 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-50" white="" 70="" href="Transfer.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                    <span class="ml-4"> Transfer</span>
                                </a>
                            </li>
                            <li>
                                <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-base text-gray-900 transition duration-500 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-50" href="user.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                    <span class="ml-4">User</span>
                                </a>
                            </li>
                        </ul>
                    
                    </nav>
                </div>
                
            </div>
        </div>
    </div>
</div>
</div>

<div class="container">

</div>

