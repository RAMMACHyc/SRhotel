<?php 

class Room {

	static public function getAll(){
		$stmt = DB::connect()->prepare('SELECT * FROM bedroom');
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
		$stmt = null;
	}
	static public function getRoom($data)
    {
        $id = $data['id'];
        try {
            $query = "SELECT * FROM bedroom WHERE id=:id";
            $statement = DB::connect()->prepare($query);
            $statement->execute(array(":id" => $id));
            $bedroom = $statement->fetch(PDO::FETCH_OBJ);
            return $bedroom;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }
    // ReservationModel____________________________________________________
    static public function reservation($data)
    {
        $stmt = DB::connect()->prepare('SELECT bedroom.* FROM bedroom LEFT JOIN reservation ON bedroom.id = reservation.room_id 
        WHERE (reservation.id IS NULL OR(reservation.check_in not BETWEEN :checkin and :checkout)
        and reservation.check_out not BETWEEN :checkin and :checkout ) 
        AND bedroom.bed_type = :rtype group by berdoom.id;');
         $stmt->bindParam(':rtype',$data['rtype']);
         $stmt->bindParam(':checkin',$data['check_in']);
         $stmt->bindParam(':checkout',$data['check_out']);
        $stmt->execute();
        $reservationData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $reservationData;
    }


    


    // ReservationModel____________________________________________________
	
	static public function add($data)
    {
        $stmt = DB::connect()->prepare("INSERT INTO bedroom(number,size,bed_type,price,image) VALUES (:number,:size,:bed_type,:price,:image)");
        $stmt->bindParam(':number', $data['number'], PDO::PARAM_STR);
        $stmt->bindParam(':size', $data['size'], PDO::PARAM_STR);
        $stmt->bindParam(':bed_type', $data['bed_type'], PDO::PARAM_STR);
        $stmt->bindParam(':price', $data['price'], PDO::PARAM_STR);
        $stmt->bindParam(':image', $data['image'], PDO::PARAM_STR);

        if ($stmt->execute()) {
            header('Location: ./Rooms');
            return 'ok';


        } else {
            return 'error';
        }
        $stmt->close();
        $stmt = null;
    }


	static public function update($data)
    {
        $stmt = DB::connect()->prepare("UPDATE bedroom SET number = :number,size = :size,bed_type = :bed_type,price =:price,image =:image WHERE id = :id");

        $stmt->bindParam(':id',$data['id']);
        $stmt->bindParam(':number',$data['number']);
        $stmt->bindParam(':size',$data['size']);
        $stmt->bindParam(':bed_type',$data['bed_type']);
        $stmt->bindParam(':price',$data['price']);
        $stmt->bindParam(':image',$data['image']);
        if ($stmt->execute()) {

            return 'ok';
        } else {
            return 'error';
        }
        $stmt->close();
        $stmt = null;
    }

    static public function delete($data)
    {
        $id = $data['id'];
        try {
            $query = "DELETE FROM bedroom WHERE id=:id";
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
