
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
        <!-- Container for demo purpose -->
        <div class="container my-24 px-6 mx-auto">

            <!-- Section: Design Block -->
            <section class="mb-32 text-gray-800 text-center">
                <style>
                    .map-container {
                        height: 700px;
                        z-index: -1;
                    }
                </style>
                <div class="px-6 py-12 md:px-12">
                    <div class="container mx-auto xl:px-32">
                        <div class="grid lg:grid-cols-2 flex items-center">
                            <div class="md:mt-12 lg:mt-0 mb-12 lg:mb-0">
                                <div class="block rounded-lg shadow-lg px-6 py-12 md:px-12 lg:-mr-14" style="background: hsla(0, 0%, 100%, 0.55); backdrop-filter: blur(30px)">
                                    <h2 class="text-3xl font-bold mb-12">Contact us</h2>
                                    <form>
                                        <div class="form-group mb-6">
                                            <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                id="exampleInput7" placeholder="Name" />
                                        </div>
                                        <div class="form-group mb-6">
                                            <input type="email" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                id="exampleInput8" placeholder="Email address" />
                                        </div>
                                        <div class="form-group mb-6">
                                            <textarea class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                id="exampleFormControlTextarea13" rows="3" placeholder="Message"></textarea>
                                        </div>
                                        <div class="form-group form-check text-center mb-6">
                                            <input type="checkbox" class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer"
                                                id="exampleCheck87" checked />
                                            <label class="form-check-label inline-block text-gray-800" for="exampleCheck87">Send me a copy of this message</label
                >
              </div>
              <button
                type="submit"
                class="w-full px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
              >
                Send
              </button>
            </form>
            </div>
          </div>
          <div class="md:mb-12 lg:mb-0">
            <div class="map-container relative shadow-lg rounded-lg">
              <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d13054.160816337138!2d-9.247353647015059!3d32.30042384783511!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0xdac211719897669%3A0x6f59fa5bb517f58a!2sYoucode%20Safi%2C%2014%20Av.%20Zerktouni%2C%20Safi!3m2!1d32.2930412!2d-9.2350864!5e0!3m2!1sen!2sma!4v1671546383157!5m2!1sen!2sma" class="left-0 top-0 h-full w-full absolute rounded-lg" frameborder="0" allowfullscreen></iframe>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->

</div>
<!-- Container for demo purpose -->