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
                <form method="post" id="add_reservation">
                    <span class="text-4xl font-bold mb-10">Reservation</span>
                    <div class="flex">
                        <div class="flex flex-col mt-4 w-full">
                            <label for="" class="text-sm">Customer</label>
                            <select name="cusid" id="cusid" class="border border-gray-300 h-8 bg-transparent focus:outline-1 focus:outline-cyan-500" required>
                                <option value="">Select Customer</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="flex flex-col mt-4 w-1/2 mr-2">
                            <label for="" class="text-sm">Room No</label>
                            <input type="hidden" id="roomid" name="roomid">
                            <input type="text" name="roomno" id="roomno" class="bg-white border border-gray-300 h-8 outline-none pl-1" max="10" readonly required/>
                        </div>
                        <div class="flex flex-col mt-4 w-1/2 mr-2">
                            <label for="" class="text-sm">Payment Type</label>
                            <select name="pymtid" id="pymtid" onchange="payment_type_change(this.value)" class="border border-gray-300 h-8 bg-transparent focus:outline-1 focus:outline-cyan-500" required>
                                <option value="">Select Payment Type</option>
                                <option value="1">Cash</option>
                                <option value="2">Credit Card</option>
                            </select>
                        </div>
                    </div>

                    <div id="paytyp" style="display: none;">

                        <div class="flex">
                            <div class="flex flex-col mt-4 w-full">
                                <label for="" class="text-sm">Card Holder Name</label>
                                <input type="text" name="crdhnm" id="crdhnm" class="bg-white border border-gray-300 h-8 outline-none pl-1" max="10"  />
                            </div>
                        </div>

                        <div class="flex">
                            <div class="flex flex-col mt-4 w-full">
                                <label for="" class="text-sm">Card Number</label>
                                <div class="flex border border-gray-300 group-focus-within:border-gray-900 pr-1 pl-2">
                                    <input type="text" name="crdno" id="crdno" oninput="handleCreditCard();" class="h-8 w-full  outline-0 group-focus-within:border-gray-900" >
                                    <span class="text-xs  m-2 mr-0 px-1 bg-slate-400 text-white">Visa</span>
                                </div>
                            </div>
                        </div>

                        <div class="flex">
                            <div class="mr-4 group">
                                <label for="" class="text-sm">Expiration</label>
                                <input type="text" name="expdt" id="expdt" class="h-8 w-full border border-gray-300 outline-0 pl-2 focus:border-gray-900" >
                            </div>
                            <div class="mr-4 group">
                                <label for="" class="text-sm">CVV</label>
                                <input type="text" name="crdcvv" id="crdcvv" class="h-8 w-full border border-gray-300 outline-0 pl-2 focus:border-gray-900" >
                            </div>
                        </div>

                    </div>

                    <div class="flex">
                        <div class="flex flex-col mt-4 w-1/2 mr-2">
                            <label for="" class="text-sm">Checking Date</label>
                            <input datepicker datepicker-format="yyyy-mm-dd" type="text" name="chkindt" id="chkindt" onchange="get_available_rooms();" onkeyup="get_available_rooms();" onclick="get_available_rooms();" class="bg-white border border-gray-300 h-8 outline-none" value="<?= date('Y-m-d'); ?>"  />
                        </div>
                        <div class="flex flex-col mt-4 w-1/2 mr-2">
                            <label for="" class="text-sm">Checkout Date</label>
                            <input datepicker datepicker-format="yyyy-mm-dd" type="text" name="chkoutdt" id="chkoutdt" onchange="get_available_rooms();" onkeyup="get_available_rooms();" onclick="get_available_rooms();" class="bg-white border border-gray-300 h-8 outline-none" value="<?= date('Y-m-d'); ?>" />
                        </div>
                    </div>
                    <div class="w-full flex justify-end">
                        <button class="w-24 bg-cyan-500 py-2 px-3 my-3 text-white font-bold mr-33" id="subBtn">Create</button>
                    </div>
                </form>
            </div>
            <div class="w-2/3 h-auto max-h-96">

                <div class="max-h-96 overflow-auto overflow-x-hidden relative">
                    <table class="w-4/5 text-sm text-left text-gray-500 ml-10 " id="tblData">
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
                            </tr>
                        </thead>
                        <tbody id="parent">
                            <!-- rows will programatically append here -->

                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>
</body>

</html>


<script>
    $().ready(function() {

        get_customer();

        get_available_rooms();

    });

    function get_customer() {
        var value = 0;
        var html = 'cusid';
        $.ajax({
            type: 'POST',
            url: "php_action/get/customer.php",
            data: {
                value: value
            },
            dataType: 'json',
            success: function(response) {
                var len = response.length;
                // TABLE SEARCH FILTER
                if (len != 0) {
                    $('#' + html).empty();
                    $('#' + html).append("<option value=''>Please Select Customer</option>");
                    for (var i = 0; i < len; i++) {
                        var id = response[i]['cus_id'];
                        var name = response[i]['f_name'] + ' ' + response[i]['l_name'];
                        $('#' + html).append("<option value='" + id + "'>" + name + "</option>");
                    }
                } else {
                    $('#' + html).empty();
                    $('#' + html).append("<option value=''>No Customer</option>");
                }
            },
        });
    }

    function payment_type_change(value) {

        if (value == 2) {

            $('#paytyp').css("display", '');
        } else {
            $('#paytyp').css("display", 'none');
        }

    }

    $('#add_reservation').on('submit', function(event) {
        event.preventDefault();

        $.ajax({
            type: "POST",
            url: "php_action/create/create_reservation.php",
            data: $("#add_reservation").serialize(),
            async: false,
            dataType: 'json',
            success: function(response) {

                if (response == true) {

                    alert('Saved Sucessfully!');

                    location.reload();

                } else {

                    alert('Saved Faild!');

                }
            }
        });

    });

    function get_available_rooms() {

        var chkindt = document.getElementById("chkindt").value;
        var chkoutdt = document.getElementById("chkoutdt").value;

        $.ajax({
            type: 'POST',
            url: "php_action/get/room.php",
            data: {
                chkindt: chkindt,
                chkoutdt: chkoutdt
            },
            dataType: 'json',
            success: function(response) {

                var len = response.length;

                $('#tblData tbody').empty();

                if (len > 0) {

                    for (var x = 0; x < len; x++) {

                        var output = '<tr onclick="parse_room_det('+ x +','+response[x]['room_id']+')">';
                        output += '<td scope="col" class="py-3 px-3">'+ response[x]['room_no'] +'<input type="hidden" name="rmno" id="rmno_'+x+'" value="'+ response[x]['room_no'] +'"></td>';
                        output += '<td scope="col" class="py-3 px-3">'+ response[x]['room_type_name'] +'</td>';
                        output += '<td scope="col" class="py-3 px-3 bg-pink-100">'+ response[x]['maximum_guest'] +'</td>';
                        output += '<td scope="col" class="py-3 px-3 bg-pink-100">'+ response[x]['charges_per_night'] +'</td>';
                        output += '<td scope="col" class="py-3 px-3 bg-pink-100">'+ response[x]['charges_per_day'] +'</td>';
                        output += '<td scope="col" class="py-3 px-3 bg-pink-100">'+ response[x]['charges_per_week'] +'</td>';
                        output += '<td scope="col" class="py-3 px-3 bg-pink-100">'+ response[x]['charges_per_month'] +'</td>';
                        output += '</tr>';

                        $('#tblData tbody').append(output);


                    }

                }

            },
        });

    }

    function parse_room_det(id,room_id){

        var rmno = $('#rmno_'+id).val();

        document.getElementById("roomid").value = room_id;

        document.getElementById("roomno").value = rmno;

    }



</script>