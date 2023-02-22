
     <?php require './views/includes/header.php'; ?>

     <script>
            // Burger menus
            document.addEventListener('DOMContentLoaded', function() {
                // open
                const burger = document.querySelectorAll('.navbar-burger');
                const menu = document.querySelectorAll('.navbar-menu');

                if (burger.length && menu.length) {
                    for (var i = 0; i < burger.length; i++) {
                        burger[i].addEventListener('click', function() {
                            for (var j = 0; j < menu.length; j++) {
                                menu[j].classList.toggle('hidden');
                            }
                        });
                    }
                }

                // close
                const close = document.querySelectorAll('.navbar-close');
                const backdrop = document.querySelectorAll('.navbar-backdrop');

                if (close.length) {
                    for (var i = 0; i < close.length; i++) {
                        close[i].addEventListener('click', function() {
                            for (var j = 0; j < menu.length; j++) {
                                menu[j].classList.toggle('hidden');
                            }
                        });
                    }
                }

                if (backdrop.length) {
                    for (var i = 0; i < backdrop.length; i++) {
                        backdrop[i].addEventListener('click', function() {
                            for (var j = 0; j < menu.length; j++) {
                                menu[j].classList.toggle('hidden');
                            }
                        });
                    }
                }
            });
        </script>

        <!-- Background image -->
        <div class=" relative overflow-hidden bg-no-repeat bg-cover " style="
         background-position: 50%;
         background-image: url('https://cf.bstatic.com/xdata/images/hotel/max1024x768/371915092.jpg?k=b95a45b655be7967b27399987a9ee4d1c4f7e292e74f2b5200cabb3b2f39655a&o=&hp=1');
         height: 650px;">
            <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed" style="background-color: rgba(56, 57, 57, 0.495)">
                <div class="flex justify-center items-center h-full">
                    <div class="text-center text-gray-200 px-6 md:px-12">
                        <h1 class="text-3xl font-bold mt-0 mb-6">Escape the ordinary and experience luxury at our stunning hotel</h1>
                        <h3 class="text-xl font-light mb-8 text-gray-200"> Relax and unwind in style at our breathtaking hotel </h3>
                        <button type="button" class="inline-block px-6 py-2.5 border-2 border-white text-white font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" data-mdb-ripple="true"
                            data-mdb-ripple-color="light">
                         Get started
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Background image -->
        </header>
    </div>

    </div>
    <div class=" w-auto mt-5 py-8 px-8 max-w-xl mx-auto dark:bg-gray-700 rounded-xl shadow-lg space-y-2 sm:py-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-6">
        <div class="text-center space-y-2 sm:text-left">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Check Booking Availability</label>
            <div date-rangepicker class=" w-auto flex items-center">
                <div class="relative">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                    </div>
                    <input name="start" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Check-in">
                </div>
                <span class="mx-4 text-gray-500">to</span>
                <div class="relative">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                    </div>
                    <input name="end" type="text" class="  bg-gray-50 border border-gray-300 text-gray-900 text-sm  rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="date end">
                </div>
                <span class="mx-4 text-gray-500">room</span>
                <select id="countries" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm  rounded-lg focus:ring-purple-600 focus:border-purple-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-600 dark:focus:border-purple-500">
                    <option selected>___</option>
                    <option value="One">Lit single</option>
                    <option value="Two">double</option>
                    <option value="Three">suite</option>
                    >
                </select>
                <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-600 focus:border-purple-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-600 dark:focus:border-purple-500 "> 
                      <option selected>_____</option>
                      <option value="One">Standard suite rooms</option>
                      <option value="Two">Junior</option>
                      <option value="three">Presidential suite</option>
                      <option value="four">Penthouse suites</option>
                      <option value="five">Honeymoon suites</option>
                      <option value="nine">Bridal suites</option>
                     
                    </select>
               


            </div>
            <button class="ml-4 px-4 py-1 text-sm text-purple-600 font-semibold rounded-3xl border border-purple-200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2 ">submit</button>

        </div>
    </div>

    <h4 class="font-bold leading-tight text-3xl text-center  my-10 mb-2   dark:text-white">OUR ROMMS</h4>
    <!-- Card -->
    <div class="container  mx-auto ">
    <div class="grid grid-cols-1 gap-x-8 md:grid-cols-2 lg:grid-cols-3 ">
        <div class=" bg-slate-800 shadow-lg shadow-slate-800/50 dark:bg-gray-700 rounded-lg  p-6 max-w-sm mx-auto my-4 ">
            <img src="images/Dark bedroom instagram post (6).png" alt="Hotel Room " class="w-full rounded-lg shadow-md ">
            <div class="pt-4 ">
                <h2 class="text-2xl font-bold dark:text-white ">Standard Room</h2>
                <p class="text-gray-700 text-sm ">Includes breakfast and free wifi</p>
            </div>
            <div class="pt-2 pb-4 text-4xl font-bold text-green-600 ">
                <span class="text-gray-500 pr-4 ">$</span>
                <span>99</span>
                <span class="text-gray-400 text-sm ">/night</span>
                <button type="button" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"><a href='Rooms'>More Here</a></button>

            </div>
        </div>
        <div class="bg-slate-800 shadow-lg shadow-slate-800/50 dark:bg-gray-700 rounded-lg p-6 max-w-sm mx-auto my-4 ">
            <img src="images/Dark bedroom instagram post (5).png" alt="Hotel Room " class="w-full rounded-lg shadow-md ">
            <div class="pt-4 ">
                <h2 class="text-2xl font-bold dark:text-white ">Standard Room</h2>
                <p class="text-gray-700 text-sm ">Includes breakfast and free wifi</p>
            </div>
            <div class="pt-2 pb-4 text-4xl font-bold text-green-600 ">
                <span class="text-gray-500 pr-4 ">$</span>
                <span>99</span>
                <span class="text-gray-400 text-sm ">/night</span>
                <button type="button" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"><a href='Rooms'>More Here</a></button>
            </div>
        </div>
        <div class="bg-slate-800 shadow-lg shadow-slate-800/50 dark:bg-gray-700 rounded-lg p-6 max-w-sm mx-auto my-4 ">
            <img src="images/Dark bedroom instagram post (4).png" alt="Hotel Room " class="w-full rounded-lg shadow-md ">
            <div class="pt-4 ">
                <h2 class="text-2xl font-bold dark:text-white ">Standard Room</h2>
                <p class="text-gray-700 text-sm ">Includes breakfast and free wifi</p>
            </div>
            <div class="pt-2 pb-4 text-4xl font-bold text-green-600 ">
                <span class="text-gray-500 pr-4 ">$</span>
                <span>99</span>
                <span class="text-gray-400 text-sm ">/night</span>
                <button type="button" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"><a href='Rooms'>More Here</a></button>
            </div>
            
        </div>
    </div>
        </div>

    <div class="container px-5 py-24 mx-auto ">
        <h4 class="font-bold leading-tight text-3xl text-center   mb-11 dark:text-white">OUR SERVICES</h4>
        <div class="flex flex-wrap -m-4 ">
            <div class="p-4 md:w-1/3 ">
                <div class="h-full rounded-xl shadow-cla-blue bg-gradient-to-r dark:bg-gray-700 overflow-hidden ">
                    <img class="lg:h-48 md:h-36 w-full object-cover object-center scale-110 transition-all duration-400 hover:scale-100 " src="images/White Black Modern Hotel Promo Instagram Post (1).png" alt="blog ">
                    <div class="p-6 ">
                        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1 ">SRHOTEL</h2>
                        <h1 class="title-font text-lg font-medium dark:text-white mb-3 ">The Comfort</h1>
                        <p class="leading-relaxed mb-3  dark:text-slate-400">Relax and rejuvenate in the lap of luxury at our breathtaking hotel, temporary accommodation for travelers </p>
                        <div class="flex items-center flex-wrap ">
                            <button class="bg-gradient-to-r from-gray-400 to-gray-400 hover:scale-105 drop-shadow-md shadow-cla-blue px-4 py-1 rounded-lg ">Learn more</button>

                        </div>
                    </div>
                </div>
            </div>
            <div class="p-4 md:w-1/3 ">
                <div class="h-full rounded-xl shadow-cla-violate dark:bg-gray-700 overflow-hidden ">
                    <img class="lg:h-48 md:h-36 w-full object-cover object-center scale-110 transition-all duration-400 hover:scale-100 " src="images/Dark bedroom instagram post (1).png" alt="blog ">
                    <div class="p-6 ">
                        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1 ">SRHOTEL</h2>
                        <h1 class="title-font text-lg font-medium dark:text-white mb-3 ">The Quality</h1>
                        <p class="leading-relaxed mb-3  dark:text-slate-400 "> temporary accommodation for travelers, typically including a bed, bathroom, and other amenities, more here.</p>
                        <div class="flex items-center flex-wrap ">
                            <button class="bg-gradient-to-r from-gray-300 to-gray-400 hover:scale-105 drop-shadow-md shadow-cla-violate px-4 py-1 rounded-lg ">Learn more</button>

                        </div>
                    </div>
                </div>
            </div>
            <div class="p-4 md:w-1/3 ">
                <div class="h-full rounded-xl shadow-cla-pink dark:bg-gray-700 overflow-hidden ">
                    <img class="lg:h-48 md:h-36 w-full object-cover object-center scale-110 transition-all duration-400 hover:scale-100 " src="images/Dark bedroom instagram post (3).png" alt="blog ">
                    <div class="p-6 ">
                        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1 ">SRHOTEL</h2>
                        <h1 class="title-font text-lg font-medium dark:text-white mb-3 ">Tranquility</h1>
                        <p class="leading-relaxed mb-3  dark:text-slate-400 ">Treat yourself to the ultimate getaway at our stunning hotel Discover the beauty of luxury at our elegant hotel.</p>
                        <div class="flex items-center flex-wrap ">
                            <button class="bg-gradient-to-r from-gray-300 to-gray-400 hover:scale-105 shadow-cla-blue px-4 py-1 rounded-lg ">Learn more</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </section>

    <div class="container mx-auto px-20 ">

        <div class="bg-slate-800 shadow-lg shadow-slate-800/50 w-auto h-auto rounded-lg flex justify-center">

            <video class=" w-96 border-double border-4 border-gray-800" autoplay loop muted>
             <source src="images/lv_0_20221222112730.mp4" type="video/mp4" />
            </video>


        </div>
       
                
        

    </div>



</body>

