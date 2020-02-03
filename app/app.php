<?php

class APP{
    
    
    
    public $controller;
    public $method;
    public $parameters;
    
    public function __construct(){
        
        // getting url parameter and convert it to array
        
        $url = $_GET["url"];
        $url_array = $this->urlParse($url);
        
        // setting controller and model
        $this->setClassAttr($url_array);
        
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
    
    
    
}

