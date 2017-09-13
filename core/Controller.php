<?php

class Controller{

    public function loadView($viewName, $viewData = array()){

        extract($viewData);
        include 'views/'.$viewName.'.php';
    }
}