<?php

/* include("model/model.php");
$bdd=new ModelUser(); */

/* if (isset($_GET['matriculeSwap'])) {
    $matricule = $_GET['matriculeSwap']; */


/* $sql=$bdd->newBD->prepare("UPDATE user SET etat=1 WHERE matricule=$matriculeSwap");

$sql->execute(); */

   /*  
    $req = $conn->prepare("SELECT * FROM user WHERE id = $id");
    $req->execute();
 */


   /*  $sqls=$bdd->newBD->prepare("SELECT rol FROM user WHERE matricule='$matriculeSwap'");
    $sqls->execute();   
    $data = $sqls->fetch(PDO::FETCH_ASSOC);
    $role=$data['rol'];
        if ( $role== 'Administrateur') {
            $sqls =$bdd->newBD->prepare("UPDATE user SET rol='Utilisateur-simple' WHERE matricule='$matriculeSwap'");
            $sqls->execute();
        }else{
            $sqls = $bdd->newBD->prepare("UPDATE user SET rol='Administrateur' WHERE matricule='$matriculeSwap'");
            $sqls->execute();
        }
    
    if ($sqls) {
        header("location:page-admin.php"); 
    }
} */








/* if (isset($_GET['matriculeSwap'])) {
    $id = $_GET['matriculeSwap'];

    $req = $bdd->newBD->prepare("SELECT * FROM user WHERE matricule= $matriculeSwap");
    $req->execute();

    if ($req->rowCount()>0) {
        $data = $req->fetchAll()[0];
        if ($data['rol'] === 'Administrateur') {
            $req = $bdd->newBD-> prepare("UPDATE user SET role_etat = 1, rol = 'Utilisateur-simple' WHERE matricule = $matriculeSwap");
            $req->execute();
        }else{
            $req =$bdd->newBD-> prepare("UPDATE user SET role_etat = 0, rol = 'Administrateur' WHERE matricule = $matriculeSwap");
            $req->execute();
        }
    }
    if ($req) {
        header("Location:page-admin.php"); 
    }
} */

/* 
include("model/model.php");
$newBD=new PDO("mysql:host=localhost;dbname=mon-tp1", "sosso", "abc");

// if(isset($_GET['matricule'])){
   
    $matricule=$_GET['matricule'];
    $sql=$newBD->prepare("SELECT * from user WHERE matricule=:matricule");
    $sql->execute(['matricule'=>$matricule]);

    $row=$sql->fetch(PDO::F *//* ETCH_ASSOC);
    $rol=$row['rol']; */
   /*  var_dump($row[0]['matricule']);die; */

// }
/* if (isset($row['rol'],$row['matricule'],$row['role_etat'])) {
    // var_dump($_POST);die;
    $sql=$newBD->prepare("UPDATE user SET rol=:rol,role_etat=:role_etat WHERE matricule=:matricule");
    $sql->execute([
        'rol' => $_POST['rol'],
        'role_etat' => $_POST['role_etat'],
        'matricule'=> $_POST['matricule']
        
        // if ($sql->rowCount()>0) {
            /*  $data = $sql->fetchAll()[0]; */
        /*     if ($rol=='Administrateur') {
                
                $sql=$newBD->prepare("UPDATE user SET role_etat=1, rol='Utilisateur-simple' WHERE matricule=:matricule");
                $sql->execute(['matricule'=>$matricule]);
                // $sql->execute();
                // var_dump($sql);die;
            header("location:page_archiver.php");
        }
         if ($row['rol']=='Utilisateur-simple'){
            $sql=$newBD->prepare("UPDATE user SET role_etat=0, rol='Administrateur' WHERE matricule=$matricule");
            $sql->execute();
            // var_dump($rol);die;

        } */
    // }

/* } */



include("model/model.php");
$newBD=new PDO("mysql:host=localhost;dbname=mon-tp1", "sosso", "abc");


    $matricule=$_GET['matricule'];
    // $datearchiver=date('y-m-d h:i:s');
    $requêterole=$newBD->prepare("SELECT rol  FROM user WHERE matricule='$matricule'");
    $requêterole->execute();
    $role=$requêterole->fetch(PDO::FETCH_ASSOC);
    $valeurrole=$role["rol"];
   
    switch ($valeurrole) {
        case 'Administrateur':
            $req=$newBD->prepare("UPDATE user SET rol='Utilisateur_simple' WHERE matricule='$matricule'");//code pour archiver en changeant la valeur 0 par 1
            $req->execute();
            if($req){
                     header('location:page-admin.php');
            
            }
            break;
        case 'Utilisateur_simple':
            $req=$newBD->prepare("UPDATE user SET rol='Administrateur' WHERE matricule='$matricule'");//code pour archiver en changeant la valeur 0 par 1
            $req->execute();
            if($req){
                    header('location:page-admin.php');
            }
            break;
    }

?>

