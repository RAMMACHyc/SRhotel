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
        ON b.id = r.id 
        JOIN users
        ON r.user_id = users.id;
        ');
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
		$stmt = null;
	}

	// static public function getAllReser(){
	// 	$stmt = DB::connect()->prepare('SELECT * FROM servation');
	// 	$stmt->execute();
	// 	return $stmt->fetchAll();
	// 	$stmt->close();
	// 	$stmt = null;
	// }
	static public function getReservation($data)
    {
        $id = $data['id'];
        try {
            $query = "SELECT * FROM servation WHERE id=:id";
            $statement = DB::connect()->prepare($query);
            $statement->execute(array(":id" => $id));
            $reservation = $statement->fetch(PDO::FETCH_OBJ);
            return $reservation;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }
    static public function addreservation($data)
    {
        $stmt = DB::connect()->prepare("INSERT INTO reservation(bedroom_id,user_id,size,rtype,start_date,start_end) VALUES (:bedroom_id,:user_id,:size,:rtype,:start_date,:start_end)");
        $stmt->bindParam(':bedroom_id', $data['bedroom_id'], PDO::PARAM_STR);
        $stmt->bindParam(':user_id', $data['user_id'], PDO::PARAM_STR);
        $stmt->bindParam(':rtype', $data['rtype'], PDO::PARAM_STR);
        $stmt->bindParam(':start_date', $data['start_date'], PDO::PARAM_STR);
        $stmt->bindParam(':start_end', $data['start_end'], PDO::PARAM_STR);


        if ($stmt->execute()) {
            header('Location: ./Rooms');
            return 'ok';


        } else {
            return 'error';
        }
        $stmt->close();
        $stmt = null;
    }


	static public function updatereservation($data)
    {
        $stmt = DB::connect()->prepare("UPDATE reservation SET number = :number,size = :size,bed_type = :bed_type,price =:price,image =:image WHERE id = :id");

        $stmt->bindParam(':id',$data['id']);
        $stmt->bindParam(':number',$data['number']);
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

    static public function deletereservation($data)
    {
        $id = $data['id'];
        try {
            $query = "DELETE FROM servation WHERE id=:id";
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