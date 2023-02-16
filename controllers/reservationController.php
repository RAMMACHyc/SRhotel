<?php
class ReservationController {
    public function getReservationDetails() {
        if (isset($_POST['submit'])) {
            $data = array(
                'rtype' => $_POST['rtype'],
                'check_in' => $_POST['check_in'],
                'check_out' => $_POST['check_out']
            );

            $reservationData = Reservation::reservation($data);
            return $reservationData;
        }
    }

}





