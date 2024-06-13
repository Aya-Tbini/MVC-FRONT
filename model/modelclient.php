<?php
require_once __DIR__.'/model.php';
class ModelClient{
private $id;
private $nom;
private $email;
private $contact;
private $sexe;
// un constructeur
public function __construct($Tab=array()){
    if(isset($Tab['id']))
    $this->id =$Tab['id'];
    if(isset($Tab['nom']))
    $this->nom =$Tab['nom'];
    if(isset($Tab['email']))
    $this->email =$Tab['email'];
    if(isset($Tab['contact']))
    $this->contact =$Tab['contact'];
    if(isset($Tab['sexe']))
    $this->sexe =$Tab['sexe'];
    }
    // un getter
public function get($Attr){
    return$this->$Attr;
    }
    // un setter
    public function set($Attr,$Value){
    $this->$Attr=$Value;
    }
    public static function getAllClients(){
        $Rq='SELECT id, nom, email, contact, sexe from clients';
        $rep=Model::$pdo->query($Rq);
        $rep->setFetchMode(PDO::FETCH_CLASS,'ModelClient');
        $tabobj=$rep->fetchAll();
        return$tabobj;
    }

    public function getClient(){
        $stm=Model::$pdo->prepare('SELECT id, nom, email, contact, sexe from clients where id=:id');
        $rep=$stm->execute(array('id'=>$this->id));
        $stm->setFetchMode(PDO::FETCH_CLASS,'ModelClient');
        $tab=$stm->fetch();
        return$tab;
    }


    public function save(){
        try{
        $Rq='INSERT into clients (nom, email, contact, sexe)
        values(:nom, :email, :contact, :sexe)';
        $stm=Model::$pdo->prepare($Rq);
        $Tab=array('nom'=>$this->nom,
                'email'=>$this->email,
                'contact'=>$this->contact,
                'sexe'=>$this->sexe);
        $retour=$stm->execute($Tab);
                  
       
        return $retour;
    }catch (Exception  $e){
        var_dump($e->getMessage());
        return 0;
       // var_dump($Tab);
        }
    }
    
    public function delete(){
        try{
        $Rq='DELETE FROM clients WHERE id=:id';
        $stm=Model::$pdo->prepare($Rq);
        $Tab=array('id'=>$this->id);
        $retour=$stm->execute($Tab);
        return$retour;
        
        }catch (Exception  $e){
        var_dump($e->getMessage());
        return 0;
        }
    }


    public function update(){
        try{
            $Rq='UPDATE clients SET nom=:nom, email=:email, contact=:contact, sexe=:sexe where id=:id' ;
            $stm=Model::$pdo->prepare($Rq);
            $Tab=array('nom'=>$this->nom,
            'email'=>$this->email,
            'contact'=>$this->contact,'sexe'=>$this->sexe,'id'=>$this->id);
            $retour=$stm->execute($Tab);
            //var_dump($Tab);
            $retour=$stm->execute($Tab);
            return $retour;
            }catch(Exception  $e){
                var_dump($e->getMessage());
                return 0;
            }
        }
                    }

?>