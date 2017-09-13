<?php

    /**
     * Class HomeController
     */
    class HomeController extends Controller{

        public function index(){
            $this->loadView('home');
        }
    }