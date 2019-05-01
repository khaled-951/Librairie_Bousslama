
<?php
/**
 * Created by PhpStorm.
 * User: IPHIANASSA
 * Date: 26/03/2019
 * Time: 3:47 PM
 */

session_start();


class utilisateurC
{
    function ajouterUtilisateur($utilisateur)
    {
        $sql = "insert into utilisateur (id,nom,prenom,dateNaissance,mail,sexe,adresse,mdp,numTel) 
          values (:id,:nom,:prenom,:dateNaissance,:mail,:sexe,:adresse,:mdp,:numTel)";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);//prépare la requete sql à etre exécuté par

            $id = $utilisateur->getId();
            $nom = $utilisateur->getNom();
            $prenom = $utilisateur->getPrenom();
            $dateNaissance = $utilisateur->getDateNaissance();
            $mail = $utilisateur->getMail();
            $sexe = $utilisateur->getSexe();
            $adresse = $utilisateur->getAdresse();
            $mdp = $utilisateur->getMdp();
            $numTel = $utilisateur->getNumTel();


            $req->bindValue(':id', $id);//bind value associe une valeur à un parametre
            $req->bindValue(':nom', $nom);
            $req->bindValue(':prenom', $prenom);
            $req->bindValue(':dateNaissance', $dateNaissance);
            $req->bindValue(':mail', $mail);
            $req->bindValue(':sexe', $sexe);
            $req->bindValue(':adresse', $adresse);
            $req->bindValue(':mdp', $mdp);
            $req->bindValue(':numTel', $numTel);


            $req->execute();

        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }

    }

    public function modifier()
    {
        $sql = "update utilisateur set nom = :nom,prenom = :prenom,dateNaissance=:dateNaissance,mail=:mail,sexe=:sexe,adresse=:adresse,mdp=:mdp,numTel=:numTel where id = :id";
        $db = config::getConnexion();
        try {


            $req = $db->prepare($sql);

            $req->bindValue(':id', $this->id);
            $req->bindValue(':nom', $this->nom);
            $req->bindValue(':prenom', $this->prenom);
            $req->bindValue(':dateNaissance', $this->dateNaissance);
            $req->bindValue(':mail', $this->mail);
            $req->bindValue(':sexe', $this->sexe);
            $req->bindValue(':adresse', $this->adresse);
            $req->bindValue(':mdp', $this->mdp);
            $req->bindValue(':numTel',$this->numTel);

            $req->execute();
        } catch (Exception $e) {
            echo 'Erreur' . $e->getMessage();
        }
    }
    public function sup(){
        $sql="delete from utilisateur where id = :id";
        $db=config::getConnexion();
        try{

            $req=$db->prepare($sql);

            $req->bindValue(':id',$this->id);

            $req->execute();
        }
        catch(Exception $e){
            echo 'Erreur' .$e->getMessage();
        }
    }


    public static function recherche($id = 0) {
        $rslt = array();
        $sql="select * from utilisateur ";
        if($id != 0)
            $sql .= "where id = :id";

        $db= config::getConnexion();
        try{
            $req = $db->prepare($sql);
            if($id != 0)
                $req->bindValue(':id',$id);
            $req->execute();
            $com = $req->fetchAll(PDO::FETCH_ASSOC);
            foreach ($com as $item) {
                array_push($rslt,new utilisateur($item['id'],$item['nom'],$item['prenom'],$item['dateNaissance'],$item['mail'],$item['sexe'],$item['adresse'],$item['mdp'],$item['numTel']));
            }

            return $rslt;
        }
        catch(Exception $e){
            die('erreur: '.$e->getMessage());

        }


    }



}

