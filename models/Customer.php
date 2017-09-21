<?php

    class Customer extends Model{
        public function getAll(){
            $array = array();

            $sql = "SELECT * FROM cliente";
            $stmt = $this->dbConn->query($sql);

            if($stmt->rowCount() > 0){
                $array = $stmt->fetchAll();
            }

            return $array;
        }
    }