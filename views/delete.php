<?php 
	if (isset($_POST['id'])) {
		$exitTravell = new RoomController();
		$exitTravell->deleteRoom();
 	}
	 if(!isset($_SESSION['logged']) || $_SESSION['logged'] !== true) {
		redirect::to('index');
	  
		}
?>