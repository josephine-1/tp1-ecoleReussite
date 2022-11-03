<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styler.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>page-modification</title>

</head>

<body>
    <?php
    //     var_dump($_GET);die;
    // if (isset($_GET['matricule'])) {
    // }
    include("model/model.php");
    $newBD= new PDO("mysql:host=localhost;dbname=mon-tp1", "sosso", "abc");

    if(isset($_GET['matricule'])){
        // $nom=$_donnee['nom'];
        // $prenom=$_donnee['prenom'];
        // $mail=$_donnee['mail'];
        $matricule = $_GET['matricule'];
        $sql=$newBD->prepare("SELECT * from user  WHERE matricule=:matricule");
        $sql->execute(['matricule'=> $matricule]);

        $row =  $sql->fetchAll();
        // var_dump($row[0]['nom']);die;
        // if (empty($sql->fetchAll())){
        //     echo "La recupération des données a rencontré un probléme!";
            
        // }
        // else{
        //     $row = $sql->fetchAll();
        // }
    }
    
    if (isset($_POST['mail'],$_POST['nom'],$_POST['prenom'],$_POST['matricule'])) {
        // var_dump($_POST);die;
        $sql=$newBD->prepare("UPDATE user SET nom=:nom,prenom=:prenom,mail=:mail WHERE matricule=:matricule");
        $sql->execute([
            'nom' => $_POST['nom'],
            'prenom' => $_POST['prenom'],
            'mail' => $_POST['mail'],
            'matricule'=> $_POST['matricule']
        ]);
        header("location:page-admin.php");
    }

    ?>
    <div class="container">
      
            

        <div class="row">
            <div class="col-lg-12">
                <div class="row m-5 " style="background-color:  cornflowerblue;height:10rem;">
                    <div class="col-lg-4">
                        <div class="logo ">
                            <img class="logo mx-auto" src="image/logo.png" alt="logo" style="width: 8rem;height: 8rem;">

                        </div>

                    </div>
                    <div class="col-lg-8">
                        <h3 class="mt-5 text-white">Page modification</h3>
                    </div>

                </div>
                <div class="row  m-5">
                    <div class="col-lg-12  ">
                        <form class="maForm " action="modifier.php" method="POST">
                            <input type="text" name="matricule" hidden value="<?php  if(isset($row[0]['matricule'])) echo $row[0]['matricule'] ?>">
                            <div class="mb-3 ">
                                <input class="form-control"  type="nom" name="nom"    style="height:5rem;"      value="<?php  if(isset($row[0]['nom'])) echo $row[0]['nom'] ?>" />

                            </div>
                            <div class="mb-3">
                               
                                <input class="form-control" type="prenom" name="prenom" style="height:5rem;"  value="<?php if(isset($row[0]['prenom'])) echo $row[0]['prenom']?>"/>
                            </div>
                            <div class="mb-3">
                               
                                <input class="form-control"  type="mail" name="mail" style="height:5rem;" value="<?php if(isset($row[0]['mail'])) echo $row[0]['mail']?>"/>

                            </div>


                            <button type="submit" class="btn btn-danger" name="modifie">Modifier</button>
                        </form>
                    </div>

                </div>

            </div>

        </div>
</body>

</html>