public function readSingle(){
            $myQuery = 'SELECT * 
                        FROM animaux 
                        WHERE nom = :nom';
            $stmt = $this->connect->prepare($myQuery);
            $stmt->bindParam(':nom',$this->nom);
            $stmt->execute();
            return $stmt;
        }