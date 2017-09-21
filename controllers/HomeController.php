<?php
    use MVC_Project\core\Controller;

    class HomeController extends Controller{

        public function index(){

            $customers = new Customer();

            $datas['customers'] = $customers->getAll();

            $this->loadTemplate('home', $datas);
        }

        public function teste($nome,$sobre){
            echo 'Nome: '. $nome . ' sobrenome: '.$sobre;
        }
    }