<?php

// this file sole purpose is extending by controllers. by this way they can call model and view files

class controller{
    public function getModel($modelName){
        // check if model file exists
        if(file_exists(MODEL.$modelName.".php")){
            // include model
            include_once(MODEL.$modelName.".php");
            //instansiate model and return it

            if(class_exists($modelName)){
                return new $modelName;
            }else{
                echo "No Model found";
            }
            
            
            
        }else{
            echo "Model Not Found.";
        }
    }
    
    // find view file pass data array. example: view("menu/links",$linkarray)
    public function view($viewName,$data){
        if(file_exists(VIEW.$viewName.".php")){
            //echo VIEW.$viewName.".php"; die();
            include_once(VIEW.$viewName.".php");
            
        }else{
            echo "No View Found.";
        }
    }
}