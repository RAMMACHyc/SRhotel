<?php
if (isset($_POST['submit'])) {
  $newRoom = new RoomController();
  $newRoom->addRoom();
}
if (!isset($_SESSION['logged']) || $_SESSION['logged'] !== true) {
  redirect::to('index');
}

?>
<?php require './views/includes/header.php'; ?>


<div class="mt-8">
  <div class="flex justify-center">

    <div class="mt-5 md:col-span-2 md:mt-0">
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="shadow sm:overflow-hidden sm:rounded-md">
          <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
            <div class="grid grid-cols-3 gap-6">
              <div class="col-span-3 sm:col-span-2">
                <label for="company-website" class="block font-bold text-md  text-gray-700">Ajouter une chambre</label>

              </div>
            </div>


            <div class="mt-5 md:col-span-2 md:mt-0">
              <form method="POST">
                <div class="overflow-hidden shadow sm:rounded-md">
                  <div class="bg-white px-4 py-5 sm:p-6">
                    <div class="grid grid-cols-6 gap-6">
                      <div class="col-span-6 sm:col-span-3">
                        <label for="first-name" class="block text-sm font-medium text-gray-700">Numbre</label>
                        <input type="text" name="Number" id="first-name" autocomplete="given-name" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-purple-500 focus:outline-none focus:ring-purple-500 sm:text-sm" required>
                      </div>

                      <div class="col-span-6 sm:col-span-3">
                        <label for="last-name" class="block text-sm font-medium text-gray-700">Size</label>
                        <input type="number" name="size" id="last-name" autocomplete="family-name" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-purple-500 focus:outline-none focus:ring-purple-500 sm:text-sm" required>
                      </div>


                      <div class="col-span-6 sm:col-span-3">
                        <label for="country" class="block text-sm font-medium text-gray-700">bedroom_type</label>
                        <select id="country" name="bed_type" autocomplete="country-name" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-purple-500 focus:outline-none focus:ring-purple-500 sm:text-sm" onchange="showSelect(this)" required>
                          <option >Lit single</option>
                          <option >double</option>
                          <option value="3" id="suite">suite</option>
                        </select>
                        <select id="inpu" name="bed_type" autocomplete="country-name" class="mt-1  w-full rounded-md border border-gray-300 bg-purple-200 py-2 px-3 shadow-sm focus:border-purple-500 focus:outline-none focus:ring-purple-500 sm:text-sm hidden" required>
                          <option >Standard suite rooms</option>
                          <option >Junior</option>
                          <option >Presidential suite</option>
                          <option >Penthouse suites</option>
                          <option >Honeymoon suites</option>
                          <option >Bridal suites</option>
                        </select>

                        <script>
                          function showSelect(select) {
                            if (select.value == 3) {
                              document.getElementById('inpu').style.display = "block";
                            } else {
                              document.getElementById('inpu').style.display = "none";
                            }
                          }
                        </script>

                      </div>
                      <div class="col-span-6 sm:col-span-3">
                        <label for="last-name" class="block text-sm font-medium text-gray-700">Price</label>
                        <input type="text" name="price" id="last-name" autocomplete="family-name" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-purple-500 focus:outline-none focus:ring-purple-500 sm:text-sm" required>
                      </div>

                    </div>
                  </div>
                </div>
                <div>
                  <label class="block text-sm font-medium text-gray-700">bedroom photo</label>
                  <div class="mt-1 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
                    <div class="space-y-1 text-center">
                      <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                      <div class="flex text-sm text-gray-600">
                        <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-medium text-purple-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-purple-500 focus-within:ring-offset-2 hover:text-purple-500">
                          <span>Upload a file</span>
                          <input id="file-upload" name="imag" type="file" class="sr-only">
                        </label>
                        <!-- <p class="pl-1">or drag and drop</p> -->
                        <p class="pl-1">in care to you</p>
                      </div>
                      <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                    </div>
                  </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
              <button name="submit" type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-purple-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2">Save</button>
            </div>
          </div>
      </form>
    </div>
  </div>
</div>

<!-- <div class="hidden sm:block" aria-hidden="true">
  <div class="py-5">
    <div class="border-t border-gray-200"></div>
  </div>
</div> -->