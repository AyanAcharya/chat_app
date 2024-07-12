<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>

  
        <div class="min-h-screen grid">
        
            <div class="h-2/3 place-self-center ">
                <img class="h-60 w-60" src="../assets/logo.png" alt="logo">

            </div>
            <div class="h-2/3 mx-5">
                <h2 class="text-2xl ">Sign up</h2>
                <p class="text-sm text-gray-400">Enter your login details</p>

                <form action="signup_process.php" method="POST" class="grid">
                    <input name="name" type="text" class="p-3 rounded-xl border mt-3" placeholder="full name">
                    <input name="email" type="text" class="p-3 rounded-xl border my-3" placeholder="Email address">
                    <input  name="password" type="password" class="p-3 rounded-xl border" placeholder=" Set password">
                    <button type="submit" class="text-white bg-red-500 p-3 rounded-md my-3">SIGN UP</button>

                    <div class="flex justify-center mt-4">
                        <p>Already have an account?&nbsp;</p>
                        <button class="text-red-500">Sign in</button>
                    </div>



                </form>

            </div>


        
        
        
        
        
        
        
        
        
        
        </div>

</body>
</html>