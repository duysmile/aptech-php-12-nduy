<?php
require_once 'controllers/Controller.php';

class SiteController extends Controller
{
    
    public function __construct(){
        $this->folder = 'site';
    }
    public function index(){
        $data = [];
        $this->view('index', $data);
    }

    public function error(){
        $this->view('error');
    }
}

