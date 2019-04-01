<?php
include_once("../config.php");
if (isset($_POST['Envoyer'])) {


  $id=$_POST['id'];
 $nom=$_POST['nom']; 
 $prenom=$_POST['prenom'];
 $dateNaissance=$_POST['dateNaissance'];
 $sexe=$_POST['sexe'];
 $mail=$_POST['mail'];
 $adresse=$_POST['adresse'];
 $mdp=$_POST['mdp'];

 $pdo =config::getConnexion();
            $sql = "INSERT INTO utilisateur (id,nom,prenom,dateNaissance,sexe, mail,adresse,mdp,numTel,role) values( ?, ?, ? , ? , ? , ? , ? , ?,? , ?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($id,$nom,$prenom, $dateNaissance,$sexe,$mail,$adresse,$mdp,$numTel,1 ));
    echo "ajout avec succes <br/>";
header("Location:login.php");
}

if(isset($_POST['log']))
  {
     $config=config::getConnexion();
            $sql =$config->prepare("select mdp,nom,prenom,mail,sexe,adresse,dateNaissance,numTel,role from utilisateur where id =?");
            $sql->bindParam(1,$_POST['user']);
            $sql->execute();

        foreach($sql as $val)
           {
             if($val['mdp']==$_POST['mdp'] /*&& $val['active']==1*/ )
             {
                    $_SESSION['id']=$_POST['user'];
                    $_SESSION['nom']=$val['nom'];
                    $_SESSION['prenom']=$val['prenom'];
                    $_SESSION['mail']=$val['mail'];
                    $_SESSION['sexe']=$val['sexe'];
                    $_SESSION['adresse']=$val['adresse'];
                    $_SESSION['dateNaissance']=$val['dateNaissance'];
                    $_SESSION['mdp']=$val['mdp'];
                    $_SESSION['numTel']=$val['numTel'];

                    header("location:tables-data-user.html.php");
             }
            }
  }


?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ela Admin - HTML5 Admin Template</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
</head>
<body class="bg-dark">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form>
                        <div class="form-group">
                            <label>IDENTIFIANT *</label>
                            <input type="number" class="form-control" placeholder="identifiant">
                        </div>
                        <div class="form-group">
                            <label>MOT DE PASSE *</label>
                            <input type="password" class="form-control" placeholder="mot de passe">
                        </div>
                    <!-- 
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                            <label class="pull-right">
                                <a href="#">Forgotten Password?</a>
                            </label>

                        </div>
                    -->
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" name="log">Se Connecter</button>
                        <!--
                        <div class="social-login-content">
                            <div class="social-button">
                                <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>Sign in with facebook</button>
                                <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-twitter"></i>Sign in with twitter</button>
                            </div>
                        </div>
                    
                        <div class="register-link m-t-15 text-center">
                            <p>Don't have account ? <a href="#"> Sign Up Here</a></p>
                        </div>
                        -->
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>
