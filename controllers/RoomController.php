<?php

class RoomController
{

	public function getAllRooms()
	{
		$bedroom = Room::getAll();
		return $bedroom;
	}
	

	public function addRoom() {
		if (isset($_POST['submit'])) {
		  // Check if any of the form fields are empty
	    if (empty($_POST['number']) and empty($_POST['size']) and empty($_FILES['image']) and empty($_POST['bed_type']) or empty($_POST["suite_type"])) {
			// Display error message
			echo "All form fields are required. Please fill out the form and try again.";
	    } else {
			$data = array(
			'number' => $_POST["Number"],
			'bed_type' => $_POST["bed_type"],
			'suite_type'=> $_POST["suite_type"],
			'price' => $_POST["price"],
			'image' => file_get_contents($_FILES['imag']['tmp_name']),
			
			);
			$result = Room::add($data);
			if($result === 'ok'){
			  // Form was submitted successfully
			}else{
			  echo $result;
			}
		  }
		}
	  }
	 //   _____________________________________________++
	  public function getOneRoom(){
		if (isset($_POST['id'])) {
			$data = array(
				'id' => $_POST['id'],
			);
		$bedroom = Room::getRoom($data);
		return $bedroom;

		}
	}

	public function updateRoom()
	{
		if (isset($_POST['submit'])) {
			$data = array(
				'id' => $_POST['id'],
				'number' => $_POST['number'],
				'bed_type' => $_POST['bed_type'],
				'suite_type' => $_POST['suite_type'],
				'price' => $_POST['price']
			);
	
			// Check if an image was selected
			if (isset($_FILES['image']) && !empty($_FILES['image']['tmp_name'])) {
				// Add the image to the data array
				$data['image'] = file_get_contents($_FILES['image']['tmp_name']);
			} else {
				// Get the old image from the database
				$bedroom = Room::getRoom($data);
				// Add the old image to the data array
				$data['image'] = $bedroom->image;
			}
	
			$result = Room::update($data);
			if ($result === 'ok') {
				Redirect::to('Rooms');
			} else {
				echo $result;
			}
		}
	}
	public function deleteRoom(){
		if(isset($_POST['id'])){
			$data['id'] = $_POST['id'];
			$result = Room::delete($data);
			if($result === 'ok'){
				Redirect::to('Rooms');
				
			}else{
				echo $result;
			}
		}
	}
}
?>
