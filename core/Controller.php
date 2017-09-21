<?php

    namespace MVC_Project\core;

    class Controller{

        public function loadView($viewName, $viewData = array()){
            extract($viewData);
            include 'views/'.$viewName.'.php';
        }

        public function loadTemplate($viewName, $viewData = array()){
            include 'views/templates/template.php';
        }

        public function loadViewInTemplate($viewName, $viewData = array()){
            extract($viewData);
            include 'views/'.$viewName.'.php';
        }

        public function loadHeader(){
            include 'views/templates/header.php';
        }

        public function loadFooter(){
            include 'views/templates/footer.php';
        }
    }