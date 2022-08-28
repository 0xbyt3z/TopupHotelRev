<!DOCTYPE html>
<html lang="en" class="dark">

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

    <div class="w-screen h-screen flex mt-36 justify-center">
        <div class="flex w-2/3">
            <div class="h-auto w-1/3 flex flex-col">
                <form method="post" action="">
                    <span class="text-4xl font-bold mb-10">Reservation</span>
                    <div class="flex">
                        <div class="flex flex-col mt-4 w-1/2 mr-2">
                            <label for="" class="text-sm">Room Type</label>
                            <select name="" id=""
                                class="border border-gray-300 h-8 bg-transparent focus:outline-1 focus:outline-cyan-500">
                                <option value="">Normal</option>
                                <option value="">Luxury</option>
                                <option value="">Extra Luxury</option>
                            </select>
                        </div>
                        <div class="flex flex-col mt-4 w-1/2 mr-2">
                            <label for="" class="text-sm">Payment Type</label>
                            <select name="" id=""
                                class="border border-gray-300 h-8 bg-transparent focus:outline-1 focus:outline-cyan-500">
                                <option value="">Credit Card</option>
                                <option value="">Cash</option>
                            </select>
                        </div>
                    </div>

                    <div class="flex">
                        <div class="flex flex-col mt-4 w-1/2 mr-2">
                            <label for="" class="text-sm">Checking Date</label>
                            <input type="date" name="" id="" class="bg-white border border-gray-300 h-8 outline-none" />
                        </div>
                        <div class="flex flex-col mt-4 w-1/2 mr-2">
                            <label for="" class="text-sm">Checkout Date</label>
                            <input type="date" name="" id="" class="bg-white border border-gray-300 h-8 outline-none" />
                        </div>
                    </div>

                    <div class="flex">
                        <div class="flex flex-col mt-4 w-1/2 mr-2">
                            <label for="" class="text-sm">Guest Count</label>
                            <input type="number" name="" id=""
                                class="bg-white border border-gray-300 h-8 outline-none pl-1" max="10" />
                        </div>
                    </div>

                    <div class="flex">
                        <div class="flex flex-col mt-4 w-1/2 mr-2">
                            <label for="" class="text-sm">Description</label>
                            <textarea name="" id="" class="border border-gray-300 w-full h-24"></textarea>
                        </div>
                    </div>

                </form>
            </div>
            <div class="w-2/3 h-auto max-h-96">

                <div class="max-h-96 overflow-auto overflow-x-hidden relative">
                    <table class="w-4/5 text-sm text-left text-gray-500 ml-10 ">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 sticky top-0">
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
                            for ($i=0; $i < 20; $i++) { 
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
                <div class="w-full flex justify-end">
                    <button class="w-24 bg-cyan-500 py-2 px-3 my-3 text-white font-bold mr-32">Signup</button>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
