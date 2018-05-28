<?php

class Post 
{
    public $id;
    public $title;
    public $content;

    public function __construct($id, $title, $content){
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
    }

    public static function all(){
        $list = [];
        $db = DB::getInstance();
        $request = $db->query('SELECT * FROM simple_blog.posts');

        foreach($request->fetchAll() as $item){
            $list[] = new Post($item['id'], $item['title'], $item['content']);
        }

        return $list;
    }
}