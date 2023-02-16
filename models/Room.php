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
 


    


    // ReservationModel____________________________________________________
	
	static public function add($data)
    {
        $stmt = DB::connect()->prepare("INSERT INTO bedroom(number,bed_type,suite_type,price,image) VALUES (:number,:bed_type,:suite_type,:price,:image)");
        $stmt->bindParam(':number', $data['number'], PDO::PARAM_STR);
        $stmt->bindParam(':bed_type', $data['bed_type'], PDO::PARAM_STR);
        $stmt->bindParam(':suite_type',$data['suite_type'], PDO::PARAM_STR);
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
        $stmt = DB::connect()->prepare("UPDATE bedroom SET number = :number,bed_type = :bed_type,suite_type=:suite_type,price =:price,image =:image WHERE id = :id");

        $stmt->bindParam(':id',$data['id']);
        $stmt->bindParam(':number',$data['number']);
        $stmt->bindParam(':bed_type',$data['bed_type']);
        $stmt->bindParam(':suite_type',$data['suite_type']);
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
