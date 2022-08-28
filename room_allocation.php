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
                    <label for="" class=" mr-2">Status</label>
                    <select name="" id="" class="h-8 bg-transparent focus:outline-1 focus:outline-cyan-500">
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
            <div class="w-7/12 h-full max-h-screen overflow-auto">
                <!--table-->
                <div class="max-h-screen overflow-auto overflow-x-hidden relative">
                    <table class="w-full  text-sm text-left text-gray-500 z-0">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 sticky top-0">
                            <tr>
                                <th scope="col" class="py-3 px-3 w-32">
                                    Room Number
                                </th>
                                <th scope="col" class="py-3 px-3">
                                    Description
                                </th>
                                <th scope="col" class="py-3 px-2 w-5">
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $roomnumber = "1";
                            $description = "Fusce ultrices, diam ornare consectetur pretium, lorem lacus sollicitudin metus, a accumsan risus felis ut enim";
                            for ($i=0; $i < 24; $i++) { 
                                echo '
                                        <tr class="bg-white border-b ">
                                            <th scope="row"
                                                class="py-4 px-3 font-medium text-gray-900 whitespace-nowrap w-32">
                                                '.$roomnumber.'
                                            </th>
                                            <td class="py-4 px-3">
                                                '.$description.'
                                            </td>
                                            
                                            <td class="py-4 px-2 w-5">
                                                <input type="checkbox" name="" id="" class="w-4 h-4 outline-none">
                                            </td>


                                        </tr>
                                        ';
                            }
                            
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="w-4/12 h-full"></div>
        </div>

    </div>

</body>

</html>