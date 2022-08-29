<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
  $script = substr($_SERVER['SCRIPT_NAME'],15);
  if($script == "index.php" || $script == "cussignup.php" ||  $script == "travelagentsignup.php" ){
  }else{
    header("location:login.php");

  }
}

;
?>

<script>
  let state = false;
  const toggleAvatarDropDown = () => {
    if (state) {
      document.getElementById("nav-avatar-dropdown").classList.add("invisible")
    } else {
      document.getElementById("nav-avatar-dropdown").classList.remove("invisible")
    }
    state = !state
  }
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<nav class="px-2  bg-gray-900 border-gray-700">
  <div class="container flex flex-wrap justify-between items-center mx-auto">

    <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
      <ul
        class="flex flex-col p-4 mt-4  rounded-lg border  md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white bg-gray-800 md:bg-gray-900 border-gray-700">
        <li>
          <a href="/topuphotelrev"
            class="block py-2 pr-4 pl-3 text-white  rounded   md:p-0 md:text-white bg-blue-600 md:bg-transparent"
            aria-current="page">Home</a>
        </li>

        <li>
          <a href="pending_reservations.php"
            class="block py-2 pr-4 pl-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0  md:p-0 ">Dashboard</a>
        </li>

        <!-- Reservation start-->
        <li>
          <button id="dropdownDividerButton" data-dropdown-toggle="dropdownDivider"
            class="peer text-white  font-medium rounded-lg text-sm text-center inline-flex items-center"
            type="button">Reservation
            <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>

          <!-- Dropdown menu -->
          <div id="dropdownDivider"
            class="hidden peer-hover:block hover:block absolute z-10 w-44 bg-white  divide-y divide-gray-100 shadow ">
            <ul class=" py-1 text-sm text-gray-700 text-gray-200" aria-labelledby="dropdownDividerButton">
              <li>
                <a href="reservation.php" class="block py-1 px-4 hover:bg-gray-100 text-black">Reservation</a>
              </li>
              <li>
                <a href="block_reservation.php" class="block py-1 px-4 hover:bg-gray-100 text-black">Block
                  Reservation</a>
              </li>

              <hr>
              <li>
                <a href="optional_services.php" class="block py-1 px-4 hover:bg-gray-100 text-black">Optional
                  Services</a>
              </li>
            </ul>

          </div>
        </li>
        <!-- Reservation end-->

        <!-- Rooms start-->
        <li>
          <button id="dropdownDividerButton" data-dropdown-toggle="dropdownDivider"
            class="peer text-white  font-medium rounded-lg text-sm text-center inline-flex items-center"
            type="button">Rooms
            <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>

          <!-- Dropdown menu -->
          <div id="dropdownDivider"
            class="hidden peer-hover:block hover:block absolute z-10 w-56 bg-white  divide-y divide-gray-100 shadow ">
            <ul class=" py-1 text-sm text-gray-700 text-gray-200" aria-labelledby="dropdownDividerButton">
              <li>
                <a href="room_allocation.php" class="block py-1 px-4 hover:bg-gray-100 text-black">Room Allocation</a>
              </li>
              <li>
                <a href="room_management.php" class="block py-1 px-4 hover:bg-gray-100 text-black">Room Management</a>
              </li>
              <li>
                <a href="room_category_registration.php" class="block py-1 px-4 hover:bg-gray-100 text-black">Room
                  Category Allocation</a>
              </li>
            </ul>

          </div>
        </li>
        <!-- Rooms end-->


        <!-- Customer start-->
        <li>
          <button id="dropdownDividerButton" data-dropdown-toggle="dropdownDivider"
            class="peer text-white  font-medium rounded-lg text-sm text-center inline-flex items-center"
            type="button">Customer
            <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>

          <!-- Dropdown menu -->
          <div id="dropdownDivider"
            class="hidden peer-hover:block hover:block absolute z-10 w-44 bg-white  divide-y divide-gray-100 shadow ">
            <ul class=" py-1 text-sm text-gray-700 text-gray-200" aria-labelledby="dropdownDividerButton">
              <li>
                <a href="cussignup.php" class="block py-1 px-4 hover:bg-gray-100 text-black">New Customer</a>
              </li>
              <li>
                <a href="travelagentsignup.php" class="block py-1 px-4 hover:bg-gray-100 text-black">New Travel
                  Agent</a>
              </li>

            </ul>

          </div>
        </li>
        <!-- Customer end-->
        <li>
          <a href="#"
            class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 text-gray-400 ">Other</a>
        </li>
      </ul>
    </div>

    <div>
      <div id="avatar" data-dropdown-toggle="avatardropdown" class="peer w-10 h-10 bg-white rounded-full">
      </div>
      <!-- Dropdown menu -->
      <div id="avatardropdown"
        class="hidden peer-hover:block hover:block absolute z-10 w-44 bg-white  divide-y divide-gray-100 shadow ">
        <ul class="relative py-1 text-sm text-gray-700 text-gray-200 right-0" aria-labelledby="avatardropdown">
          <li>
            <a href="#" class="block py-1 px-4 hover:bg-gray-100 text-black">Profile</a>
          </li>
          <li>
            <a href="#" class="block py-1 px-4 hover:bg-gray-100 text-black">Settings</a>
          </li>
          <li>
            <a href="php_action/logout.php" class="block py-1 px-4 hover:bg-gray-100 text-black">Logout</a>
          </li>
        </ul>

      </div>
    </div>
  </div>
</nav>