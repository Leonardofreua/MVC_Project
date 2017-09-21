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

        private $urlPath;

        private $urlParams = array();

        public function __construct(){
            $this->run();
        }

        private function getUrl(){
            $url = explode('index.php', $_SERVER['PHP_SELF']);
            $this->urlPath = end($url);
        }

        public function run(){

            $this->getUrl();

            if(!empty($this->urlPath)){
                $this->urlPath = explode('/', $this->urlPath);
                array_shift($this->urlPath);

                $currentController = $this->urlPath[0].'Controller';
                array_shift($this->urlPath);

                if(isset($this->urlPath[0])){
                    $currentAction = $this->urlPath[0];
                    array_shift($this->urlPath);
                }else{
                    $currentAction = 'index';
                }

                if(count($this->urlPath) > 0){
                    $this->urlParams = $this->urlPath;
                }
            }else{
                $currentController = 'homeController';
                $currentAction     = 'index';
            }

            require_once 'core/Controller.php';

            $control = new $currentController();
            call_user_func_array(array($control, $currentAction), $this->urlParams);
        }
    }