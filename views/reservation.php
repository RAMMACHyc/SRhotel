<?php
if (isset($_POST['submit'])) {
  $newRervation = new ReservationController();
  $newRervation->addreservation();
}
if (isset($_POST['id'])) {
  $existRerservation = new ReservationController();
  $reservation = $existRerservation->getOneRerservation();
}


if (!isset($_SESSION['logged']) || $_SESSION['logged'] !== true) {
  redirect::to('login');
}
if (isset($_POST['id'])) {
  $existRoom = new RoomController();
  $room = $existRoom->getOneRoom();
}
?>

<?php require './views/includes/header.php'; ?>


<!-- component -->
<div class="flex justify-center items-center mt-32  bg-gray-600">

  <!-- COMPONENT CODE -->
  <div class="container mx-auto my-4 px-4 lg:px-20">
   <?php include('./views/includes/alerts.php');?>
    <div class="w-full p-8 my-4 md:px-12 lg:w-9/12 lg:pl-20 lg:pr-40 mr-auto rounded-2xl shadow-2xl">
      <div class="flex">
        <h1 class="font-bold text-gray-500 uppercase text-3xl"> reservation</h1>
      </div>
      <form method="POST" enctype="multipart/form-data">
  
        <div class="form-group">
          <input type="hidden" name="id" value="<?php echo $room->id; ?>">
        </div>

        <div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-5">
          <input name="start_date" min="<?php echo date("Y-m-d"); ?>"  class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="date" />
          <input name="end_date" min="<?php echo date("Y-m-d"); ?>" class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="date"/>

          <p class="w-full bg-gray-700 text-gray-500 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"><?php echo  $room->number; ?></p>
          <?php if ( $room->bed_type !== 'suite' ) { ?>

          <p class="w-full bg-gray-700 text-gray-500 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"><?php echo $room->bed_type; ?></p>
          <?php } ?>
          <?php if ( $room->bed_type == 'suite' ) { ?>
            <p class="w-full bg-gray-700 text-gray-500 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"><?php echo $room->suite_type; ?></p>
          <?php } ?>


        </div>
        
        <div class="my-4">
          <p class="w-full bg-gray-700 text-gray-500 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"><?php echo $room->price . "$";  ?></p>
        </div>
        <div class="my-2 w-1/2 lg:w-1/4">
          <input type="submit" name="submit" class="uppercase text-sm font-bold tracking-wide bg-indigo-900 text-gray-100 p-3 rounded-lg w-full 
                      focus:outline-none focus:shadow-outline">
          
        </div>
      </form>
    </div>
    

    <div class="w-full lg:-mt-96 lg:w-2/6 px-8 py-12 ml-auto bg-indigo-900 rounded-2xl">
      <div class="flex flex-col text-white">
        <h1 class="font-bold uppercase text-4xl my-4"><?php echo $room->number; ?></h1>
        

        <div class="flex my-4 w-2/3 lg:w-1/2">
          <div class="flex flex-col">
            <i class="fas fa-map-marker-alt pt-2 pr-2" />
          </div>
          <div class="flex flex-col">
            <h2 class="text-2xl">Type Room</h2>
            <?php if ( $room->bed_type !== 'suite' ) { ?>
            <p class="text-gray-400"><?php echo $room->bed_type; ?></p>
            <?php } ?>
            <?php if ( $room->bed_type == 'suite' ) { ?>
            <p class="text-gray-400"><?php echo $room->suite_type; ?></p>
            <?php } ?>
          </div>
        </div>

        <div class="flex my-4 w-2/3 lg:w-1/2">
          <div class="flex flex-col">
            <i class="fas fa-phone-alt pt-2 pr-2" />
          </div>
          <div class="flex flex-col">
            <h2 class="text-2xl">Price</h2>
            <p class="text-gray-400"><?php echo $room->price . "$"; ?></p>
            
          </div>
        </div>

        <div class="flex my-4 w-2/3 lg:w-1/2">
          <a href="https://www.facebook.com/ENLIGHTENEERING/" target="_blank" rel="noreferrer" class="rounded-full bg-white h-8 w-8 inline-block mx-1 text-center pt-1">
            <i class="fab fa-facebook-f text-blue-900" />
          </a>
          <a href="https://www.linkedin.com/company/enlighteneering-inc-" target="_blank" rel="noreferrer" class="rounded-full bg-white h-8 w-8 inline-block mx-1 text-center pt-1">
            <i class="fab fa-linkedin-in text-blue-900" />
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- COMPONENT CODE -->
</div>

<!-- BUY ME A PIZZA AND HELP SUPPORT OPEN-SOURCE RESOURCES -->
<!-- <div class="flex items-end justify-end fixed bottom-0 right-0 mb-4 mr-4 z-10">
  <div>
    <a title="Buy me a pizza" href="" target="_blank" class="block w-16 h-16 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:rotate-12">
      <img class="object-cover object-center w-full h-full rounded-full" src="" />
      
    </a>
  </div>
</div> -->

<!-- https://img.icons8.com/emoji/48/000000/pizza-emoji.png -->







