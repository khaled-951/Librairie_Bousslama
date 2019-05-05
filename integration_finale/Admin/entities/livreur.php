<?php
class livreur
{   private $id_livreur;
    private $nom;
    private $prenom;
    private $age;
    private $num_tel;
    private $email;
    private $zone_habitation;
    private $situation;
    private $vehicule;
    private $zone_de_livraison;

    /**
     * livreur constructor.
     * @param $id_livreur
     * @param $nom
     * @param $prenom
     * @param $age
     * @param $num_tel
     * @param $email
     * @param $zone_habitation
     * @param $situation
     * @param $vehicule
     * @param $zone_de_livraison
     */
    public function __construct($nom, $prenom, $age, $num_tel, $email, $zone_habitation, $situation, $vehicule, $zone_de_livraison)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
        $this->num_tel = $num_tel;
        $this->email = $email;
        $this->zone_habitation = $zone_habitation;
        $this->situation = $situation;
        $this->vehicule = $vehicule;
        $this->zone_de_livraison = $zone_de_livraison;
    }
    /**
     * @return mixed
     */
    public function getIdLivreur()
    {
        return $this->id_livreur;
    }

    /**
     * @param mixed $id_livreur
     */
    public function setIdLivreur($id_livreur)
    {
        $this->id_livreur = $id_livreur;
    }
    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getNumTel()
    {
        return $this->num_tel;
    }

    /**
     * @param mixed $num_tel
     */
    public function setNumTel($num_tel)
    {
        $this->num_tel = $num_tel;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getZoneHabitation()
    {
        return $this->zone_habitation;
    }

    /**
     * @param mixed $zone_habitation
     */
    public function setZoneHabitation($zone_habitation)
    {
        $this->zone_habitation = $zone_habitation;
    }

    /**
     * @return mixed
     */
    public function getSituation()
    {
        return $this->situation;
    }

    /**
     * @param mixed $situation
     */
    public function setSituation($situation)
    {
        $this->situation = $situation;
    }

    /**
     * @return mixed
     */
    public function getVehicule()
    {
        return $this->vehicule;
    }

    /**
     * @param mixed $vehicule
     */
    public function setVehicule($vehicule)
    {
        $this->vehicule = $vehicule;
    }

    /**
     * @return mixed
     */
    public function getZoneDeLivraison()
    {
        return $this->zone_de_livraison;
    }

    /**
     * @param mixed $zone_de_livraison
     */
    public function setZoneDeLivraison($zone_de_livraison)
    {
        $this->zone_de_livraison = $zone_de_livraison;
    }
}





















