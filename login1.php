<?php
/**
 * Created by PhpStorm.
 * User: imen
 * Date: 3/23/2018
 * Time: 11:12 PM
 */
session_start();
include_once '../config.php';
class utilisateur
{
    private $id;
    protected $mdp;
    

    /**
     * utilisateur constructor.
     * @param $nom
     * @param $prenom
     * @param $dateNaissance
     * @param $mail
     * @param $sexe
     * @param $adresse
     * @param $mdp
     * @param $role
     */
    public function __construct( /*$id, $mdp*/)
    {
        /*$this->id = $id;
        
        $this->mdp = $mdp;*/
        //$this->role = $role;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $nom
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    
    public function getMdp()
    {
        return $this->mdp;
    }
    
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    }


    public static function recherche($id) 
    {
        
        $config=config::getConnexion();
            $sql =$config->prepare("select id,mdp,nom,prenom,mail,sexe,adresse,dateNaissance,numTel from utilisateur where id =?");
            $sql->bindParam(1,$id);
            $sql->execute();

        foreach($sql as $val)
           {
             if($val['mdp']==$_POST['mdp'] /*&& $val['active']==1*/ )
             {
                    $_SESSION['id']=$id;
                    $_SESSION['nom']=$val['nom'];
                    $_SESSION['prenom']=$val['prenom'];
                    $_SESSION['mail']=$val['mail'];
                    $_SESSION['sexe']=$val['sexe'];
                    $_SESSION['adresse']=$val['adresse'];
                    $_SESSION['dateNaissance']=$val['dateNaissance'];
                    $_SESSION['mdp']=$val['mdp'];
                    $_SESSION['numTel']=$val['numTel'];

                    header("location: index1.php");
             }
            }
    }

    }

    if(isset($_POST['id']) && isset($_POST['mdp'])) {
        $utilisateur = new utilisateur();
        $utilisateur->setId($_POST['id']);
        $utilisateur->setMdp($_POST['mdp']);
        $utilisateur->recherche($_POST['id']);
    }
?>