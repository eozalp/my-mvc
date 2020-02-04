<?php

// this file sole purpose is extending by controllers. by this way they can call model and view files

class controller{
    public function getModel($modelName){
        // check if model file exists
        if(file_exists(MODEL.$modelName.".php")){
            // include model
            include_once(MODEL.$modelName.".php");
            //instansiate model and return it
            return new $modelName;
            
            
        }else{
            echo "Model Not Found.";
        }
    }
    
    // find view file pass data array. example: view("menu/links",$linkarray)
    public function view($viewName,$arr = []){
        if(file_exists(VIEW.$viewName.".php")){
            include_once(VIEW.$viewName.".php");
        }else{
            echo "No View Found.";
        }
    }
}