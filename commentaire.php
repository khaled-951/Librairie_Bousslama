<?php
/**
 * Created by PhpStorm.
 * User: imen
 * Date: 4/26/2018
 * Time: 10:56 AM
 */

class commentaire
{
    private $id;
    private $idprod;
    private $idc;
    private $com;

    /**
     * commentaire constructor.
     * @param $id
     * @param $idprod
     * @param $idc
     * @param $com
     */
    public function __construct($id, $idprod, $idc, $com)
    {
        $this->id = $id;
        $this->idprod = $idprod;
        $this->idc = $idc;
        $this->com = $com;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getIdprod()
    {
        return $this->idprod;
    }

    /**
     * @param mixed $idprod
     */
    public function setIdprod($idprod)
    {
        $this->idprod = $idprod;
    }

    /**
     * @return mixed
     */
    public function getIdc()
    {
        return $this->idc;
    }

    /**
     * @param mixed $idc
     */
    public function setIdc($idc)
    {
        $this->idc = $idc;
    }

    /**
     * @return mixed
     */
    public function getCom()
    {
        return $this->com;
    }

    /**
     * @param mixed $com
     */
    public function setCom($com)
    {
        $this->com = $com;
    }


    public function ajoutercom(){
        $db = config::getConnexion();
        $sql = "insert into commentaire VALUES (:id,:idc,:idp,:com)";
        $req= $db->prepare($sql);
        $req->bindValue(':id',null);
        $req->bindValue(':idc',$this->idc);
        $req->bindValue(':idp',$this->idprod);
        $req->bindValue(':com',$this->com);

        $req->execute();
    }

    public function afficher(){
        $db = config::getConnexion();
        $sql = "Select * from commentaire where idProduit = :idp";
        $req= $db->prepare($sql);

        $req->bindValue(':idp',$this->idprod);
        $req->execute();
        $liste = $req->fetchAll(PDO::FETCH_ASSOC);
        return $liste;
    }

    public function supprimer(){
        $db = config::getConnexion();
        $sql = "delete from commentaire where idCommentaire = :idp";
        $req= $db->prepare($sql);

        $req->bindValue(':idp',$this->id);
        $req->execute();
    }



}