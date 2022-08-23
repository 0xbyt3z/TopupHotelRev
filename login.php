<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Page</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="./app.js"></script>

</head>
<body>


<div class="w-screen h-screen flex mt-36 justify-center">
    <div class="h-auto w-[20rem] flex flex-col">
        <form>
        <span class="text-4xl font-bold mb-10">Login</span>

        <div class="flex flex-col mt-4">
            <label for="" class="font-semibold">Username</label>
            <input type="text" class="h-8 w-72 border border-gray-500" required>
        </div>

        <div class="flex flex-col mt-4">
            <label for="" class="font-semibold">Password</label>
            <input type="password" class="h-8 w-72 border border-gray-500 " required>
        </div>

        <button class="w-24 bg-cyan-500 py-2 px-3 my-3 text-white font-bold">Login</button>

        <div class="my-5 flex justify-between">
            <span class="text-sm">Don't have an account?<a href="cussignup.php" class="text-blue-500 mx-2">Signup</a></span>
            <img src="images/forgotpass.png" alt="asdasd" class="h-5" onclick=(forgotpass())>
        </div>
        </form>
    </div>
</div>
    
</body>
</html>
