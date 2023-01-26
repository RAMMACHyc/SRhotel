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
        $stmt = DB::connect()->prepare("UPDATE bedroom SET number = :number,size = :size,bed_type = :bed_type,image =:image WHERE id = :id");

        $stmt->bindParam(':id',$data['id']);
        $stmt->bindParam(':number',$data['number']);
        $stmt->bindParam(':size',$data['size']);
        $stmt->bindParam(':bed_type',$data['bed_type']);
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
                 
?>