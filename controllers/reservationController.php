<?php

class ReservationController {
   
	public function getAllReservation()
	{
		$reservation = reservation::getAllreser();
		return $reservation;   
	}

	public function getVide()
	{
		$reservation = reservation::getVideRoom();
		return $reservation ;  
	}
	public function addReservation() {
		if (isset($_POST['submit'])) {
		  // Check if any of the form fields are empty
		  if (empty($_POST['start_date']) and empty($_POST['end_date'])) {
			// Display error message
			Session::set('error','<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
			<strong class="font-bold">Im sorry!</strong>
			<span class="block sm:inline">Enter the Start_date and End_date for the reservation.</span>
			<span class="absolute top-0 bottom-0 right-0 px-4 py-3">
			<svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
			</span>
			</div>');
			
		  } else { 
			$data = array(
				'user_id'=>$_SESSION['id'],
				'bedroom_id' => $_POST['id'],
                'start_date' => $_POST['start_date'],
                'end_date' => $_POST['end_date']
            );
			$result = reservation::addreservation($data);
			if($result === 'ok'){
			  // Form was submitted successfully
			}else{
			  echo $result;
			}
		  }
		}
	  }
      public function getOneRerservation(){
		if (isset($_POST['id'])) {
			$data = array(
				'id' => $_POST['id'],
			);
		$reservation =  reservation::getReservation($data);
		return $reservation;

		}
	}
	public function deleteReservation(){
		if(isset($_POST['id'])){
			$data['id'] = $_POST['id'];
			$result = Reservation::deletereservation($data);
			if($result === 'ok'){
				Redirect::to('dashboard');
				
			}else{
				echo $result;
			}
		}
	}
}





