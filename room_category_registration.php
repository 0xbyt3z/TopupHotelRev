<!DOCTYPE html>
<html lang="en">

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

    <div class="w-screen h-full flex mt-36 justify-center">
        <form>
            <span class="text-4xl font-bold mb-10">Room Category Registration</span>
            <div class="h-auto w-[50rem] flex ">
                <!--left-->
                <div class="w-1/2 mt-12 h-auto ">
                    <div class="flex flex-col mt-4 w-1/2 mr-2">
                        <label for="" class="text-sm">Room Type Name</label>
                        <input type="text"
                            class="h-8 w-full border border-gray-300 outline-0 pl-2 focus:border-gray-900" required>
                    </div>
                    <div class="flex flex-col mt-4 w-1/2 mr-2">
                        <label for="" class="text-sm">Guest Count</label>
                        <input type="number"
                            class="h-8 w-full border border-gray-300 outline-0 pl-2 focus:border-gray-900" required>
                    </div>
                    <div class="flex flex-col mt-4 w-4/5 mr-2">
                        <label for="" class="text-sm">Description</label>
                        <textarea name="" id=""
                            class="border border-gray-300 w-full h-44 pl-2 outline-0 focus:border-gray-900"></textarea>
                    </div>
                </div>


                <!--right-->
                <div class="w-1/2 mt-12 h-auto border-0 border-l-[1px] border-l-gray-500">
                    <div class="ml-10">
                        <span class="">Charges</span>
                        
                        <!--grid-->
                        <div class="grid grid-cols-2 gap-2">
                            <div class="mr-4 group">
                                <label for="" class="text-sm">Per Night Charges</label>
                                <div class="flex border border-gray-300 group-focus-within:border-gray-900">
                                    <span class="text-sm  m-2 mr-0 px-1">Rs.</span>
                                    <input type="text"
                                        class="h-8 w-full  outline-0 pl-2 group-focus-within:border-gray-900" required>
                                </div>
                            </div>
                            <div class="mr-4 group">
                                <label for="" class="text-sm">Per Night Charges</label>
                                <div class="flex border border-gray-300 group-focus-within:border-gray-900">
                                    <span class="text-sm  m-2 mr-0 px-1">Rs.</span>
                                    <input type="text"
                                        class="h-8 w-full  outline-0 pl-2 group-focus-within:border-gray-900" required>
                                </div>
                            </div>
                            <div class="mr-4 group">
                                <label for="" class="text-sm">Per Night Charges</label>
                                <div class="flex border border-gray-300 group-focus-within:border-gray-900">
                                    <span class="text-sm  m-2 mr-0 px-1">Rs.</span>
                                    <input type="text"
                                        class="h-8 w-full  outline-0 pl-2 group-focus-within:border-gray-900" required>
                                </div>
                            </div>
                            <div class="mr-4 group">
                                <label for="" class="text-sm">Per Night Charges</label>
                                <div class="flex border border-gray-300 group-focus-within:border-gray-900">
                                    <span class="text-sm  m-2 mr-0 px-1">Rs.</span>
                                    <input type="text"
                                        class="h-8 w-full  outline-0 pl-2 group-focus-within:border-gray-900" required>
                                </div>
                            </div>
                            <div class="mr-4 group">
                                <label for="" class="text-sm">Per Night Charges</label>
                                <div class="flex border border-gray-300 group-focus-within:border-gray-900">
                                    <span class="text-sm  m-2 mr-0 px-1">Rs.</span>
                                    <input type="text"
                                        class="h-8 w-full  outline-0 pl-2 group-focus-within:border-gray-900" required>
                                </div>
                            </div>
                        </div>
                        <div class="w-full h-10 mt-20 flex">
                            <button class="w-24 bg-green-500 py-2 px-3 mr-5 text-white ">Create</button>
                            <button class="w-24 bg-yellow-500 py-2 px-3 mr-5 text-white ">Update</button>
                            <button class="w-24 bg-red-500 py-2 px-3 mr-5 text-white ">Delete</button>
                        </div>
                        
                        
                    </div>
                </div>

            </div>
            
        </form>
    </div>

</body>

</html>