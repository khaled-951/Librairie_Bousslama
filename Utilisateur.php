<?php
/**
 * Created by PhpStorm.
 * User: IPHIANASSA
 * Date: 26/03/2019
 * Time: 3:38 PM
 */
include '../config.php';


class utilisateur
{
    private $id ;
    private $nom ;
    private $prenom ;
    private $dateNaissance ;
    private $mail ;
    private $sexe ;
    private $adresse ;
    private $mdp ;
    private $numTel ;

    /**
     * Utilisateur constructor.
     * @param $id
     * @param $nom
     * @param $prenom
     * @param $dateNaissance
     * @param $mail
     * @param $sexe
     * @param $adresse
     * @param $mdp
     * @param $numTel
     */
    public function __construct($id, $nom, $prenom, $dateNaissance, $mail, $sexe, $adresse, $mdp, $numTel)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->mail = $mail;
        $this->sexe = $sexe;
        $this->adresse = $adresse;
        $this->mdp = $mdp;
        $this->numTel = $numTel;
    }

    public function getId(){return $this->id;}
    public function getNom(){return $this->nom;}
    public function getPrenom(){return $this->prenom;}
    public function getDateNaissance(){return $this->dateNaissance;}
    public function getMail(){return $this->mail;}
    public function getSexe(){return $this->sexe;}
    public function getAdresse(){return $this->adresse;}
    public function getMdp(){return $this->mdp;}
    public function getNumTel(){return $this->numTel;}


    public function setId($id){$this->id = $id;}
    public function setNom($nom){$this->nom = $nom;}
    public function setPrenom($prenom){$this->prenom = $prenom;}
    public function setDateNaissance($dateNaissance){$this->dateNaissance = $dateNaissance;}
    public function setMail($mail){$this->mail = $mail;}
    public function setSexe($sexe){$this->sexe = $sexe;}
    public function setAdresse($adresse){$this->adresse = $adresse;}
    public function setMdp($mdp){$this->mdp = $mdp;}
    public function setNumTel($numTel){$this->numTel = $numTel;}









}