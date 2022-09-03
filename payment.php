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
        <form method="post" id="add_payment">
            <div class="flex">
                <div class="h-auto w-[30rem]">
                    <span class="text-4xl font-bold mb-10">Payment</span>
                    <!--left-->
                    <div class="w-full mt-12 h-auto ">
                        <div class="flex flex-col mt-4 w-1/2 mr-2">
                            <label for="" class="text-sm">Reservarion ID</label>
                            <input id="revid" type="text" name="revid" value="<?php echo $_GET["revid"] ?>" class="h-8 w-full border border-gray-300 outline-0 pl-2 focus:border-gray-900" required readonly>
                        </div>
                        <div class="flex flex-col mt-4 w-1/2 mr-2">
                            <label for="" class="text-sm">Customer</label>
                            <input id="customer" type="text" name="customer" value="" class="h-8 w-full border border-gray-300 outline-0 pl-2 focus:border-gray-900" required readonly>
                        </div>
                        <div class="flex flex-col mt-4 w-1/2 mr-2">
                            <label for="" class="text-sm">Room Charges</label>
                            <div class="flex border border-gray-300 group-focus-within:border-gray-900">
                                <span class="text-sm  m-2 mr-0 px-1">Rs.</span>
                                <input id="rmchg" type="text" name="rmchg" class="h-8 w-full  outline-0 pl-2 group-focus-within:border-gray-900" required readonly>
                            </div>
                        </div>

                        <div class="flex flex-col mt-4 w-1/2 mr-2">
                            <label for="" class="text-sm">Total Additional Charges</label>
                            <div class="flex border border-gray-300 group-focus-within:border-gray-900">
                                <span class="text-sm  m-2 mr-0 px-1">Rs.</span>
                                <input id="adtchg" type="text" name="adtchg" class="h-8 w-full  outline-0 pl-2 group-focus-within:border-gray-900" required readonly>
                            </div>
                        </div>

                        <div class="w-full h-10 mt-10 flex">
                            <button type="button" id="btncreate" class="w-24 bg-green-500 py-2 px-3 mr-5 text-white">Proceed</button>
                        </div>

                    </div>

                </div>

            </div>
        </form>

    </div>


</body>

</html>

<script>

    get_payment_details();


    function get_payment_details() {

        var revid = $('#revid').val();

        $.ajax({
            type: 'POST',
            url: "php_action/get/payment_details.php",
            data: {
                revid: revid
            },
            dataType: 'json',
            success: function(response) {

                var len = response.length;

                if(len > 0){

                    $('#customer').val(response[0]);
                    $('#rmchg').val(response[1]);
                    $('#adtchg').val(response[2]);


                }

            }
        });


    }



    $("#btncreate").on('click', function(e) {
        e.preventDefault();

        $.ajax({
            type: "POST",
            url: "php_action/create/create_payment.php",
            data: $("#add_payment").serialize(),
            async: false,
            dataType: 'json',
            success: function(response) {

                if (response == true) {

                    alert('Saved Sucessfully!');

                } else {

                    alert('Saved Faild!');

                }
            }
        });

    });






</script>