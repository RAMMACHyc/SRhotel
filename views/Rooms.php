<?php
$data = new RoomController();
$rooms = $data->getAllRooms();

?>

<?php if (!isset($_SESSION['logged']) || $_SESSION['logged'] !== true) {

    Redirect::to('index');
}
?>


<?php require './views/includes/header.php'; ?>

<h1 class="text-4xl font-bold text-center mt-8 mb-4 dark:text-white"> OUR ROOMS</h1>


<div class=" mb-8 py-8 px-8 max-w-xl mx-auto bg-gradient-to-r dark:bg-gray-700 rounded-xl shadow-lg  space-y-2 sm:py-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-6">
    <div class="text-center space-y-2 sm:text-left">
        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Check Booking Availability</label>
        <div date-rangepicker class="flex items-center">
            <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input name="start" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Check-in">
            </div>
            <span class="mx-4 text-gray-500">to</span>
            <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input name="end" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="date end">
            </div>
        </div>
        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Room</label>
        <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-600 focus:border-purple-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-600 dark:focus:border-purple-500">
            <option selected>_____</option>
            <option value="One">Lit single</option>
            <option value="Two">double</option>
            <option value="Three" id="suite">suites</option>

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



        <button class="px-4 py-1 text-sm text-purple-600 font-semibold rounded-3xl border border-purple-200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2 ">submit</button>
    </div>

</div>
<?php if (isset($_SESSION['logged']) && $_SESSION['logged'] === true) { ?>
    <div class="flex justify-center">
        <a href="add">
            <button class=" inline-flex items-center justify-center w-10 h-10 mr-2 text-gray-50 transition-colors duration-150 bg-gray-800 rounded-lg focus:shadow-outline hover:bg-indigo-800">
                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                    <path d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" fill-rule="evenodd"></path>
                </svg>
            </button>
        </a>
    <?php } ?>

    </div>



    <!-- Card -->
    <div class="flex  justify-center">
        <?php foreach ($rooms as $room) : ?>
            <div>
                <form action="">
                    <div class="w-72 flex flex-col bg-slate-800  shadow-slate-800/50 dark:bg-gray-700 rounded-lg shadow-lg m-4 p-4">
                        <div name="Number" class="text-2xl font-bold dark:text-white mb-4"><span class="number"><?php echo $room['number']; ?></span>
                            <?php if (isset($_SESSION['logged']) && $_SESSION['logged'] === true) { ?>
                                <a href="update"><button class="inline-flex items-center justify-center w-10 h-10 ml-10 text-gray-50 transition-colors duration-150 dark:bg-gray-700 rounded-full focus:shadow-outline hover:bg-gray-800">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                        </svg>
                                    </button></a>
                                <form method="POST" class="ms-1" action="delete">
                                    <input type="hidden" name="id" value="<?php echo $room['id']; ?>">

                                    <button class="text-gray-50 hover:text-gray-100 text-sm dark:bg-red-700 hover:bg-red-800 border border-red-500 rounded-r-lg font-medium px-4 py-2 inline-flex space-x-1 items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </button>
                                </form>


                            <?php } ?>
                        </div>
                        <?php echo '<img  class="rounded-lg w-full h-32 object-cover"  src="data:image/jpeg;base64,' . base64_encode($room["image"]) . '" />'; ?>

                        <div class="flex flex-col mt-4">
                            <div class="flex items-center mb-2">
                                <svg class="w-6 h-6 mr-2 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd">
                                </svg>
                                <span class="dark:text-slate-400">2 Guests</span>
                            </div>
                            <div class="flex items-center mb-2">
                                <svg class="w-6 h-6 mr-2 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd">
                                </svg>
                                <span name="size" class="dark:text-slate-400"><?php echo $room['size']; ?></span>
                            </div>
                            <div class="flex items-center mb-2">
                                <svg class="w-6 h-6 mr-2 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd">
                                </svg>
                                <span class="dark:text-slate-400">1 Bathroom</span>
                            </div>
                            <div class="">
                                <ul class="flex justify-start">
                                    <li>
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                                        </svg>
                                    </li>
                                    <li>
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                                        </svg>
                                    </li>
                                    <li>
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                                        </svg>
                                    </li>
                                    <li>
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                                        </svg>
                                    </li>
                                    <li>
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                                        </svg>
                                    </li>
                                </ul>

                            </div>

                        </div>
                        <div class="text-3xl font-bold text-purple-500 mt-auto mb-4"><span class="text-purple-300">$</span><span name="price"><?php echo $room['price']; ?></span><span class="text-gray-400 text-sm">/night</span></div>
                        <button name="submit" name="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Book Now</button>
                    </div>


            </div>
        <?php endforeach; ?>


    </div>


    </div>
    </div>

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
    <div class="dark:bg-gray-600 flex space-x-12 p-12 justify-center items-center">
        <div class="flex items-center justify-center space-x-2 animate-pulse">
            <div class="w-8 h-8 bg-gray-900 rounded-full"></div>
            <div class="w-8 h-8 bg-gray-900 rounded-full"></div>
            <div class="w-8 h-8 bg-gray-900 rounded-full"></div>
        </div>
    </div>