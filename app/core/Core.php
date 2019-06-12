<?php

namespace app\core;
use config\Config;

class Core
{
    private $controller;
    private $method;
    private $params = array();

    public function __construct()
    {
        $this->verifyUri();
        $this->verifyMethod();
        $this->verifyClass();

    }

    public function run()
    {
        // Instance the current controller
        $currentController = $this->getController();
        $c = new $currentController;

        // Call dynamic method with obj,method and params
        call_user_func_array(array($c, $this->method), array($this->getParams()));
    }

    public function verifyUri()
    {
         $url = $_SERVER['PHP_SELF'];
         $url = explode('index.php', $url);
         $url = end($url);

         if ($url != '') {
             $url = explode('/', $url);
             array_shift($url);

             //Get controller
             $this->controller = ucfirst($url[0]) . 'Controller';
             array_shift($url);

             //Get methods
             if(isset($url[0]))
             {
                 $this->method = $url[0];
                 array_shift($url);
             }

             //Get params
             if(isset($url[0])){
                 $this->params = array_filter($url);
             }

         }else{
             $this->controller = 'IndexController';
         }

    }

    public function verifyClass(){
        if(class_exists($this->getController())){
            return $this->controller;
        }

        return $this->controller = 'indexController';
    }

    public function verifyMethod()
    {
        if(method_exists($this->getController(),$this->getMethod())){
            return $this->method;
        }

        return $this->method = 'index';
    }

    public function getController()
    {
        return "app\\controllers\\" . $this->controller;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function getParams()
    {
        return $this->params;
    }

}