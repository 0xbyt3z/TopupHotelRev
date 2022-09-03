
 
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
<body class="bg-black">

<?php
include "./components/Nav.php";

?>


<!-- Main modal -->
<div id="defaultModal" tabindex="-1" class=" overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center flex" aria-modal="true" role="dialog">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white  shadow ">
            <!-- Modal header -->
            <div class="flex justify-between items-start p-4 rounded-t border-b ">
                <h3 class="text-xl font-semibold text-gray-900 ">
                    Terms of Service
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900  text-sm p-1.5 ml-auto inline-flex items-center " data-modal-toggle="defaultModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
            <div class="h-96 max-h-96 w-full flex overflow-y-scroll">
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
                                            //console.log("found");
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
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 ">
                <button data-modal-toggle="defaultModal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium  text-sm px-5 py-2.5 text-center  ">I accept</button>
            </div>
        </div>
    </div>
</div>


</body>
</html>