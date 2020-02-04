<?php

include_once ROOT.DS."configs".DS."def.php";

class APP{
    
    
    
    public $controller;
    public $method;
    public $parameters;
    
    public function __construct(){
        
        // getting url parameter and convert it to array
        
        $url = $_GET["url"];
        $url_array = $this->urlParse($url);
        
        // setting controller and model as string and array
        $this->setClassAttr($url_array);
        
        // including controller class and instantiate and calling method. passing parameters.
        
        $this->load();
        
        
        
        echo $this->controller.$this->method;
        print_r($this->parameters);
        
        
    }
    
    public function urlParse($url){
        
        // trimming "/" and returning url as array
        
        return explode("/",trim($url,"/"));
    }
    
    public function setClassAttr($url_array){
        
        // array's first element is controller. unset it. then second is method
        // unset it. the others are parameters
        
        $this->controller = $url_array[0];
        unset($url_array[0]);
        $this->method = $url_array[1];
        unset($url_array[1]);
        $this->parameters = $url_array;
    }
    
    public function load(){
       
        include_once CONTROLLER.$this->controller;
        
        if(class_exists($this->controller)){
            
            // now this controller will be an object
            
            $this->controller = new $this->controller;
            
            if(method_exists($this->controller, $this->method)){
                
                // now we are calling method and passing paameters
                
                call_user_func_array($this->controller->this->method, $this->parameters);
            } else {
                echo "There is no method as $this->method";
            }
            
        } else {
            echo "There is no controller as $this->controller";
        }
        
        
    }
    
    
    
}

