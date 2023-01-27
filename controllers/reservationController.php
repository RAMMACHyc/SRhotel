<?php
class ReservationController {
    public function getReservationDetails() {
        $reservation = new Room();
        $reservationData = $reservation->getreservation();
        return $reservationData; 
    }
}