<?php

class RoomController
{

	public function getAllRooms()
	{
		$rooms = Room::getAll();
		return $rooms;
	}

	public function addRoom() {
		if (isset($_POST['submit'])) {
		  // Check if any of the form fields are empty
		  if (empty($_POST['name']) || empty($_POST['prix']) || empty($_FILES['image']) || empty($_POST['date'])) {
			// Display error message
			echo "All form fields are required. Please fill out the form and try again.";
		  } else {
			$data = array(
			  'name' => $_POST['name'],
			  'prix' => $_POST['prix'],
			  'date' => $_POST['date'],
			  'image' => file_get_contents($_FILES['image']['tmp_name']),
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
		$travell = Room::getRoom($data);
		return $travell;

		}
	}

	public function updateRoom()
	{
		if (isset($_POST['submit'])) {
			$data = array(
				'id' => $_POST['id'],
				'name' => $_POST['name'],
				'prix' => $_POST['prix'],
				'date' => $_POST['date'],
			);
	
			// Check if an image was selected
			if (isset($_FILES['image']) && !empty($_FILES['image']['tmp_name'])) {
				// Add the image to the data array
				$data['image'] = file_get_contents($_FILES['image']['tmp_name']);
			} else {
				// Get the old image from the database
				$travell = Room::getRoom($data);
				// Add the old image to the data array
				$data['image'] = $travell->image;
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
				Redirect::to('tours');
			}else{
				echo $result;
			}
		}
	}
}
?>
