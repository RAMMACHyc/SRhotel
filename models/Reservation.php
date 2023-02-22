<?php 


class reservation {
    static public function getAllReser(){
		$stmt = DB::connect()->prepare('
        SELECT b.number,
        b.bed_type,
        b.price, users.username,
        r.start_date,
        r.end_date
        FROM bedroom b
        JOIN reservation r
        ON b.id = r.bedroom_id 
        JOIN users
        ON r.user_id = users.id;
        ');
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
		$stmt = null;
	}
    static public function getVideRoom() {
        $stmt = DB::connect()->prepare("
        SELECT *
        FROM bedroom
        WHERE bed_type = 'lit single' AND suite_type = ''
        AND id NOT IN (
        SELECT bedroom_id
        FROM reservation
        WHERE (
        (:date_debut BETWEEN start_date AND end_date)
        OR (:date_end BETWEEN start_date AND end_date)
        OR (start_date BETWEEN :date_debut AND :date_end)
        )
        )
        
        ");

        $stmt->execute();
        $result = $stmt->fetchAll();
        $stmt->closeCursor();
        return $result;
    }
    
    
  
	
	static public function getReservation($data)
    {
        $id = $data['id'];
        try {
            $query = "SELECT * FROM reservation WHERE id=:id";
            $statement = DB::connect()->prepare($query);
            $statement->execute(array(":id" => $id));
            $reservation = $statement->fetch(PDO::FETCH_OBJ);
            return $reservation;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }
    static public function addReservation($data) {
        $stmt = DB::connect()->prepare("
            INSERT INTO reservation(user_id, bedroom_id, start_date, end_date)
            VALUES (:user_id, :bedroom_id, :start_date, :end_date)
        ");
        $stmt->bindParam(':user_id', $data['user_id'], PDO::PARAM_INT);
        $stmt->bindParam(':bedroom_id', $data['bedroom_id'], PDO::PARAM_INT);
        $stmt->bindParam(':start_date', $data['start_date'], PDO::PARAM_STR);
        $stmt->bindParam(':end_date', $data['end_date'], PDO::PARAM_STR);
    
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    
        $stmt->close();
        $stmt = null;
    }
    
   

	static public function updatereservation($data)
    {
        $stmt = DB::connect()->prepare("UPDATE reservation SET start_date = :start_date,end_date = :end_date WHERE id = :id");
        $stmt->bindParam(':id',$data['id']);
        $stmt->bindParam(':start_date',$data['start_date']);
        $stmt->bindParam(':end_date',$data['end_date']);
        if ($stmt->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
        $stmt->close();
        $stmt = null;
    }

    static public function deletereservation($data)
    {
        $id = $data['id'];
        try {
            $query = "DELETE FROM reservation WHERE id=:id";
            $statement = DB::connect()->prepare($query);
            $statement->execute(array(":id" => $id));
            if ($statement->execute()) {

                return 'ok';
            } else {
                return 'error';
            }
            $statement->close();
            $statement = null;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }
    }