<?php /** General Settings **/

    namespace MVC_Project\lib;

    class Config{

        public function __construct(){
            require 'environment.php';
        }

        public function setSettings($config = array()){
            if(ENVIRONMENT == "development"){
                $config['dbname'] = 'pdo';
                $config['host']   = 'localhost';
                $config['dbuser'] = 'root';
                $config['passwd'] = '';

                error_reporting(E_ALL);
                ini_set("display_errors", 1);
            }
        }
    }