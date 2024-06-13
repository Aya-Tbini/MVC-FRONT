<?php
require_once __DIR__.'/../model/modelclient.php';
class ControleurClient{  
  
public static function liste(){
  $clients=ModelClient::getAllClients();//appel au modèle pour gerer la BD
  require_once __DIR__.'/../view/client/liste.php';//"redirige" vers la vue
}
public static function add(){
  require_once __DIR__.'/../view/client/form.php';//"redirige" vers la vue
}


public static function edit(){
  $tab=array('id'=>$_GET['id']);
  $client=new ModelClient($tab);
  $client=$client->getClient(); 
  require_once __DIR__.'/../view/client/formupdate.php';
  }
  
  
  public static function delete(){
      $tab=array('id'=>$_GET['id']);
      $client=new ModelClient($tab);
      $R=$client->delete();
      self::liste();
  }
  
  public static function save(){
      
      $client=new ModelClient($_POST);
      $client=$client->save();
      self::liste();
       //var_dump($_POST);
      
  }
  
  public static function update(){
     
      $tab=array('id'=>$_POST['id'],'nom'=>$_POST['nom'], 'email'=>$_POST['email'], 'contact'=>$_POST['contact'], 'sexe'=>$_POST['sexe']);
      $client= new ModelClient($tab);
      $R=$client->update();
      self::liste();
  
  }
  
  //var_dump($_POST);
  
  

  } ?>