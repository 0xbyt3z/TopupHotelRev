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
                    <span class="text-4xl font-bold mb-10">Room Category Registration</span>
                    <!--left-->
                    <div class="w-full mt-12 h-auto ">
                        <div class="flex flex-col mt-4 w-1/2 mr-2">
                            <label for="" class="text-sm">Services ID</label>
                            <input id="sid" type="text" name="sid"
                                class="h-8 w-full border border-gray-300 outline-0 pl-2 focus:border-gray-900" required>
                        </div>
                        <div class="flex flex-col mt-4 w-1/2 mr-2">
                            <label for="" class="text-sm">Services</label>
                            <input id="service" type="text" name="service"
                                class="h-8 w-full border border-gray-300 outline-0 pl-2 focus:border-gray-900" required>
                        </div>
                        <div class="flex flex-col mt-4 w-1/2 mr-2">
                            <label for="" class="text-sm">Charges</label>
                            <div class="flex border border-gray-300 group-focus-within:border-gray-900">
                                <span class="text-sm  m-2 mr-0 px-1">Rs.</span>
                                <input id="charges" type="text" name="charges"
                                    class="h-8 w-full  outline-0 pl-2 group-focus-within:border-gray-900" required>
                            </div>
                        </div>

                        <div class="w-full h-10 mt-20 flex">
                            <button id="btncreate" class="w-24 bg-green-500 py-2 px-3 mr-5 text-white">Create</button>
                            <button id="btnupdate" class="w-24 bg-yellow-500 py-2 px-3 mr-5 text-white ">Update</button>
                            <button id="btndelete" class="w-24 bg-red-500 py-2 px-3 mr-5 text-white ">Delete</button>
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
                            </tr>
                        </thead>
                        <tbody id="parent">
                            <!-- rows will programatically append here -->
                            <script>

                                const callback = (event)=>{
                                    let parent = event.target.parentNode.id;
                                    //set the id of the service id input
                                    document.getElementById("sid").value = parent.split(':')[1]
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

                                        //add styles
                                        row.className = "bg-white border-b"
                                        id_td.className = "py-4 px-3 font-medium text-gray-900"
                                        service_td.className = "py-4 px-3"
                                        charges_td.className = "py-4 px-3"

                                        // set inner html
                                        id_td.innerHTML = item.vas_id
                                        service_td.innerHTML = item.service
                                        charges_td.innerHTML = item.charges

                                        //append to the parent
                                        row.append(id_td)
                                        row.appendChild(service_td)
                                        row.appendChild(charges_td)
                                        
                                        
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

    <div id="alertparent" class="absolute w-screen h-auto bottom-0">
        
    </div>

</body>

</html>

<script>

    //handle create
    document.getElementById("btncreate").addEventListener("click", async (event) => {
        event.preventDefault()
        const data = {
            service: document.getElementById("service").value,
            charges: document.getElementById("charges").value
        }
        console.log(data);
        const response = await fetch("php_action/create/optionalcharges.php", {
            method: "POST",
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        }).then(res => res.text())

        if(response === "success"){
            showAlert("Inserted","Successfully created the records","success")
        }else{
            showAlert("Error","Error Occured when trying to create the records","error")
        }
        populateDataGrid();
    })

    //handle update
    document.getElementById("btnupdate").addEventListener("click", async (event) => {
        event.preventDefault()
        const data = {
            sid: document.getElementById("sid").value,
            service: document.getElementById("service").value,
            charges: document.getElementById("charges").value
        }
        console.log(data);
        const response = await fetch("php_action/update/optionalcharges.php", {
            method: "POST",
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        }).then(res => res.text())

        if(response === "success"){
            showAlert("Updated","Successfully updated the records","success")
        }else{
            showAlert("Error","Error Occured when trying to update the records","error")
        }
        populateDataGrid();
    })

    //handle delete
    document.getElementById("btndelete").addEventListener("click", async (event) => {
        event.preventDefault()
        const data = {
            sid: document.getElementById("sid").value,
        }
        console.log(data);
        const response = await fetch("php_action/delete/optionalcharges.php", {
            method: "POST",
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        }).then(res => res.text())

        if(response === "success"){
            showAlert("Deleted","Successfully deleted the records","success")
        }else{
            showAlert("Error","Error Occured when trying to delete the records","error")
        }
        populateDataGrid();
    })

</script>