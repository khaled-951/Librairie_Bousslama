<?php
include_once "../config.php";

class livraisonC{
    
    public function ajoutE($livraison)
{
    $db=config::getconnexion();
    //query insert into
    $sql="insert into livraison(nom_destinataire,prenom_destinataire,code_postale,rue_et_ville,pays,tel_gsm,date_demande_livraison ,date_livraison_estimer) values(:nom_destinataire,:prenom_destinataire,:code_postale,:rue_et_ville,:pays,:tel_gsm,:date_demande_livraison,:date_livraison_estimer)";
    $q=$db->prepare($sql);
    $q->bindvalue(':nom_destinataire',$livraison->getNomDestinataire());
    $q->bindvalue(':prenom_destinataire',$livraison->getPrenomDestinataire());
    $q->bindvalue(':code_postale',$livraison->getCodePostale());
    $q->bindvalue(':rue_et_ville',$livraison->getRueEtVille());
    $q->bindvalue(':pays',$livraison->getPays());
    $q->bindvalue(':tel_gsm',$livraison->getTelGsm());
    $q->bindvalue(':date_demande_livraison',$livraison->getDateDemandeLivraison());
    $q->bindvalue(':date_livraison_estimer',$livraison->getDateLivraisonEstimer());

    $q->execute();
    return $q;
    
}
function modifierlivraison($livraison,$id){
		$sql="UPDATE livraison SET nom_destinataire = :nom, prenom_destinataire = :prenom, code_postale = :code , rue_et_ville = :rue, pays = :pays , tel_gsm = :tel , date_demande_livraison = :dtl ,date_livraison_estimer = :dle
        		 WHERE id_livraison=:id";
		$db = config::getConnexion();
	try {
        $req = $db->prepare($sql);

        $nom = $livraison->getNomDestinataire();
        $prenom = $livraison->getPrenomDestinataire();
        $code = $livraison->getCodePostale();
        $rue = $livraison->getRueEtVille();
        $pays = $livraison->getPays();
        $tel = $livraison->getTelGsm();
        $dtl = $livraison->getDateDemandeLivraison();
        $dle = $livraison->getDateLivraisonEstimer();


        $req->bindValue(':nom', $nom);
        $req->bindValue(':prenom', $prenom);
        $req->bindValue(':code', $code);
        $req->bindValue(':rue', $rue);
        $req->bindValue(':pays', $pays);
        $req->bindValue(':tel', $tel);
        $req->bindValue(':dtl', $dtl);
        $req->bindValue(':dle', $dle);

        $req->bindValue(':id', $id);

        $s = $req->execute();
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
    }

public function recupererliv($id){
$sql="SELECT * from livraison where id_livraison= $id";
$db = config::getConnexion();
try{
$sth = $db->prepare($sql);
$sth->execute();
$liste = $sth->fetch();
return $liste;
}
catch (Exception $e){
    die('Erreur: '.$e->getMessage());
}
	}
  public function afficheliv()
{
    $db=config::getConnexion();
    $sql="select * from livraison";
    $q=$db->query($sql);
    return $q;
    
}
    public function trierliv()
    {
        $db=config::getConnexion();
        $sql="select * from livraison order by nom_destinataire ASC";
        $q=$db->query($sql);
        return $q;

    }
    public function rechercheliv($HI)
    {
        $db=config::getConnexion();
        $sql="select * from livraison where pays LIKE '%$HI%' or tel_gsm LIKE '%$HI%' or nom_destinataire LIKE '%$HI%' or prenom_destinataire LIKE '%$HI%' or code_postale LIKE '%$HI%' or rue_et_ville LIKE '%$HI%'";
        $q=$db->query($sql);
        return $q;

    }


    public function supprimeliv($id)
{
    $db=config::getConnexion();
    $sql="delete from livraison where id_livraison=:id";
    $q=$db->prepare($sql);
    $q->bindValue(':id',$id);
                try{
                    $q->execute();
                }catch(Exeption $e){
                    die('Erreur:'. $e->getMessage());
                }
    //bind value
    
    
    return $q;
    
}
}
?>

