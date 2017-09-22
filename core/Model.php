<?php

    class Model extends Database{

        protected $dbConn;

        public function __construct(){
            $this->dbConn = new Database();
        }
    }
