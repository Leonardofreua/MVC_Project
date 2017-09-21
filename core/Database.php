<?php

    class Database extends PDO{

        private static $dbName 			= 'pdo' ;
        private static $dbHost 			= 'localhost' ;
        private static $dbUsername 		= 'root';
        private static $dbUserPassword  = '';

        public function __construct(){
          $this->connect();
        }

        final protected function connect(){
            try{
                parent::__construct( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);
                self::setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            }catch(\PDOException $e){

                echo $e->getMessage();
            }
        }
    }