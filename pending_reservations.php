<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Page</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <script defer src="app.js"></script>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
include "./components/Nav.php";

?>

    <div class="w-screen h-full">
        <div class="w-screen h-10 flex items-center mt-10">
            <div class="w-1/12 h-full">.</div>
            <div class="w-7/12 h-full flex justify-between">
                <div class="flex items-center mr-2">
                    <label for="" class="text-sm mr-2">Status</label>
                    <select name="" id="" class="border h-8 bg-transparent focus:outline-1 focus:outline-cyan-500">
                        <option value="">Pending</option>
                        <option value="">Checked</option>
                        <option value="">Waiting</option>
                    </select>
                </div>
                <div class="flex items-center mr-2">
                    <label for="" class="text-sm mr-2">Date</label>
                    <input type="date" name="" id="" class="bg-white border h-8 outline-none" />
                </div>
            </div>
            <div class="w-4/12 h-full">.</div>
        </div>
        <!--containers-->
        <div class="w-screen h-full flex mt-10">
            <div class="w-1/12 h-full">.</div>
            <div class="w-7/12 max-h-screen bg-gray-400">
                <!--table-->
                <div class="max-h-screen overflow-auto overflow-x-hidden">
                    <table class="w-full text-sm text-left text-gray-500 z-0">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 sticky top-0">
                            <tr>
                                <th scope="col" class="py-3 px-3">
                                    Customer
                                </th>
                                <th scope="col" class="py-3 px-3">
                                    Guest Count
                                </th>
                                <th scope="col" class="py-3 px-3">
                                    Room Type
                                </th>
                                <th scope="col" class="py-3 px-3">
                                    Checkin
                                </th>
                                <th scope="col" class="py-3 px-2">
                                    Checkout
                                </th>
                                <th scope="col" class="py-3 px-2 w-5">
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $customer = "Alan Gunathilaka";
                            $guestcount = "5";
                            $rtype = "Luxury";
                            $checkin = "2022-08-24";
                            $checkout = "2022-08-30";
                            for ($i=0; $i < 24; $i++) { 
                                echo '
                                        <tr class="bg-white border-b ">
                                            <th scope="row"
                                                class="py-4 px-3 font-medium text-gray-900 whitespace-nowrap">
                                                '.$customer.'
                                            </th>
                                            <td class="py-4 px-3">
                                                '.$guestcount.'
                                            </td>
                                            <td class="py-4 px-3">
                                            '.$rtype.'
                                            </td>
                                            <td class="py-4 px-3">
                                            '.$checkin.'
                                            </td>
                                            <td class="py-4 px-2">
                                            '.$checkout.'
                                            </td>
                                            <td class="py-4 px-2 w-5">
                                                <button class="bg-cyan-500 py-2 px-3 text-white font-bold">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                                </svg>
                                                </button>
                                            </td>


                                        </tr>
                                        ';
                            }
                            
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="w-4/12 h-full">
                <div class="ml-24">
                    <span class="text-xl font-bold">Room Availability</span>
                    <div class="mt-5 flex flex-col">
                        <div class="flex mt-10">
                            <div class="flex flex-col mr-10">
                                <span class="font-bold text-4xl">7</span>
                                <span class="font-light text-base">Luxury Rooms</span>
                            </div>
    
                            <div class="flex flex-col">
                                <span class="font-bold text-4xl">14</span>
                                <span class="font-light text-base">Deluxe Rooms</span>
                            </div>
                        </div>

                        <div class="flex mt-10">
                            <div class="flex flex-col mr-10">
                                <span class="font-bold text-4xl">7</span>
                                <span class="font-light text-base">Luxury Rooms</span>
                            </div>
    
                            <div class="flex flex-col">
                                <span class="font-bold text-4xl">14</span>
                                <span class="font-light text-base">Deluxe Rooms</span>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>