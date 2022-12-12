<?php
session_start();
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .heading{
            font-weight:bold;
            font-size:30px;
            text-align:center;
        }
    </style>
</head>
<body>
<?php include('master.php'); ?>
<div class="heading">
<h1>Deposit Money</h1>
</div>
<section class="text-blueGray-700">
    <div class="container items-center px-5 py-12 lg:px-20">
        <div class="flex flex-col w-full p-10 mx-auto my-6 transition duration-500 ease-in-out
        transform bg-white border rounded-lg lg:w-2/6 md:w-1/2 md:mt-0">
        <div class="relative mt-4">
            <form action="Deposit_Db.php" method="POST">
            <label for="amount" class="text-base leading-7 text-blueGray-500">Enter Amount</label>
            <input type="float" id="number" name="money" placeholder="Enter Amount" class="w-full px-4 py-2 mt-2 text-base text-black transition
            duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white
            focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
        </div>
        <button class="w-full px-16 py-2 my-2 mr-2 text-base text-white transition duration-500 ease-in-out transform bg-blue-600 border-blue-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-blue-800">
            Deposit
        </button></form>
    <p class="mx-auto mt-3 text-xs text-blueGray-500">Amount should be in Rupees...</p>
    
    </div>
    </div>
</section>
</body>
</html>