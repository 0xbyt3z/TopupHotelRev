<script>
    let state = false;
    const toggleAvatarDropDown = ()=>{
    if(state){
        document.getElementById("nav-avatar-dropdown").classList.add("invisible")
    }else{
        document.getElementById("nav-avatar-dropdown").classList.remove("invisible")
    }
    state = !state
}
</script>

<div class="h-16 w-screen bg-gray-700 flex items-center justify-end">
    <a href="" class="text-white mx-3">Home</a>
    <a href="" class="text-white mx-3">Signup</a>
    <div>
        <div class="rounded-full w-10 h-10 bg-white mr-10 ml-10" onclick="toggleAvatarDropDown();">
            <svg xmlns="http://www.w3.org/2000/svg" className="h-9 w-9" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                <path strokeLinecap="round" strokeLinejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <div id="nav-avatar-dropdown" class="invisible absolute right-5 w-24 h-auto pb-2 mt-2 shadow-lg bg-white  hover:block">
                <div class="flex flex-col py-2 pl-2">
                    <a href="">Link</a>
                    <a href="">Link</a>
                    <a href="">Link</a>
                </div>
            </div>
        </div>
        
    </div>
</div>