<?php require_once __DIR__.'/model.php';
class ModelProduit{
    private $id;
    private $titre;
    private $prix;
    private $quantite;



        // un constructeur 
        public function __construct($Tab=array()){
            if(isset($Tab['id']))
            $this->id =$Tab['id'];
            
            if(isset($Tab['titre']))
            $this->titre =$Tab['titre'];
           
            if(isset($Tab['prix']))
            $this->prix =$Tab['prix'];

            if(isset($Tab['quantite']))
            $this->quantite =$Tab['quantite'];
        }


        // un getter   
           public function get($Attr){
               return $this->$Attr;
            }
            
        // un setter 
        public function set($Attr,$Value){
            $this->$Attr=$Value;
        }

        public static function getAllProduits(){
            $Rq='SELECT id, titre, prix, quantite FROM produits';
            $rep=Model::$pdo->query($Rq);
            $rep->setFetchMode(PDO::FETCH_CLASS,'ModelProduit');
            $tabobj=$rep->fetchAll();
            return$tabobj;
        }

        public function getProduit(){
            $stm=Model::$pdo->prepare('select id,titre, prix, quantite  from produits where id=:id');
            $rep=$stm->execute(array('id'=>$this->id));
            $stm->setFetchMode(PDO::FETCH_CLASS,'ModelProduit');
            $tab=$stm->fetch();
            return$tab;
        }


        public function save(){
            try{
            $Rq='INSERT INTO produits (titre, prix, quantite) values (:titre, :prix, :quantite)';
            $stm=Model::$pdo->prepare($Rq);
            $Tab=array('titre'=>$this->titre,'prix'=>$this->prix,'quantite'=>$this->quantite);
            $retour=$stm->execute($Tab);
           
            return $retour;
        }catch (Exception  $e){
            var_dump($e->getMessage());
            return 0;
            }
        }
        
        public function delete(){
            try{
            $Rq='DELETE FROM produits WHERE id=:id';
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
                $Rq='UPDATE produits SET titre=:titre, prix=:prix, quantite=:quantite WHERE id=:id';
                $stm=Model::$pdo->prepare($Rq);
                $Tab=array('titre'=>$this->titre,
                 'prix'=>$this->prix,
                  'quantite'=>$this->quantite,
                  'id'=>$this->id);
                //var_dump($Tab);
                $retour=$stm->execute($Tab);
                return $retour;
                }catch(Exception  $e){
                    var_dump($e->getMessage());
                    return 0;
                }
            }

            
}