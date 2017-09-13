<?php

    class Application{

        /**
         * Will receive the controller value via URL
         *
         * @var string
         * @access private
         */
        //private $currentController;

        /**
         * Receives the name of the method contained
         * in the controller and that should be executed
         *
         * @var string
         * @access private
         */
        //private $currentAction;

        /**
         * It receives the path of the page that will inform
         * that the request is not valid
         *
         * @var string
         * @access private
         */
        private $pageNotFound;

        public function run(){
            $url = substr($_SERVER['PHP_SELF'], 10);

            if(!empty($url)){
                $url = explode('/', $url);
                array_shift($url);

                $currentController = $url[0].'Controller';

                if(isset($url[1])){
                    $currentAction = $url[1];
                }else{
                    $currentAction = 'index';
                }

            }else{
                $currentController = 'homeController';
                $currentAction     = 'index';
            }

            require_once 'core/controller.php';

            $control = new $currentController();
            $control->$currentAction();
        }
    }