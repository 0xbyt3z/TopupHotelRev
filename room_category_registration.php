<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Signup | Hotel Reservation</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="./app.js"></script>

    <link rel="stylesheet" href="style.css">


</head>

<body>

    <?php
include "./components/Nav.php";

?>

    <div class="w-screen h-full flex mt-36 justify-center">
        <form method="">
            <span class="text-4xl font-bold mb-10">Room Category Registration</span>
            <div class="h-auto w-[50rem] flex ">
                <!--left-->
                <div class="w-1/2 mt-12 h-auto ">
                    <div class="flex flex-col mt-4 w-1/2 mr-2">
                        <label for="" class="text-sm ">Room Type ID</label>
                        <input type="text" name="rtid" id="rtid"
                            class="h-8 w-full border border-gray-300 outline-0 pl-2 focus:border-gray-900">
                    </div>
                    <div class="flex flex-col mt-4 w-1/2 mr-2">
                        <label for="" class="text-sm">Room Type Name</label>
                        <input type="text" name="rtname" id="rtname"
                            class="h-8 w-full border border-gray-300 outline-0 pl-2 focus:border-gray-900">
                    </div>
                    <div class="flex flex-col mt-4 w-1/2 mr-2">
                        <label for="" class="text-sm">Guest Count</label>
                        <input type="number" name="gcount" id="gcount"
                            class="h-8 w-full border border-gray-300 outline-0 pl-2 focus:border-gray-900">
                    </div>
                    <div class="flex flex-col mt-4 w-4/5 mr-2">
                        <label for="" class="text-sm">Description</label>
                        <textarea name="desc" id="desc"
                            class="border border-gray-300 w-full h-44 pl-2 outline-0 focus:border-gray-900"></textarea>
                    </div>
                </div>


                <!--right-->
                <div class="w-1/2 mt-12 h-auto border-0 border-l-[1px] border-l-gray-500">
                    <div class="ml-10">
                        <span class="">Charges</span>

                        <!--grid-->
                        <div class="grid grid-cols-2 gap-2">
                            <div class="mr-4 group">
                                <label for="" class="text-sm">Per Night Charges</label>
                                <div class="flex border border-gray-300 group-focus-within:border-gray-900">
                                    <span class="text-sm  m-2 mr-0 px-1">Rs.</span>
                                    <input type="number" name="pncharge" id="pncharge"
                                        class="h-8 w-full  outline-0 pl-2 group-focus-within:border-gray-900">
                                </div>
                            </div>
                            <div class="mr-4 group">
                                <label for="" class="text-sm">Per day Charges</label>
                                <div class="flex border border-gray-300 group-focus-within:border-gray-900">
                                    <span class="text-sm  m-2 mr-0 px-1">Rs.</span>
                                    <input type="number" name="pdcharge" id="pdcharge"
                                        class="h-8 w-full  outline-0 pl-2 group-focus-within:border-gray-900">
                                </div>
                            </div>
                            <div class="mr-4 group">
                                <label for="" class="text-sm">Weekly Charges</label>
                                <div class="flex border border-gray-300 group-focus-within:border-gray-900">
                                    <span class="text-sm  m-2 mr-0 px-1">Rs.</span>
                                    <input type="number" name="wcharge" id="wcharge"
                                        class="h-8 w-full  outline-0 pl-2 group-focus-within:border-gray-900">
                                </div>
                            </div>
                            <div class="mr-4 group">
                                <label for="" class="text-sm">Monthly Charges</label>
                                <div class="flex border border-gray-300 group-focus-within:border-gray-900">
                                    <span class="text-sm  m-2 mr-0 px-1">Rs.</span>
                                    <input type="number" name="mcharge" id="mcharge"
                                        class="h-8 w-full  outline-0 pl-2 group-focus-within:border-gray-900">
                                </div>
                            </div>
                            <div class="mr-4 group">
                                <label for="" class="text-sm">Dsicount</label>
                                <div class="flex border border-gray-300 group-focus-within:border-gray-900">
                                    <span class="text-sm  m-2 mr-0 px-1">Rs.</span>
                                    <input type="number" name="disc" id="disc"
                                        class="h-8 w-full  outline-0 pl-2 group-focus-within:border-gray-900">
                                </div>
                            </div>
                        </div>
                        <div class="w-full h-10 mt-20 flex">
                            <button id="btncreate" class="w-24 bg-green-500 py-2 px-3 mr-5 text-white ">Create</button>
                            <button id="btnupdate" class="w-24 bg-yellow-500 py-2 px-3 mr-5 text-white ">Update</button>
                            <button id="btndelete" class="w-24 bg-red-500 py-2 px-3 mr-5 text-white ">Delete</button>
                        </div>


                    </div>
                </div>

            </div>

            <!--table -->
            <div class="mt-10 h-96 w-[50rem] flex bg-yellow-300 overflow-auto overflow-x-hidden">
                <table class="w-full max-w-[63vw] text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 sticky top-0">
                        <tr>
                            <th scope="col" class="py-3 px-3">
                                ID
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
                            <th scope="col" class="py-3 px-3 bg-green-100">
                                disc
                            </th>
                        </tr>
                    </thead>
                    <tbody id="parent">
                        <!-- rows will programatically append here -->
                        <script>

                            const callback = (event) => {
                                let parent = event.target.parentNode.id;
                                //set the id of the service id input
                                document.getElementById("rtid").value = parent.split(':')[1]
                            }

                            window.addEventListener("load", async () => {
                                let response = await fetch("php_action/get/roomcategory.php").then(res => res.json())
                                //tbody is the parent
                                let parent = document.getElementById("parent")
                                response.map(item => {
                                    //create nodes
                                    let row = document.createElement("tr")
                                    row.setAttribute("id", `id:${item.room_type_id}`)
                                    row.onclick = function (event) { callback(event) };
                                    let id = document.createElement("td")
                                    let rtname = document.createElement("td")
                                    let gcount = document.createElement("td")
                                    let desc = document.createElement("td")
                                    let pncharge = document.createElement("td")
                                    let pdcharge = document.createElement("td")
                                    let wcharge = document.createElement("td")
                                    let mcharge = document.createElement("td")
                                    let disc = document.createElement("td")

                                    //add styles
                                    row.className = "bg-white border-b"
                                    id.className = "py-4 px-3 font-medium text-gray-900"
                                    rtname.className = "py-4 px-3"
                                    gcount.className = "py-4 px-3"
                                    desc.className = "py-4 px-3"
                                    pncharge.className = "py-4 px-3"
                                    pdcharge.className = "py-4 px-3"
                                    wcharge.className = "py-4 px-3"
                                    mcharge.className = "py-4 px-3"
                                    disc.className = "py-4 px-3"

                                    // set inner html
                                    id.innerHTML = item.room_type_id
                                    rtname.innerHTML = item.room_type_name
                                    gcount.innerHTML = item.maximum_guest
                                    desc.innerHTML = item.description
                                    pncharge.innerHTML = item.charges_per_night
                                    pdcharge.innerHTML = item.charges_per_day
                                    wcharge.innerHTML = item.charges_per_week
                                    mcharge.innerHTML = item.charges_per_month
                                    disc.innerHTML = item.discount

                                    //append to the parent
                                    row.append(id)
                                    row.appendChild(rtname)
                                    row.appendChild(gcount)
                                    //row.appendChild(desc)
                                    row.appendChild(pncharge)
                                    row.appendChild(pdcharge)
                                    row.appendChild(wcharge)
                                    row.appendChild(mcharge)
                                    row.appendChild(disc)

                                    parent.appendChild(row)
                                })
                            })
                        </script>
                    </tbody>

                </table>
            </div>

        </form>
    </div>

</body>

</html>



<script>

    //handle create
    document.getElementById("btncreate").addEventListener("click", async (event) => {
        event.preventDefault()
        const data = {
            rtname: document.getElementById("rtname").value,
            gcount: document.getElementById("gcount").value,
            desc: document.getElementById("desc").value,
            pncharge: document.getElementById("pncharge").value,
            pdcharge: document.getElementById("pdcharge").value,
            wcharge: document.getElementById("wcharge").value,
            mcharge: document.getElementById("mcharge").value,
            disc: document.getElementById("disc").value,
        }
        const response = await fetch("php_action/create/roomcategory.php", {
            method: "POST",
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        }).then(res => res.json())

        console.log(response)
    })

    //handle update
    document.getElementById("btnupdate").addEventListener("click", async (event) => {
        event.preventDefault()
        const data = {
            rtid: document.getElementById("rtid").value,
            rtname: document.getElementById("rtname").value,
            gcount: document.getElementById("gcount").value,
            desc: document.getElementById("desc").value,
            pncharge: document.getElementById("pncharge").value,
            pdcharge: document.getElementById("pdcharge").value,
            wcharge: document.getElementById("wcharge").value,
            mcharge: document.getElementById("mcharge").value,
            disc: document.getElementById("disc").value,
        }
        const response = await fetch("php_action/update/roomcategory.php", {
            method: "POST",
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        }).then(res => res.text())

        console.log(response)
    })

    //handle delete
    document.getElementById("btndelete").addEventListener("click", async (event) => {
        event.preventDefault()
        const data = {
            rtid: document.getElementById("rtid").value,
        }
        console.log(data);
        const response = await fetch("php_action/delete/roomcategory.php", {
            method: "POST",
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        }).then(res => res.text())

        console.log(response)
    })

</script>