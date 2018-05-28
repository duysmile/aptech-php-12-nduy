<?php

require_once './controllers/Controller.php';
require_once './models/post.php';

class PostController extends Controller
{
    public function __construct(){
        $this->folder = 'post';
    }

    public function index(){
        $posts = Post::all();
        $data = ['posts' => $posts];
        $this->view('index', $data);
    }
}