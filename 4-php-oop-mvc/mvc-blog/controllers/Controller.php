<?php

class Controller
{
    protected $folder;
    public function view($file, $data = []){
        $view_file = 'views/' . $this->folder . '/' . $file .'.php';
        if(is_file($view_file)){
            require_once 'views/layout/main.php';
            require_once $view_file;
        }  
        else{
            header('Location: index.php?controller=site&action=error');
        }
    }
}