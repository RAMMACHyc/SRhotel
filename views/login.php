<?php 
    if(isset($_POST['submit'])){
        $loginUser = new AdminController();
        $loginUser->admin();
    }
?>
<?php require './views/includes/header.php'; ?>




<body class="bg-white font-family-karla h-screen">

    <div class="w-full flex flex-wrap">

        <!-- Login Section -->
        <div class="w-full md:w-1/2 flex flex-col">

            <div class="flex justify-center md:justify-start pt-12 md:pl-12 md:-mb-24">
                <a href="index"><img class="w-32" src="images/Black Gold Elegant Illustration Fashion Brand Logo.png" alt=""></a>
            </div>

            <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
             <?php include('./views/includes/alerts.php');?>
                <p class="text-center dark:text-white font-bold text-3xl">Welcome.</p>
                <form method="POST" class="flex flex-col pt-3 md:pt-8" >
                    <div class="flex flex-col pt-4">
                        <label for="email" class="text-lg dark:text-slate-400">Email</label>
                        <input type="email" name=" email" placeholder="your@email.com" class="shadow bg-gray-700 appearance-none border-purple-900 border rounded w-full py-2 px-3 text-gray-100 mt-1 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>

                    <div class="flex flex-col pt-4">
                        <label for="password" class="text-lg dark:text-slate-400">Password</label>
                        <input type="password" name="password" placeholder="***********" class="shadow bg-gray-700 appearance-none border-purple-900 border rounded w-full py-2 px-3 text-gray-100 mt-1 leading-tight focus:outline-none focus:shadow-outline  " required>
                    </div>
                    <div class="text-center pt-12 pb-12">
                     <button name="submit" type="submit" class="bg-black text-white font-bold text-lg rounded  hover:bg-gray-700 px-10 py-2 mt-8">Login</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Image Section -->
        <div class="w-1/2 shadow-2xl">
            <img class="object-cover w-full h-screen hidden md:block" src="https://source.unsplash.com/IXUM4cJynP0">
        </div>
    </div>

</body>

</html>