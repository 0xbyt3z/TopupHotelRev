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
                        <span><span class="font-semibold">Name</span> : <span id="cname"></span></span>
                        <span><span class="font-semibold">Mobile</span> : (+94) 73 345 3633</span>
                        <span><span class="font-semibold">Address</span> : <span id="caddress"></span></span>
                    </div>
                    <div class="w-1/3 h-auto flex flex-col">
                        <span class="font-bold mb-2 text-base">Billling To</span>
                        <span><span class="font-semibold">Name</span> : <span id="bname"></span></span>
                        <span><span class="font-semibold">Mobile</span> : (+94) 73 345 3633</span>
                        <span><span class="font-semibold">Address</span> : <span id="baddress"></span></span>
                    </div>

                </div>

                <!--package table-->
                <div class="w-full h-auto flex flex-col text-sm mt-10">
                    <div class="w-full overflow-x-auto relative table">
                        <table class="table w-full text-sm text-left text-gray-500 border-t-0">
                            <thead class="text-sm text-gray-700  bg-gray-300 ">
                                <tr>
                                    <th scope="col" class="py-3 pr-9 pl-3">
                                        Description
                                    </th>
                                    <th scope="col" class="py-3 pl-9 pr-3 text-right">
                                        Charges
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                
                                <tr class="bg-white border-b ">
                                    <th scope="row" class="py-2 pr-9 pl-3 font-medium text-gray-900 whitespace-nowrap">
                                        Reservation Charges
                                    </th>
                                    
                                    
                                    <td class="py-2 pl-9 pr-3 text-right">
                                        <span id="rcharges"></span>
                                    </td>
                                </tr>

                                <tr class="bg-white border-b ">
                                    <th scope="row" class="py-2 pr-9 pl-3 font-medium text-gray-900 whitespace-nowrap">
                                        Additional Charges
                                    </th>
                                    
                                    <td class="py-2 pl-9 pr-3 text-right">
                                        <span id="acharges"></span>
                                    </td>
                                </tr>

                                <!--summary-->
                                <tr class="bg-white">
                                    
                                    <th scope="row" class="py-2 pr-9 pl-3 font-medium text-gray-900 whitespace-nowrap">
                                        Total
                                    </th>
                                    <td class="py-2 pl-9 pr-3 text-right">
                                        LKR&nbsp;<span id="totalcharges"></span>
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

        window.addEventListener("load", async () => {

            //get params from url
            var url = new URL(location.href);
            var resvno = url.searchParams.get("resvno");
            let response = await fetch(`../php_action/get/customerfromrev.php?resvno=${resvno}`).then(res => res.json())

            //set the values
            document.getElementById("cname").innerHTML = `${response[0].f_name} ${response[0].l_name}`
            document.getElementById("bname").innerHTML = `${response[0].f_name} ${response[0].l_name}`
            document.getElementById("caddress").innerHTML = `${response[0].addr_01} ${response[0].addr_02}`
            document.getElementById("baddress").innerHTML = `${response[0].addr_01} ${response[0].addr_02}`
            
            
            //ge payment details
            let data = await fetch(`../php_action/get/paymentcharges.php?resvno=${resvno}`).then(res => res.json())
            
            console.log(data);
            document.getElementById("rcharges").innerHTML = data[0].revchg
            document.getElementById("acharges").innerHTML = data[0].adtchg
            document.getElementById("totalcharges").innerHTML =parseInt(data[0].revchg) + parseInt(data[0].adtchg)
            
            setTimeout(() => {
                html2canvas(document.body).then(function (canvas) {
                    var img = canvas.toDataURL("image/png");
                    var doc = new jsPDF();
                    doc.addImage(img, 'JPEG', 10, 10);
                    doc.save(`invoice-${resvno}.pdf`);
                }).then(()=>{
                    //location.replace("../pending_reservations.php")
                });
            }, 2000);


        });
    </script>
</body>

</html>