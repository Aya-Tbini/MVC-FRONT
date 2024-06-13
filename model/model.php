<?php
class Model{
    public static $pdo ; 
    public static function Init(){
        try{
            self::$pdo=new PDO("mysql:host=localhost:3306;dbname=shopp",'root','');
        }catch(PDOException $e){
            echo $e->getMessage();// affiche un message d'erreur
            die();//arrêt de taitement
        }
    }
}
Model::Init();
        ?>