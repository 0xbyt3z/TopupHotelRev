<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

    <div id="content">

        <div class="w-screen h-screen flex">
            <div class="w-[730px] h-auto flex flex-col">
                <div class="w-full h-auto flex">
                    <div class="w-1/2 h-full flex flex-col text-sm">
                        <span class="text-3xl font-bold">Ayowa Garden Hotel</span>
                        <span>869 Magazine St ,<br>New Orleans,<br>Louisiana</span>
                        <span>(+94) 73 345 3633 / (+94) 73 345 3633 </span>
                    </div>
                    <div class="w-1/2 h-full flex flex-col items-end">
                        <span class="text-3xl font-bold">Occupancy Report</span>
                    </div>
                </div>

                <!--Invoice Description-->
                <div class="w-full h-auto flex text-sm mt-10">
                    <div class="w-1/3 h-auto flex flex-col">
                        <span class="font-bold mb-2 text-base">Details</span>
                        <span><span class="font-semibold">Report as on</span> : 2022-08-20</span>
                        <span><span class="font-semibold">Total Occupied Rooms</span> : <?php echo $_GET['toccupied'] ?></span>
                        <span><span class="font-semibold">Total Free Rooms</span> : <?php echo $_GET['tfree'] ?></span>
                    </div>

                </div>

                <!--package table-->
                <div class="w-full h-auto flex flex-col text-sm mt-10">
                    <div class="w-full overflow-x-auto relative table">
                        <table class="table w-full text-sm text-left text-gray-500 border-t-0">
                            <thead class="text-sm text-gray-700  bg-gray-300 ">
                                <tr>
                                    <th scope="col" class="py-3 pr-9 pl-3">
                                        Room No
                                    </th>
                                    <th scope="col" class="py-3 pr-12">
                                        Type
                                    </th>
                                    <th scope="col" class="py-3 pr-12">
                                        Paid
                                    </th>
                                    <th scope="col" class="py-3 pl-9 pr-3 text-right">
                                        Checkout
                                    </th>
                                    <th scope="col" class="py-3 pl-9 pr-3 text-right">
                                        Checkout
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b text-sm ">
                                    <th scope="row" class="py-2 pr-9 pl-3 font-medium text-gray-900 whitespace-nowrap">
                                        R01
                                    </th>
                                    <td class="py-2 pr-12">
                                        Luxury
                                    </td>
                                    <td class="py-2 pr-12">
                                        No
                                    </td>
                                    
                                    <td class="py-2 pl-9 pr-3 text-right">
                                        2022-09-10
                                    </td>

                                    <td class="py-2 pl-9 pr-3 text-right">
                                        2022-09-10
                                    </td>

                                </tr>
                                <tr class="bg-white border-b ">
                                    <th scope="row" class="py-2 pr-9 pl-3 font-medium text-gray-900 whitespace-nowrap">
                                        R02
                                    </th>
                                    <td class="py-2 pr-12">
                                    Deluxe
                                    </td>
                                    
                                    <td class="py-2 pr-12">
                                        Yes
                                    </td>
                                    <td class="py-2 pl-9 pr-3 text-right">
                                        2022-09-12
                                    </td>
                                    <td class="py-2 pl-9 pr-3 text-right">
                                        2022-09-12
                                    </td>

                                </tr>

                                

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div id="editor"></div>
    <script>

        window.addEventListener("load", () => {
            html2canvas(document.body).then(function (canvas) {
                var img = canvas.toDataURL("image/png");
                var doc = new jsPDF();
                doc.addImage(img, 'JPEG', 10, 10);
                doc.save(`occupancy${new Date().toLocaleDateString()}.pdf`);
            });
        });
    </script>
</body>

</html>