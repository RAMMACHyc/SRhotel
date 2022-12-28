

        <?php require './views/includes/header.php'; ?>
   
           <div class="dark:bg-gray-600 p-6">
                <div class="container mx-auto">

                </div>
                <div class="text-4xl dark:text-white font-bold mb-4">Welcome to Our Hotel</div>
                <div class="text-xl dark:text-slate-400 mb-8">
                    Relax and rejuvenate in the lap of luxury at our breathtaking hotel.
                </div>
                <div class="flex flex-wrap -mx-4">
                    <div class="w-full md:w-1/2 px-4 mb-8">
                        <img class="w-auto rounded-lg" src="images/Brown and White Minimalist Room Hotel Promotion Instagram Post.png" alt="Hotel room">
                    </div>
                    <div class="w-full md:w-1/2 px-4 mb-8">
                        <div class="text-xl dark:text-white font-bold mb-4">Our History</div>
                        <p class="text-lg dark:text-slate-400">
                            Choose From a Wide Range of Properties Which Booking.com Offers. Search Now! Choose from a wide range of properties which Booking.com offers. Great Choice. Great Availability. Airport Taxi available. Hostels. Best Price Guarantee. Read...

                        </p>
                        <p class="text-lg dark:text-slate-400">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum mollis, placerat leo vel, laoreet justo. Nullam sed sem vel velit euismod dignissim. Aliquam erat volutpat.
                        </p>
                    </div>
                </div>
            </div>
    </div>
    <div class="dark:bg-gray-600 p-4">
        <h1 class="text-4xl font-bold dark:text-white mb-4">About Us</h1>
        <div class="flex flex-wrap ">
            <div class="w-full md:w-1/2">
                <img src="https://www.bu.edu/bhr/files/2017/05/image-8-636x418.png" class="rounded-lg mb-4">
            </div>
            <div class="w-full md:w-1/2 px-4">
                <p class="mb-4 text-lg leading-relaxed dark:text-slate-400">Welcome to our luxurious hotel located in the heart of the city. Our hotel has been serving guests for over 20 years, and we pride ourselves on providing the highest level of customer service and comfort. Our rooms are spacious and beautifully
                    decorated, and we offer a wide range of amenities including a fitness center, spa, and on-site restaurant. We hope you have a wonderful stay with us!</p>
                <div class="text-center">
                    <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">Learn More</button>
                </div>
            </div>
        </div>
    </div>
    </body>

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

