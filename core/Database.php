<?php

    class Database extends PDO{

        public function __construct(){
            try{
                parent::__construct(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME.';charset='.DB_CHARSET, DB_USER, DB_PASS);
                self::setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            }catch(\PDOException $e){

                echo 'Refused connection to the database! Error code: '.$e->getMessage();
            }
        }
    }