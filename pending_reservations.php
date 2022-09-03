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

<body>

    <?php
    include "./components/Nav.php";

    ?>

    <div class="w-screen h-full">
        <div class="w-screen h-10 flex items-center mt-10">
            <div class="w-1/12 h-full">.</div>
            <div class="w-7/12 h-full flex justify-between">
                <div class="flex items-center mr-2">
                    <label for="" class="text-sm mr-2">Status</label>
                    <select name="stat" id="stat" class="border h-8 px-7 bg-transparent focus:outline-1 focus:outline-cyan-500" onchange="get_reservation_det()">
                        <option value="all">All</option>
                        <option value="0">Pending</option>
                        <option value="1">Booking Confirmed</option>
                        <option value="2">Waiting</option>
                        <option value="3">Check-In</option>
                        <option value="4">Check-Out</option>
                        <option value="5">Cancelled</option>
                    </select>
                </div>
                <div class="flex items-center mr-2">
                    <label for="" class="text-sm mr-2">From Date</label>
                    <input type="date" name="frmdt" id="frmdt" class="bg-white border h-8 px-5 outline-none" value="<?= date('Y-m-d'); ?>" />
                </div>
                <div class="flex items-center mr-2">
                    <label for="" class="text-sm mr-2">To Date</label>
                    <input type="date" name="todt" id="todt" class="bg-white border h-8 px-5 outline-none" value="<?= date('Y-m-d'); ?>" />
                </div>
                <div class="flex items-center mr-2">
                    <button class="bg-yellow-700 py-2 px-5 text-white font-bold" onclick="get_reservation_det()">Search</button>
                </div>
            </div>
            <div class="w-4/12 h-full">.</div>
        </div>
        <!--containers-->
        <div class="w-screen h-full flex mt-10">
            <div class="w-1/12 h-full">.</div>
            <div class="w-7/12 max-h-screen">
                <!--table-->
                <div class="max-h-screen overflow-auto overflow-x-hidden">
                    <table class="w-full text-sm text-left text-gray-500 z-0" id="tblData">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 sticky top-0">
                            <tr>
                                <th scope="col" class="py-3 px-3">
                                    Customer
                                </th>
                                <th scope="col" class="py-3 px-3">
                                    Guest Count
                                </th>
                                <th scope="col" class="py-3 px-3">
                                    Room Type
                                </th>
                                <th scope="col" class="py-3 px-3">
                                    Room Number
                                </th>
                                <th scope="col" class="py-3 px-3">
                                    Checkin
                                </th>
                                <th scope="col" class="py-3 px-2">
                                    Checkout
                                </th>
                                <th scope="col" class="py-3 px-2">
                                    Status
                                </th>
                                <th scope="col" class="py-3 px-2 w-5">
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            // $customer = "Alan Gunathilaka";
                            // $guestcount = "5";
                            // $rtype = "Luxury";
                            // $checkin = "2022-08-24";
                            // $checkout = "2022-08-30";
                            // for ($i = 0; $i < 24; $i++) {
                            //     echo '
                            //             <tr class="bg-white border-b ">
                            //                 <th scope="row"
                            //                     class="py-4 px-3 font-medium text-gray-900 whitespace-nowrap">
                            //                     ' . $customer . '
                            //                 </th>
                            //                 <td class="py-4 px-3">
                            //                     ' . $guestcount . '
                            //                 </td>
                            //                 <td class="py-4 px-3">
                            //                 ' . $rtype . '
                            //                 </td>
                            //                 <td class="py-4 px-3">
                            //                 ' . $checkin . '
                            //                 </td>
                            //                 <td class="py-4 px-2">
                            //                 ' . $checkout . '
                            //                 </td>
                            //                 <td class="py-4 px-2 w-5">
                            //                         <button id="dropdownDividerButton" data-dropdown-toggle="dropdownDivider"
                            //                             class="peer text-white bg-cyan-500 py-2 px-2 font-medium  text-sm text-center inline-flex items-center"
                            //                             type="button">
                            //                             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            //                                     <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                            //                             </svg>

                            //                         </button>
                            //                         <div id="dropdownDivider"
                            //                             class="hidden peer-hover:block hover:block absolute z-10 w-44 bg-white  divide-y divide-gray-100 shadow ">
                            //                             <ul class=" py-1 text-sm text-gray-700" aria-labelledby="dropdownDividerButton">
                            //                                 <li>
                            //                                     <a href="Link1" class="block py-1 px-4 hover:bg-gray-100 text-black">Link1</a>
                            //                                 </li>
                            //                                 <li>
                            //                                     <a href="Link1" class="block py-1 px-4 hover:bg-gray-100 text-black">Link1</a>
                            //                                 </li>
                            //                             </ul>

                            //                         </div>
                            //                 </td>
                            //             </tr>
                            //             ';
                            // }

                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="w-4/12 h-full">
                <div class="ml-24">
                    <span class="text-xl font-bold">Room Availability</span>
                    <div class="mt-5 flex flex-col">
                        <div class="flex mt-10">
                            <div class="flex flex-col mr-10">
                                <span class="font-bold text-4xl" id="luxrm">10</span>
                                <span class="font-light text-base">Luxury Rooms</span>
                            </div>

                            <div class="flex flex-col">
                                <span class="font-bold text-4xl" id="delrm">5</span>
                                <span class="font-light text-base">Deluxe Rooms</span>
                            </div>
                        </div>
                        <div class="flex mt-10">
                            <div class="flex flex-col mr-10">
                                <span class="font-bold text-4xl" id="luxry">21</span>
                                <span class="font-light text-base">Economy Rooms</span>
                            </div>

                            <div class="flex flex-col">
                                <span class="font-bold text-4xl" id="dluxrm">14</span>
                                <span class="font-light text-base">Deluxe Rooms</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<script>
    $().ready(function() {

        get_reservation_det();

        // showAlert("Text", "bla bla bla", 'error');

    });

    function get_reservation_det() {

        var stat = document.getElementById("stat").value;
        var frmdt = document.getElementById("frmdt").value;
        var todt = document.getElementById("todt").value;

        $.ajax({
            type: 'POST',
            url: "php_action/get/pending_reservation.php",
            data: {
                stat: stat,
                frmdt: frmdt,
                todt: todt
            },
            dataType: 'json',
            success: function(response) {

                var len = response.length;

                $('#tblData tbody').empty();

                if (len > 0) {

                    for (var x = 0; x < len; x++) {

                        var link = '';

                        var status = '';

                        var revid = response[x]['reservation_sub_id'];

                        if (response[x]['status'] == 0) {

                            status = '<span>Pending</span>';

                            link += '<li>' +
                                '<a href="#" class="block py-1 px-4 hover:bg-gray-100 text-black" onclick="change_reservation_status(' + revid + ',1)">Booking Confirm</a>' +
                                '</li>';
                            link += '<li>' +
                                '<a href="#" class="block py-1 px-4 hover:bg-gray-100 text-black" onclick="change_reservation_status(' + revid + ',5)">Cancel</a>' +
                                '</li>';
                        }

                        if (response[x]['status'] == 1) {

                            status = '<span>Booking Confirmed</span>';

                            link += '<li>' +
                                '<a href="#" class="block py-1 px-4 hover:bg-gray-100 text-black" onclick="change_reservation_status(' + revid + ',2)">Waiting</a>' +
                                '</li>';
                            link += '<li>' +
                                '<a href="#" class="block py-1 px-4 hover:bg-gray-100 text-black" onclick="change_reservation_status(' + revid + ',5)">Cancel</a>' +
                                '</li>';

                        }

                        if (response[x]['status'] == 2) {

                            status = '<span>Waiting</span>';

                            link += '<li>' +
                                '<a href="#" class="block py-1 px-4 hover:bg-gray-100 text-black" onclick="change_reservation_status(' + revid + ',3)">Check-In</a>' +
                                '</li>';

                        }

                        if (response[x]['status'] == 3) {

                            status = '<span>Check-In</span>';

                            link += '<li>' +
                                '<a href="#" class="block py-1 px-4 hover:bg-gray-100 text-black" onclick="change_reservation_status(' + revid + ',4)">Check-Out</a>' +
                                '</li>';

                        }

                        if (response[x]['status'] == 4) {

                            status = '<span>Check-Out</span>';


                        }

                        if (response[x]['status'] == 5) {

                            status = '<span> Canceled </span>';


                        }

                        var button = '<button id="dropdownDividerButton" data-dropdown-toggle="dropdownDivider"' +
                            'class="peer text-white bg-cyan-500 py-2 px-2 font-medium  text-sm text-center inline-flex items-center"' +
                            'type="button">' +
                            '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">' +
                            '<path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />' +
                            '</svg>' +
                            '</button>' +
                            '<div id="dropdownDivider"' +
                            'class="hidden peer-hover:block hover:block absolute z-10 w-44 bg-white  divide-y divide-gray-100 shadow ">' +
                            '<ul class=" py-1 text-sm text-gray-700" aria-labelledby="dropdownDividerButton">' +
                            link +
                            '</ul>' +
                            '</div>';

                        var output = '<tr class="bg-white border-b">';
                        output += '<td class="py-4 px-3">' + response[x]['cusnm'] + '</td>';
                        output += '<td class="py-4 px-3">' + response[x]['maximum_guest'] + '</td>';
                        output += '<td class="py-4 px-3">' + response[x]['room_type_name'] + '</td>';
                        output += '<td class="py-4 px-3">' + response[x]['room_no'] + '</td>';
                        output += '<td class="py-4 px-3">' + response[x]['checkin'] + '</td>';
                        output += '<td class="py-4 px-3">' + response[x]['checkout'] + '</td>';
                        output += '<td class="py-4 px-3">' + status + '</td>';
                        output += '<td class="py-4 px-3">' + button + '</td>';
                        output += '</tr>';

                        $('#tblData tbody').append(output);


                    }

                }

            },
        });


    }

    function change_reservation_status(revid, stat) {

        $.ajax({
            type: "POST",
            url: "php_action/update/update_reservation_status.php",
            data: {
                revid: revid,
                stat: stat
            },
            async: false,
            dataType: 'json',
            success: function(response) {

                if (response == true) {

                    showAlert("Reservation Details", "Reservation Status Updated Successfully!", 'success');

                    get_reservation_det();

                } else {

                    showAlert("Reservation Details", "Reservation Status Updated Faild!", 'error');

                }
            }
        });


    }
</script>