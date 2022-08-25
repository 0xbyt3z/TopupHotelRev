<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Customer Signup | Hotel Reservation</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.5.2/dist/datepicker.js"></script>
    <script defer src="./app.js"></script>

    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <?php
include "./components/Nav.php";

?>

    <div class="w-screen h-screen flex mt-24 justify-center">
        <form method="post" action="">
            <div class="flex flex-col w-[70vw]">
                <div class="w-full flex">
                    <div class="w-1/3">
                        <div class="h-auto flex flex-col">
                            <span class="text-4xl font-bold mb-10">Block Reservation</span>

                            <!--grid-->
                            <div class="grid grid-cols-2 gap-2">
                                <div class="mr-4 group">
                                    <label for="" class="text-sm">Travel Agent</label>
                                    <input type="text"
                                        class="h-8 w-full border border-gray-300 outline-0 pl-2 focus:border-gray-900"
                                        required>

                                </div>
                                <div class="mr-4 group">
                                    
                                </div>
                                <div class="mr-4 group col-span-2">
                                    <label for="" class="text-sm">Card Number</label>
                                    <div
                                        class="flex border border-gray-300 group-focus-within:border-gray-900 pr-1 pl-2">
                                        <input type="text" oninput="handleCreditCard();"
                                            class="h-8 w-full  outline-0 group-focus-within:border-gray-900" required>
                                        <span class="text-xs  m-2 mr-0 px-1 bg-slate-400 text-white">Visa</span>
                                    </div>
                                </div>
                                <div class="mr-4 group">
                                    <label for="" class="text-sm">Expiration</label>
                                    <input type="text"
                                        class="h-8 w-full border border-gray-300 outline-0 pl-2 focus:border-gray-900"
                                        required>
                                </div>
                                <div class="mr-4 group">
                                    <label for="" class="text-sm">CVV</label>
                                    <input type="text"
                                        class="h-8 w-full border border-gray-300 outline-0 pl-2 focus:border-gray-900"
                                        required>
                                </div>

                                <hr class="w-full col-span-2 my-5">

                                <div class="mr-4">
                                    <label for="" class="text-sm">Room Type</label>
                                    <select name="" id=""
                                        class="h-8 w-full border border-gray-300 outline-0 pl-2 focus:border-gray-900">
                                        <option value="">Credit Card</option>
                                        <option value="">Cash</option>
                                    </select>
                                </div>

                                <div class="mr-4 group">
                                    <label for="" class="text-sm">Guest Count</label>
                                    <input type="text"
                                        class="h-8 w-full border border-gray-300 outline-0 pl-2 focus:border-gray-900"
                                        required>
                                </div>
                                <div class="mr-4 group">
                                    <label for="" class="text-sm">Checking Date</label>
                                    <input type="text"
                                        class="h-8 w-full border border-gray-300 outline-0 pl-2 focus:border-gray-900"
                                        required>
                                </div>
                                <div class="mr-4 group">
                                    <label for="" class="text-sm">Checkout Date</label>
                                    <input type="text"
                                        class="h-8 w-full border border-gray-300 outline-0 pl-2 focus:border-gray-900"
                                        required>
                                </div>

                                <div class="mr-4 col-span-2">

                                    <button
                                        class="w-24 bg-cyan-500 py-2 px-3 my-3 text-white font-bold mr-32">Signup</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-2/3 h-auto">

                        <div class="overflow-x-auto relative">
                            <table class="w-4/5 text-sm text-left text-gray-500 ml-10 ">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                                    <tr>
                                        <th scope="col" class="py-3 px-3">
                                            Room no
                                        </th>
                                        <th scope="col" class="py-3 px-3">
                                            Per Night
                                        </th>
                                        <th scope="col" class="py-3 px-3">
                                            Per Week
                                        </th>
                                        <th scope="col" class="py-3 px-3">
                                            Per Monthly
                                        </th>
                                        <th scope="col" class="py-3 px-2">
                                            Discount
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                $pernightcharge = "500";
                                $perweekcharge = "1500";
                                $permonthcharge = "2000";
                                $discount = "2%";
                                for ($i=0; $i < 10; $i++) { 
                                    echo '
                                            <tr class="bg-white border-b ">
                                                <th scope="row"
                                                    class="py-4 px-3 font-medium text-gray-900 whitespace-nowrap">
                                                    '.$i.'
                                                </th>
                                                <td class="py-4 px-3">
                                                    '.$pernightcharge.'
                                                </td>
                                                <td class="py-4 px-3">
                                                '.$perweekcharge.'
                                                </td>
                                                <td class="py-4 px-3">
                                                '.$permonthcharge.'
                                                </td>
                                                <td class="py-4 px-2">
                                                '.$discount.'
                                                </td>
                                            </tr>
                                            ';
                                }
                                
                                ?>
                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>
                <div class="w-full">
                    <div class="w-full overflow-x-auto">
                        <table class="w-full max-w-[63vw] text-sm text-left text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                                <tr>
                                    <th scope="col" class="py-3 px-3">
                                        Room no
                                    </th>
                                    <th scope="col" class="py-3 px-3">
                                        Per Night
                                    </th>
                                    <th scope="col" class="py-3 px-3">
                                        Per Week
                                    </th>
                                    <th scope="col" class="py-3 px-3">
                                        Per Monthly
                                    </th>
                                    <th scope="col" class="py-3 px-2">
                                        Discount
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                            $pernightcharge = "500";
                            $perweekcharge = "1500";
                            $permonthcharge = "2000";
                            $discount = "2%";
                            for ($i=0; $i < 7; $i++) { 
                                echo '
                                        <tr class="bg-white border-b ">
                                            <th scope="row"
                                                class="py-4 px-3 font-medium text-gray-900 whitespace-nowrap">
                                                '.$i.'
                                            </th>
                                            <td class="py-4 px-3">
                                                '.$pernightcharge.'
                                            </td>
                                            <td class="py-4 px-3">
                                            '.$perweekcharge.'
                                            </td>
                                            <td class="py-4 px-3">
                                            '.$permonthcharge.'
                                            </td>
                                            <td class="py-4 px-2">
                                            '.$discount.'
                                            </td>
                                        </tr>
                                        ';
                            }
                            
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!--submit button-->
                <div class="w-full flex justify-end">
                    <button class="w-24 bg-cyan-500 py-2 px-3 my-3 text-white font-bold mr-32">Signup</button>
                </div>
            </div>
        </form>

    </div>
</body>

</html>