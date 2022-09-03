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
            <div class="flex">
                <div class="h-auto w-[30rem]">
                    <span class="text-4xl font-bold mb-10">Payment</span>
                    <!--left-->
                    <div class="w-full mt-12 h-auto ">
                        <div class="flex flex-col mt-4 w-1/2 mr-2">
                            <label for="" class="text-sm">Reservarion ID</label>
                            <input id="rid" type="text" name="rid" value="<?php echo $_GET["resvno"] ?>"
                                class="h-8 w-full border border-gray-300 outline-0 pl-2 focus:border-gray-900" required>
                        </div>
                        <div class="flex flex-col mt-4 w-1/2 mr-2">
                            <label for="" class="text-sm">Customer</label>
                            <input id="customer" type="text" name="customer" value="<?php echo $_GET["cus"] ?>"
                                class="h-8 w-full border border-gray-300 outline-0 pl-2 focus:border-gray-900" required>
                        </div>
                        <div class="flex flex-col mt-4 w-1/2 mr-2">
                            <label for="" class="text-sm">Room Charges</label>
                            <div class="flex border border-gray-300 group-focus-within:border-gray-900">
                                <span class="text-sm  m-2 mr-0 px-1">Rs.</span>
                                <input id="charges" type="text" name="charges"
                                    class="h-8 w-full  outline-0 pl-2 group-focus-within:border-gray-900" required>
                            </div>
                        </div>

                        <div class="flex flex-col mt-4 w-1/2 mr-2">
                            <label for="" class="text-sm">Total Additional Charges</label>
                            <div class="flex border border-gray-300 group-focus-within:border-gray-900">
                                <span class="text-sm  m-2 mr-0 px-1">Rs.</span>
                                <input id="ocharges" type="text" name="ocharges"
                                    class="h-8 w-full  outline-0 pl-2 group-focus-within:border-gray-900" required>
                            </div>
                        </div>

                        <div class="w-full h-10 mt-10 flex">
                            <button id="btncreate" class="w-24 bg-green-500 py-2 px-3 mr-5 text-white">Proceed</button>
                        </div>
                        
                    </div>

                </div>
                <!-- table -->
                <div class="h-96 max-h-96 w-[30rem] flex overflow-y-scroll">
                    <table class="w-full max-w-[63vw] text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 sticky top-0">
                            <tr>
                            <th scope="col" class="py-3 px-3">
                                ID
                            </th>
                            <th scope="col" class="py-3 px-3">
                                Serivice
                            </th>
                            <th scope="col" class="py-3 px-3">
                                Charges
                            </th>
                            <th scope="col" class="py-3 px-3">
                                
                            </th>
                            </tr>
                        </thead>
                        <tbody id="parent">
                            <!-- rows will programatically append here -->
                            <script>
                                let serviceslist = [] 
                                const callback = (event)=>{
                                    let parent = event.target.parentNode;
                                    let charges = 0
                                    if(parent.tagName === "TD"){
                                        parent = parent.parentNode
                                    }
                                    
                                    let service = parent.querySelectorAll("td")[1].innerHTML
                                    let charge = parseInt(parent.querySelectorAll("td")[2].innerHTML)

                                    //push the service into the list if the seervice is selected and
                                    //not already included included 

                                    //check the item is selected from the table
                                    if(parent.querySelectorAll("td")[3].querySelectorAll("input")[0].checked){
                                        //check the service is not included in the list
                                        if(serviceslist.find((s)=>{return s.name === service})){
                                            console.log("found");
                                        }else{
                                            serviceslist.push({name: service,charge : charge})
                                        }
                                    }else{
                                        //if the element is not checked try removing the service from the list
                                        //traverse the list each time and add update the charges
                                        let index= 0
                                        for (index = 0; index < serviceslist.length; index++) {
                                            if(serviceslist[index].name == service){
                                                if (index > -1) { // only splice array when item is found
                                                    serviceslist.splice(index, 1); // 2nd parameter means remove one item only
                                                }
                                            }
                                            
                                        }
                                    }
                                    
                                    //traverse the list each time and add update the charges
                                    serviceslist.map(item=>{
                                            charges += item.charge
                                    })

                                    console.log(serviceslist);
                                    //set the input tag
                                    document.getElementById("ocharges").value = charges
                                }

                                window.addEventListener("load",()=>{
                                    populateDataGrid()
                                })

                                const populateDataGrid = async ()=>{

                                    let response = await fetch("php_action/get/optionalcharges.php").then(res=>res.json())
                                    //tbody is the parent
                                    let parent = document.getElementById("parent")
                                    parent.innerHTML = ""
                                    response.map(item=>{
                                        //create nodes
                                        let row = document.createElement("tr")
                                        row.setAttribute("id",`id:${item.vas_id}`)
                                        row.onclick = function(event) { callback(event) };
                                        let id_td = document.createElement("td")
                                        let service_td = document.createElement("td")
                                        let charges_td = document.createElement("td")
                                        let select = document.createElement("td")

                                        //add styles
                                        row.className = "bg-white border-b"
                                        id_td.className = "py-4 px-3 font-medium text-gray-900"
                                        service_td.className = "py-4 px-3"
                                        charges_td.className = "py-4 px-3"
                                        select.className = "py-4 px-3"

                                        // set inner html
                                        id_td.innerHTML = item.vas_id
                                        service_td.innerHTML = item.service
                                        charges_td.innerHTML = item.charges

                                        //create check box to append to the the select td
                                        let checkbox = document.createElement("input")
                                        checkbox.type="checkbox"
                                        checkbox.id=item.vas_id
                                        checkbox.value=item.vas_id
                                        select.appendChild(checkbox)

                                        //append to the parent
                                        row.append(id_td)
                                        row.appendChild(service_td)
                                        row.appendChild(charges_td)
                                        row.appendChild(select)
                                        
                                        parent.appendChild(row)
                                    })
                                }
                            </script>
                        </tbody>

                    </table>
                </div>

            </div>
        </form>

    </div>


</body>

</html>