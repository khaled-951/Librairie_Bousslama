<?php
/**
 * Created by PhpStorm.
 * User: IPHIANASSA
 * Date: 26/03/2019
 * Time: 3:47 PM
 */
include "../config.php";

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




    function modifierUtilisateur($utilisateur,$MyID)
    {
        $sql="update utilisateur SET (id:id,nom:nom,prenom:prenom,dateNaissance:dateNaissance,mail:mail,sexe:sexe,adresse:adresse,mdp:mdp,numTel:numTel where ID='$MyID')";
        $db=config::getConnexion();
        try{
            $req=$db->prepare($sql);

            $id = $utilisateur->setId();
            $nom = $utilisateur->setNom();
            $prenom = $utilisateur->setPrenom();
            $dateNaissance = $utilisateur->setDateNaissance();
            $mail = $utilisateur->setMail();
            $sexe = $utilisateur->setSexe();
            $adresse = $utilisateur->setAdresse();
            $mdp = $utilisateur->setMdp();
            $numTel = $utilisateur->setNumTel();


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
        }catch(Exception $e){echo 'Erreur' .$e->getMessage();}
    }

    function supprimerUtilisateur($id){
        $sql="DELETE FROM utilisateur where id= :id";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        try{
            $req->execute();
            // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }



}

