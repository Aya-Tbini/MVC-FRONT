<?php
require_once __DIR__.'/../model/modelproduit.php';// chargement du modèle


class ControleurProduit{
    public static function liste(){ 
        $produits=ModelProduit::getAllproduits();//appel au modèle pour gerer la BD
        require_once __DIR__.'/../view/home.php';//"redirige" vers la vue
    }

    public static function add(){
        require_once __DIR__.'/../view/produit/form.php';//"redirige" vers la vue
}
public static function edit(){
$tab=array('id'=>$_GET['id']);
$produit=new ModelProduit($tab);
$produit=$produit->getproduit(); 
require_once __DIR__.'/../view/produit/formupdate.php';
}


public static function delete(){
    $tab=array('id'=>$_GET['id']);
    $produit=new ModelProduit($tab);
    $R=$produit->delete();
    self::liste();
}

public static function save(){
    
    $produit=new ModelProduit($_POST);
    $retour=$produit->save();
    self::liste();
}

public static function update(){
    //var_dump($_POST);
    $tab=array('id'=>$_POST['id'],'titre'=>$_POST['titre'], 'prix'=>$_POST['prix'], 'quantite'=>$_POST['quantite']);
    $produit= new ModelProduit($tab);
    $R=$produit->update();
    self::liste();

}





}  ?>