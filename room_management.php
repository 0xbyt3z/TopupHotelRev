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
        <form>
            <span class="text-4xl font-bold mb-10">Room Category Registration</span>
            <div class="flex">
                <div class="h-auto w-[30rem] flex ">
                    <!--left-->
                    <div class="w-full mt-12 h-auto ">
                        <input type="hidden" id="rtid" value="">
                        <div class="flex flex-col mt-4 w-1/2 mr-2">
                            <label for="" class="text-sm">Room Number</label>
                            <input type="text" name="rno" id="rno"
                                class="h-8 w-full border border-gray-300 outline-0 pl-2 focus:border-gray-900" required>
                        </div>
                        <div class="flex flex-col mt-4 w-1/2 mr-2">
                            <label for="" class="text-sm">Room Type</label>
                            <input type="text" id="rtname"
                                class="h-8 w-full border border-gray-300 outline-0 pl-2 focus:border-gray-900" required>
                        </div>
                        <div class="flex flex-col mt-4 w-4/5 mr-2">
                            <label for="" class="text-sm">Description</label>
                            <textarea name="" id="desc"
                                class="border border-gray-300 w-full h-44 pl-2 outline-0 focus:border-gray-900"></textarea>
                        </div>
                        <div class="w-full h-10 mt-20 flex">
                            <button id="btncreate" class="w-24 bg-green-500 py-2 px-3 mr-5 text-white ">Create</button>
                            <button id="btnupdate" class="w-24 bg-yellow-500 py-2 px-3 mr-5 text-white ">Update</button>
                            <button id="btndelete" class="w-24 bg-red-500 py-2 px-3 mr-5 text-white ">Delete</button>
                        </div>
                    </div>



                </div>

                <!-- table -->
                <div class="h-96 max-h-96 w-[50rem] flex overflow-y-scroll">
                <table class="w-full text-sm text-left text-gray-500">
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
                                let parentid = event.target.parentNode.id;
                                //set the id of the service id input
                                document.getElementById("rtid").value = parentid.split(':')[1]

                                //get the room type name values from the row
                                document.getElementById("rtname").value =  event.target.parentNode.querySelectorAll("td")[1].innerHTML;
                                

                                //get the room type description from the row
                                document.getElementById("desc").value =  event.target.parentNode.querySelectorAll("td")[3].innerHTML;
                                
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
                                    desc.className = "hidden py-4 px-3"
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
                                    row.appendChild(desc)
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
            rtid: document.getElementById("rtid").value,
            rno: document.getElementById("rno").value,
        }
        const response = await fetch("php_action/create/room.php", {
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
        alert("Not implemented")
    })

    //handle delete
    document.getElementById("btndelete").addEventListener("click", async (event) => {
        event.preventDefault()
        const data = {
            rno: document.getElementById("rno").value,
        }
        console.log(data);
        const response = await fetch("php_action/delete/room.php", {
            method: "POST",
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        }).then(res => res.text())

        console.log(response)
    })


    

</script>