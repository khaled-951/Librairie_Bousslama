<?php
include_once "../config.php";

class LivreurC

{
    public function afficheE()
    {
        //cx database
        $db=config::getconnexion();
        // query
        $sql="select * from livreur";
        //fetch data 
        $list=$db->query($sql);
        return($list);
    }
    public function ajout1E($livreur)
    {
        $db=config::getconnexion();
        //query insert into
        $sql="insert into livreur (nom, prenom, age, num_tel, email, zone_habitation, situation, vehicule, zone_de_livraison) values(:nom,:prenom,:age,:num_tel,:email,:zone_habitation,:situation,:vehicule,:zone_de_livraison)";
        //query prep
        $q=$db->prepare($sql);
        //bind value
        $q->bindvalue(':nom',$livreur->getNom());
        $q->bindvalue(':prenom',$livreur->getprenom());
        $q->bindvalue(':age',$livreur->getage());
        $q->bindvalue(':num_tel',$livreur->getNumTel());
        $q->bindvalue(':email',$livreur->getemail());
        $q->bindvalue(':zone_habitation',$livreur->getZoneHabitation());
        $q->bindvalue(':situation',$livreur->getSituation());
        $q->bindvalue(':vehicule',$livreur->getvehicule());
        $q->bindvalue(':zone_de_livraison',$livreur->getZoneDeLivraison());
        $q->execute();   
    }
    public function supprimerLivreur($id)
    {
        $sql= "DELETE FROM livreur where id_livreur=:id" ; 
        $db=config::getconnexion(); 
        $req=$db->prepare($sql) ; 
        $req->bindValue(':id' , $id) ; 
        try 
        {
            $req->execute(); 
        }
        catch (Exception $e)
        {
            die('Erreur: ' .$e->getMessage()) ; 
        }
    }
    function modifierLivreur($livreur,$id_livreur)
    {
        $sql="UPDATE livreur SET id_livreur=:id_livreur, nom=:nom,prenom=:prenom,age=:age,num_tel=:num_tel,email=:email,zone_habitation=:zone_habitation, situation=:situation, vehicule=:vehicule, zone_de_livraison=:zone_de_livraison WHERE id_livreur=:id_livreur";
        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        try
        {        
            $req=$db->prepare($sql);
            $id_livreur=$id_livreur;
            $nom=$livreur->getnom();
            var_dump($nom);
            $prenom=$livreur->getprenom();
            $age=$livreur->getage();
            $num_tel=$livreur->getnum_tel();
            $email=$livreur->getemail();
            $zone_habitation=$livreur->getzone_habitation();
            $situation=$livreur->getsituation();
            $vehicule=$livreur->getvehicule();
            $zone_de_livraison=$livreur->getzone_de_livraison();

            $req->bindParam(':id_livreur',$id_livreur);
            $req->bindParam(':nom',$nom);
            $req->bindParam(':prenom',$prenom);
            $req->bindParam(':age',$age);
            $req->bindParam(':num_tel',$num_tel);
            $req->bindParam(':email',$email);
            $req->bindParam(':zone_habitation',$zone_habitation);
            $req->bindParam(':situation',$situation);
            $req->bindParam(':vehicule',$vehicule);
            $req->bindParam(':zone_de_livraison',$zone_de_livraison);
            
            var_dump($req->execute());
                $s=$req->execute();
                
               // header('Location: index.php');
        }
        catch (Exception $e)
        {
            echo " Erreur ! ".$e->getMessage();
        }
    }
    

   function nombre_livreur()
    {
        $sql="SELECT COUNT(id_livreur) as id FROM livreur WHERE 1=1";
        $db=config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();
            $l=$query->fetch();
            return $l;
        }
        catch(Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }



}

?>