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
                        <span><span class="font-semibold">Total Occupied Rooms</span> : <span id="torooms"></span>
                            
                        </span>
                        <span><span class="font-semibold">Total available Rooms</span> :
                            <span id="tarooms"></span>
                        </span>
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
                                    
                                    <th scope="col" class="py-3 pl-9 pr-3 text-right">
                                        Status
                                    </th>
                                    

                                </tr>
                            </thead>
                            <tbody id="parent">
                                <script>
                                    let available_rooms = 0
                                    let occupied_rooms = 0
                                    let _status = ""
                                    
                                    window.addEventListener("load", () => {
                                        populateDataGrid()
                                    })

                                    const populateDataGrid = async () => {

                                        let response = await fetch("../php_action/get/occupancy.php").then(res => res.json())
                                        //tbody is the parent
                                        let parent = document.getElementById("parent")
                                        parent.innerHTML = ""
                                        response.map(item => {
                                            //create nodes
                                            let row = document.createElement("tr")
                                            row.setAttribute("id", `id:${item.vas_id}`)
                                            let rno = document.createElement("td")
                                            let type = document.createElement("td")
                                            let status = document.createElement("td")

                                            //add styles
                                            row.className = "bg-white border-b"
                                            rno.className = "py-4 px-3 font-medium text-gray-900"
                                            type.className = "py-4 px-3"
                                            status.className = "py-4 px-3 text-right"

                                            // set inner html
                                            rno.innerHTML = item.room_no
                                            type.innerHTML = item.room_type_name

                                            switch (item.status) {
                                                case "0":
                                                    status.innerHTML = "available"
                                                    available_rooms++
                                                    break;
                                                case "1":
                                                    status.innerHTML = "reserved"
                                                    break;
                                                case "2":
                                                    occupied_rooms++
                                                    status.innerHTML = "occupied"
                                                    break;
                                                default:
                                                    break;
                                            }


                                            //append to the parent
                                            row.append(rno)
                                            row.appendChild(type)
                                            row.appendChild(status)

                                            parent.appendChild(row)

                                            

                                        })
                                        document.getElementById("torooms").innerHTML = occupied_rooms
                                        document.getElementById("tarooms").innerHTML = available_rooms
                                        
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
            setTimeout(() => {
                html2canvas(document.body).then(function (canvas) {
                var img = canvas.toDataURL("image/png");
                var doc = new jsPDF();
                doc.addImage(img, 'JPEG', 10, 10);
                doc.save(`occupancy${new Date().toLocaleDateString()}.pdf`);
            });
            }, 1000);
        });
    </script>
</body>

</html>