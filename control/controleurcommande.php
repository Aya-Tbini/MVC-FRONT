<?php
require_once __DIR__.'/../model/modelcommande.php';// chargement du modèle


class Controleurcommande{
    public static function liste(){ 
        $commandes=Modelcommande::getAllcommandes();//appel au modèle pour gerer la BD
        require_once __DIR__.'/../view/commande/liste.php';//"redirige" vers la vue
    }

    public static function add(){
        require_once __DIR__.'/../view/commande/form.php';//"redirige" vers la vue
}
public static function edit(){
$tab=array('id'=>$_GET['id']);
$commande=new Modelcommande($tab);
$commande=$commande->getcommande(); 
require_once __DIR__.'/../view/commande/formupdate.php';
}


public static function delete(){
    $tab=array('id'=>$_GET['id']);
    $commande=new Modelcommande($tab);
    $R=$commande->delete();
    self::liste();
}

public static function save(){
    
    $commande=new Modelcommande($_POST);
    $retour=$commande->save();
    self::liste();
}

public static function update(){
    //var_dump($_POST);
    $tab=array('id'=>$_POST['id'],'etat'=>$_POST['etat'], 'montant'=>$_POST['montant']);
    $commande= new Modelcommande($tab);
    $R=$commande->update();
    self::liste();

}





}  ?>