<?php

include_once MCONTROLLER;

class index extends controller{
    public function home(){
        $model = $this->getmodel("indexModel");
        $name = $model->getName();
        return $this->view("main\index",$name);
    }
}