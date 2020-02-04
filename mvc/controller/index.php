<?php

include_once MCONTROLLER;

class index extends controller{
    public function home(){
        $model = $this->getmodel("indexModel");
        $data = $model->name;

      

        $this->view("main/index",$data);
    }
}