<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Signup | Hotel Reservation</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="./app.js"></script>

    <link rel="stylesheet" href="style.css">


</head>
<body>

<?php
include "./components/Nav.php";

?>


<div class="w-screen h-screen flex mt-36 justify-center">
    <div class="h-auto w-[30rem] flex flex-col">
        <form onsubmit="handleSubmit();">
        <div class="w-full flex justify-end">
            <a href="travelagentsignup.php" class="flex items-center px-5 py-2 bg-cyan-500 font-bold text-white">Signup as a Travel Agent
            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white ml-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
            </a>
                    
        </div>
        <span class="text-4xl font-bold mb-10">Signup</span>

        <div class="flex">
        <div class="flex flex-col mt-4 w-1/2 mr-2">
            <label for="" class="text-sm">First Name</label>
            <input type="text" class="h-8 w-full border border-gray-300 focus:outline-1 focus:outline-cyan-500" required>
        </div>
        <div class="flex flex-col mt-4 w-1/2 mr-2">
            <label for="" class="text-sm">Last Name</label>
            <input type="text" class="h-8 w-full border border-gray-300 focus:outline-1 focus:outline-cyan-500" required>
        </div>
        </div>

        <div class="flex flex-col mt-4 mr-2">
            <label for="" class="text-sm">Contact Number</label>
            <input type="text" class="h-8 w-full border border-gray-300 focus:outline-1 focus:outline-cyan-500 " required>
        </div>

        <div class="flex flex-col mt-4 mr-2">
            <label for="" class="text-sm">NIC</label>
            <input type="text" class="h-8 w-full border border-gray-300 focus:outline-1 focus:outline-cyan-500 " required>
        </div>

        <div class="flex flex-col mt-4 mr-2">
            <label for="" class="text-sm">Address Line - 1</label>
            <input type="text" class="h-8 w-full border border-gray-300 focus:outline-1 focus:outline-cyan-500 " required>
        </div>
        <div class="flex flex-col mt-4 mr-2">
            <label for="" class="text-sm">Address Line - 2</label>
            <input type="text" class="h-8 w-full border border-gray-300 focus:outline-1 focus:outline-cyan-500 " required>
        </div>
        <div class="flex flex-col mt-4 mr-2">
            <label for="" class="text-sm">Address Line - 3</label>
            <input type="text" class="h-8 w-full border border-gray-300 focus:outline-1 focus:outline-cyan-500 " required>
        </div>

        

        <button class="w-24 bg-cyan-500 py-2 px-3 my-3 text-white font-bold">Signup</button>

        <div class="my-5 flex justify-between">
            <span class="text-sm">Already have an account?<a href="" class="text-blue-500 mx-2">Login</a></span>
        </div>
    </form>
    </div>
</div>
    
</body>
</html>