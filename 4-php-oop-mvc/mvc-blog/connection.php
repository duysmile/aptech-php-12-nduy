<?php 

class DB
{
    private static $instance = null;
    private $db_user = "root";
    private $db_password = "123456";
    public static function getInstance(){
        if(!isset(self::$instance)){
            try{
                self::$instance = new PDO('mysql:host=localhost;dbname=simple_blog', 'root', '123456');
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch( PDOException $e){
                die($e->getMessage());
            }
        }
        return self::$instance;
    }
}