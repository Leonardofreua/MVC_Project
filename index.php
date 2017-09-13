<?php
    spl_autoload_register(function($class){
        if(strpos($class, 'Controller') !== false){
            if(file_exists('controllers/'.$class.'.php')){
                require_once 'controllers/'.$class.'.php';
            }
        }else if(file_exists('models/'.$class.'.php')){
            require_once 'models/'.$class.'.php';
        }else{
            require_once 'core/'.$class.'.php';
        }
    });

    $application = new Application();
    $application->run();