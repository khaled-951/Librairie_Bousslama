<?php
/**
 * Created by PhpStorm.
 * User: ahmed
 * Date: 3/29/2019
 * Time: 5:03 PM
 */

class Livraison
{   private $id_livraison;
    private $nom_destinataire;
    private $prenom_destinataire;
    private $code_postale;
    private $rue_et_ville;
    private $pays;
    private $tel_gsm;
    private $date_demande_livraison;
    private $date_livraison_estimer;
    private $id_client;

    /**
     * Livraison constructor.
     * @param $nom_destinataire
     * @param $prenom_destinataire
     * @param $code_postale
     * @param $rue_et_ville
     * @param $pays
     * @param $tel_gsm
     * @param $date_demande_livraison
     * @param $date_livraison_estimer
     */
    public function __construct($nom_destinataire, $prenom_destinataire, $code_postale, $rue_et_ville, $pays, $tel_gsm, $date_demande_livraison, $date_livraison_estimer)
    {
        $this->nom_destinataire = $nom_destinataire;
        $this->prenom_destinataire = $prenom_destinataire;
        $this->code_postale = $code_postale;
        $this->rue_et_ville = $rue_et_ville;
        $this->pays = $pays;
        $this->tel_gsm = $tel_gsm;
        $this->date_demande_livraison = $date_demande_livraison;
        $this->date_livraison_estimer = $date_livraison_estimer;
    }

    /**
     * Livraison constructor.
     * @param $nom_destinataire
     * @param $prenom_destinataire
     * @param $code_postale
     * @param $rue_et_ville
     * @param $pays
     * @param $tel_gsm
     * @param $date_demande_livraison
     * @param $date_livraison_estimer
     */

    /**
     * @return mixed
     */
    public function getIdLivraison()
    {
        return $this->id_livraison;
    }

    /**
     * @param mixed $id_livraison
     */
    public function setIdLivraison($id_livraison)
    {
        $this->id_livraison = $id_livraison;
    }

    /**
     * @return mixed
     */
    public function getNomDestinataire()
    {
        return $this->nom_destinataire;
    }

    /**
     * @param mixed $nom_destinataire
     */
    public function setNomDestinataire($nom_destinataire)
    {
        $this->nom_destinataire = $nom_destinataire;
    }

    /**
     * @return mixed
     */
    public function getPrenomDestinataire()
    {
        return $this->prenom_destinataire;
    }

    /**
     * @param mixed $prenom_destinataire
     */
    public function setPrenomDestinataire($prenom_destinataire)
    {
        $this->prenom_destinataire = $prenom_destinataire;
    }

    /**
     * @return mixed
     */
    public function getCodePostale()
    {
        return $this->code_postale;
    }

    /**
     * @param mixed $code_postale
     */
    public function setCodePostale($code_postale)
    {
        $this->code_postale = $code_postale;
    }

    /**
     * @return mixed
     */
    public function getRueEtVille()
    {
        return $this->rue_et_ville;
    }

    /**
     * @param mixed $rue_et_ville
     */
    public function setRueEtVille($rue_et_ville)
    {
        $this->rue_et_ville = $rue_et_ville;
    }

    /**
     * @return mixed
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * @param mixed $pays
     */
    public function setPays($pays)
    {
        $this->pays = $pays;
    }

    /**
     * @return mixed
     */
    public function getTelGsm()
    {
        return $this->tel_gsm;
    }

    /**
     * @param mixed $tel_gsm
     */
    public function setTelGsm($tel_gsm)
    {
        $this->tel_gsm = $tel_gsm;
    }

    /**
     * @return mixed
     */
    public function getDateDemandeLivraison()
    {
        return $this->date_demande_livraison;
    }

    /**
     * @param mixed $date_demande_livraison
     */
    public function setDateDemandeLivraison($date_demande_livraison)
    {
        $this->date_demande_livraison = $date_demande_livraison;
    }

    /**
     * @return mixed
     */
    public function getDateLivraisonEstimer()
    {
        return $this->date_livraison_estimer;
    }

    /**
     * @param mixed $date_livraison_estimer
     */
    public function setDateLivraisonEstimer($date_livraison_estimer)
    {
        $this->date_livraison_estimer = $date_livraison_estimer;
    }

    /**
     * @return mixed
     */
    public function getIdClient()
    {
        return $this->id_client;
    }

    /**
     * @param mixed $id_client
     */
    public function setIdClient($id_client)
    {
        $this->id_client = $id_client;
    }

}