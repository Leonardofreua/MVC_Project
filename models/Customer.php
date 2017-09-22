<?php

    class Customer extends Model{

        public function getAll(){
            //$array = array();

            $sql = "SELECT * FROM cliente";
            $stmt = $this->dbConn->query($sql);

            if($stmt->rowCount() > 0){
                return $stmt->fetchAll();
            }else{
                return false;
            }
        }
    }