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
                        <span class="text-3xl font-bold">Invoice</span>
                    </div>
                </div>

                <!--Invoice Description-->
                <div class="w-full h-auto flex text-sm mt-10">
                    <div class="w-1/3 h-auto flex flex-col">
                        <span class="font-bold mb-2 text-base">Details</span>
                        <span><span class="font-semibold">Resv. No</span> : #<?php echo $_GET['resvno'] ?></span>
                        <span><span class="font-semibold">Reserved on</span> : 2022-08-20</span>
                        <span><span class="font-semibold">Checkin Date</span> : 2022-09-10</span>
                        <span><span class="font-semibold">Checkout Date</span> : 2022-09-15</span>
                    </div>
                    <div class="w-1/3 h-auto flex flex-col">
                        <span class="font-bold mb-2 text-base">Customer</span>
                        <span><span class="font-semibold">Name</span> : Sunil Karunarathne</span>
                        <span><span class="font-semibold">Mobile</span> : (+94) 73 345 3633</span>
                        <span><span class="font-semibold">Address</span> : 32A/C Galle Rd, Kandy</span>
                    </div>
                    <div class="w-1/3 h-auto flex flex-col">
                        <span class="font-bold mb-2 text-base">Billling To</span>
                        <span><span class="font-semibold">Name</span> : Sunil Karunarathne</span>
                        <span><span class="font-semibold">Mobile</span> : (+94) 73 345 3633</span>
                        <span><span class="font-semibold">Address</span> : 45 Pandura, Kadawatha, Sri Lanka</span>
                    </div>

                </div>

                <!--package table-->
                <div class="w-full h-auto flex flex-col text-sm mt-10">
                    <div class="w-full overflow-x-auto relative table">
                        <table class="table w-full text-sm text-left text-gray-500 border-t-0">
                            <thead class="text-sm text-gray-700  bg-gray-300 ">
                                <tr>
                                    <th scope="col" class="py-3 pr-9 pl-3">
                                        Package
                                    </th>
                                    <th scope="col" class="py-3 pr-12">
                                        No. of Rooms
                                    </th>
                                    <th scope="col" class="py-3 pr-12">
                                        Charges
                                    </th>
                                    <th scope="col" class="py-3 pl-9 pr-3 text-right">
                                        Total
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b text-sm ">
                                    <th scope="row" class="py-2 pr-9 pl-3 font-medium text-gray-900 whitespace-nowrap">
                                        Deluxe
                                    </th>
                                    <td class="py-2 pr-12">
                                        5
                                    </td>
                                    <td class="py-2 pr-12">
                                        Value
                                    </td>
                                    <td class="py-2 pl-9 pr-3 text-right">
                                        value
                                    </td>

                                </tr>
                                <tr class="bg-white border-b ">
                                    <th scope="row" class="py-2 pr-9 pl-3 font-medium text-gray-900 whitespace-nowrap">
                                        Deluxe
                                    </th>
                                    <td class="py-2 pr-12">
                                        5
                                    </td>
                                    <td class="py-2 pr-12">
                                        Value
                                    </td>
                                    <td class="py-2 pl-9 pr-3 text-right">
                                        value
                                    </td>

                                </tr>

                                <!--summary-->
                                <tr class="bg-white">
                                    <th scope="row"
                                        class="py-2 pr-9 pl-3 font-medium border-0 bg-transparent whitespace-nowrap">

                                    </th>
                                    <td class="py-2 pr-12">

                                    </td>
                                    <td class="py-2 pr-12">
                                        Sub Total
                                    </td>
                                    <td class="py-2 pl-9 pr-3 text-right">
                                        12000
                                    </td>

                                </tr>

                                <tr class="bg-white">
                                    <th scope="row"
                                        class="py-2 pr-9 pl-3 font-medium border-0 bg-transparent whitespace-nowrap">

                                    </th>
                                    <td class="py-2 pr-12">

                                    </td>
                                    <td class="py-2 pr-12 border-b border-dashed">
                                        Discount
                                    </td>
                                    <td class="py-2 pl-9 border-b border-dashed pr-3 text-right">
                                        1000
                                    </td>

                                </tr>
                                <tr class="bg-white">
                                    <th scope="row"
                                        class="py-2 pr-9 pl-3 font-medium border-0 bg-transparent whitespace-nowrap">

                                    </th>
                                    <td class="py-2 pr-12">

                                    </td>
                                    <td class="py-2 pr-12 border-b border-double">
                                        Total
                                    </td>
                                    <td class="py-2 pl-9 pr-3 text-right border-b border-double">
                                        LKR&nbsp; 11000
                                    </td>

                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php echo '<script>
    let resvno = "'.$_GET["resvno"].'"
    </script>'?>

    <div id="editor"></div>
    <script>

        window.addEventListener("load", () => {
            html2canvas(document.body).then(function (canvas) {
                var img = canvas.toDataURL("image/png");
                var doc = new jsPDF();
                doc.addImage(img, 'JPEG', 10, 10);
                doc.save(`invoice-${resvno}.pdf`);
            });
        });
    </script>
</body>

</html>