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
                        <span class="text-3xl font-bold">Revenue</span>
                    </div>
                </div>


                <!--package table-->
                <div class="w-full h-auto flex flex-col text-sm mt-10">
                    <div class="w-full overflow-x-auto relative table">
                        <table class="table w-full text-sm text-left text-gray-500 border-t-0">
                            <thead class="text-sm text-gray-700  bg-gray-300 ">
                                <tr>
                                    <th scope="col" class="py-3 pr-9 pl-3">
                                        Reservation ID
                                    </th>
                                    <th scope="col" class="py-3 pr-12">
                                        Type
                                    </th>
                                    <th scope="col" class="py-3 pr-12">
                                        Date
                                    </th>
                                    <th scope="col" class="py-3 pl-9 pr-3 text-right">
                                        Payment
                                    </th>

                                </tr>
                            </thead>
                            <tbody id="parent">

                                <script>
                                    let _total = 0
                                </script>

                                <script>

                                    window.addEventListener("load", () => {
                                        populateDataGrid()
                                    })

                                    const populateDataGrid = async () => {

                                        let response = await fetch("../php_action/get/revenue.php").then(res => res.json())
                                        //tbody is the parent
                                        let parent = document.getElementById("parent")
                                        parent.innerHTML = ""
                                        response.map(item => {
                                            //create nodes
                                            let row = document.createElement("tr")
                                            row.setAttribute("id", `id:${item.vas_id}`)
                                            let id_td = document.createElement("td")
                                            let type = document.createElement("td")
                                            let date = document.createElement("td")
                                            let payment = document.createElement("td")

                                            //add styles
                                            row.className = "bg-white border-b"
                                            id_td.className = "py-4 px-3 font-medium text-gray-900"
                                            type.className = "py-4 px-3"
                                            date.className = "py-4 px-3"
                                            payment.className = "py-4 pr-3 text-right"

                                            // set inner html
                                            id_td.innerHTML = item.reservation_id
                                            type.innerHTML = item.type
                                            date.innerHTML = item.date
                                            payment.innerHTML = item.total

                                            _total += parseInt(item.total)

                                            //append to the parent
                                            row.append(id_td)
                                            row.appendChild(type)
                                            row.appendChild(date)
                                            row.appendChild(payment)

                                            parent.appendChild(row)

                                            parent.innerHTML += `<tr class="bg-white">
                                                                    <th scope="row"
                                                                        class="py-2 pr-9 pl-3 font-medium border-0 bg-transparent whitespace-nowrap">
                                                                    </th>
                                                                    <td class="py-2 pr-12">
                                                                    </td>
                                                                    <td class="py-2 pr-12 border-b border-double">
                                                                        Total
                                                                    </td>
                                                                    <td class="py-2 pl-9 pr-3 text-right border-b border-double">
                                                                        LKR&nbsp; ${_total}
                                                                    </td>
                                                                </tr>`

                                        })
                                    }
                                </script>



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
            setTimeout(()=>{
                    html2canvas(document.body).then(function (canvas) {
                        var img = canvas.toDataURL("image/png");
                        var doc = new jsPDF();
                        doc.addImage(img, 'JPEG', 10, 10);
                        doc.save(`revenue${new Date().toLocaleDateString()}.pdf`);
                    });
            },2000)
        });
    </script>
</body>

</html>