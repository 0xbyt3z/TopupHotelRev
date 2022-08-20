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

<div class="top-0 sticky bg-white shadow-lg h-16 w-screen flex items-center justify-end z-50">
    <a href="/" class="text-gray-500 mx-3">Home</a>
    <a href="reservation.php" class="text-gray-500 mx-3">Reservation</a>
    <div>
        <div class="rounded-full w-8 h-8 bg-white mr-10 ml-3" onclick="toggleAvatarDropDown();">
            <svg xmlns="http://www.w3.org/2000/svg" className="h-8 w-8" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" strokeWidth={2}>
                <path strokeLinecap="round" strokeLinejoin="round"
                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <div id="nav-avatar-dropdown" onmouseleave="toggleAvatarDropDown()"
                class="invisible absolute right-5 w-auto h-auto pr-5 pb-2 mt-2 shadow-lg bg-white  hover:block">
                <div class="flex flex-col py-2 pl-2 h-auto">
                    <a href="" class="flex items-center h-5 mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400 font-extralight" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                        </svg>
                        <span class="ml-4 text-sm text-gray-500">Dashboard</span>
                    </a>
                    <a href="" class="flex items-center h-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400 font-extralight" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <span class="ml-4 text-sm text-gray-500">Account</span>
                    </a>

                    
                    <hr class="bg-gray-200 my-3">
                    <a href="" class="flex items-center h-5 ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400 font-extralight" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        <span class="ml-4 text-sm text-gray-500">Logout</span>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>