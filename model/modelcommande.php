<?php require_once __DIR__.'/model.php';
class Modelcommande{
    private $id;
    private $etat;
    private $montant;
    private $quantite;



        // un constructeur 
        public function __construct($Tab=array()){
            if(isset($Tab['id']))
            $this->id =$Tab['id'];
            
            if(isset($Tab['etat']))
            $this->etat =$Tab['etat'];
           
            if(isset($Tab['montant']))
            $this->montant =$Tab['montant'];

           
        }


        // un getter   
           public function get($Attr){
               return $this->$Attr;
            }
            
        // un setter 
        public function set($Attr,$Value){
            $this->$Attr=$Value;
        }

        public static function getAllcommandes(){
            $Rq='SELECT id, etat, montant FROM commandes';
            $rep=Model::$pdo->query($Rq);
            $rep->setFetchMode(PDO::FETCH_CLASS,'Modelcommande');
            $tabobj=$rep->fetchAll();
            return$tabobj;
        }

        public function getcommande(){
            $stm=Model::$pdo->prepare('select id,etat, montant  from commandes where id=:id');
            $rep=$stm->execute(array('id'=>$this->id));
            $stm->setFetchMode(PDO::FETCH_CLASS,'Modelcommande');
            $tab=$stm->fetch();
            return$tab;
        }


        public function save(){
            try{
            $Rq='INSERT INTO commandes (etat, montant) values (:etat, :montant)';
            $stm=Model::$pdo->prepare($Rq);
            $Tab=array('etat'=>$this->etat,'montant'=>$this->montant);
            $retour=$stm->execute($Tab);
           
            return $retour;
        }catch (Exception  $e){
            var_dump($e->getMessage());
            return 0;
            }
        }
        
        public function delete(){
            try{
            $Rq='DELETE FROM commandes WHERE id=:id';
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
                $Rq='UPDATE commandes SET etat=:etat, montant=:montant WHERE id=:id';
                $stm=Model::$pdo->prepare($Rq);
                $Tab=array('etat'=>$this->etat,
                 'montant'=>$this->montant,
                  
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