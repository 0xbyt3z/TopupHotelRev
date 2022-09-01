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
                        <div class="flex flex-col mt-4 w-full">
                            <label for="" class="text-sm">Customer</label>
                            <select name="" id="" class="border border-gray-300 h-8 bg-transparent focus:outline-1 focus:outline-cyan-500">
                                <option value="">Normal</option>
                                <option value="">Luxury</option>
                                <option value="">Extra Luxury</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="flex flex-col mt-4 w-1/2 mr-2">
                            <label for="" class="text-sm">Room Type</label>
                            <input type="text" name="rtname" id="rtname" class="bg-white border border-gray-300 h-8 outline-none pl-1" max="10" />
                        </div>
                        <div class="flex flex-col mt-4 w-1/2 mr-2">
                            <label for="" class="text-sm">Payment Type</label>
                            <select name="" id="" class="border border-gray-300 h-8 bg-transparent focus:outline-1 focus:outline-cyan-500">
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
                            <input type="number" name="" id="" class="bg-white border border-gray-300 h-8 outline-none pl-1" max="10" />
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
                                Type Name
                            </th>
                            <th scope="col" class="py-3 px-3">
                                Guests
                            </th>
                            <th scope="col" class="py-3 px-3 bg-pink-100">
                                night
                            </th>
                            <th scope="col" class="py-3 px-3 bg-pink-100">
                                day
                            </th>
                            <th scope="col" class="py-3 px-3 bg-pink-100">
                                weekly
                            </th>
                            <th scope="col" class="py-3 px-3 bg-pink-100">
                                monthly
                            </th>
                            <th scope="col" class="py-3 px-3 ">
                                Status
                            </th>
                        </tr>
                    </thead>
                    <tbody id="parent">
                        <!-- rows will programatically append here -->
                        <script>

                            const callback = (event) => {
                                let parentid = event.target.parentNode.id;
                                //set the id of the service id input
                                document.getElementById("rtid").value = parentid.split(':')[1]

                                //get the room type name values from the row
                                document.getElementById("rtname").value =  event.target.parentNode.querySelectorAll("td")[1].innerHTML;
                                

                                //get the room type description from the row
                                document.getElementById("desc").value =  event.target.parentNode.querySelectorAll("td")[3].innerHTML;
                                
                            }

                            window.addEventListener("load", async () => {
                                let response = await fetch("php_action/get/room.php").then(res => res.json())
                                //tbody is the parent
                                let parent = document.getElementById("parent")
                                response.map(item => {
                                    //create nodes
                                    let row = document.createElement("tr")
                                    row.setAttribute("id", `id:${item.room_type_id}`)
                                    row.onclick = function (event) { callback(event) };
                                    let rno = document.createElement("td")
                                    let rtname = document.createElement("td")
                                    let gcount = document.createElement("td")
                                    let desc = document.createElement("td")
                                    let pncharge = document.createElement("td")
                                    let pdcharge = document.createElement("td")
                                    let wcharge = document.createElement("td")
                                    let mcharge = document.createElement("td")
                                    let status = document.createElement("td")

                                    //add styles
                                    row.className = "bg-white border-b"
                                    rno.className = "py-4 px-3 font-medium text-gray-900"
                                    rtname.className = "py-4 px-3"
                                    gcount.className = "py-4 px-3"
                                    desc.className = "py-4 px-3"
                                    pncharge.className = "py-4 px-3"
                                    pdcharge.className = "py-4 px-3"
                                    wcharge.className = "py-4 px-3"
                                    mcharge.className = "py-4 px-3"
                                    //set colour depending on the status
                                    switch (item.status) {
                                        case "available":
                                            status.className = "py-4 px-3 bg-green-300"
                                            break;
                                        case "reserved":
                                            status.className = "py-4 px-3 bg-yellow-300"
                                            break;
                                        case "occupied":
                                            status.className = "py-4 px-3 bg-yellow-300"
                                            break;
                                        default:
                                            break;
                                    }

                                    // set inner html
                                    rno.innerHTML = item.room_no
                                    rtname.innerHTML = item.room_type_name
                                    gcount.innerHTML = item.maximum_guest
                                    desc.innerHTML = item.description
                                    pncharge.innerHTML = item.charges_per_night
                                    pdcharge.innerHTML = item.charges_per_day
                                    wcharge.innerHTML = item.charges_per_week
                                    mcharge.innerHTML = item.charges_per_month
                                    status.innerHTML = item.status

                                    //append to the parent
                                    row.append(rno)
                                    row.appendChild(rtname)
                                    row.appendChild(gcount)
                                    //row.appendChild(desc)
                                    row.appendChild(pncharge)
                                    row.appendChild(pdcharge)
                                    row.appendChild(wcharge)
                                    row.appendChild(mcharge)
                                    row.appendChild(status)

                                    parent.appendChild(row)
                                })
                            })
                        </script>
                    </tbody>
                    </table>
                </div>
                <div class="w-full flex justify-end">
                    <button class="w-24 bg-cyan-500 py-2 px-3 my-3 text-white font-bold mr-32">Create</button>
                </div>

            </div>
        </div>
    </div>
</body>

</html>