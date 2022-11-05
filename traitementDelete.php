
<?php include("model/model.php"); ?>





<?php 

$bdd=new ModelUser();
/* $matricule=$_GET['matricule']; */
/* $sql="UPDATE user SET etat=1 WHERE matricule=$matricule"; */

$sql=$bdd->newBD->prepare("UPDATE user SET etat=1 WHERE matricule=:matricule");
        $sql->execute([
            
            'matricule'=> $_GET['matricule']
        ]);
        header("location:page-admin.php");

?>

<!-- Déarchiver -->
<?php
$sql=$bdd->newBD->prepare("UPDATE user SET etat=0 WHERE matricule=:matricule");
$sql->execute([
    
    'matricule'=> $_GET['matriculDA']
]);


header("location:page-admin.php"); 
?>
<!-- Swap -->
<?php

/* $sql=$bdd->newBD->prepare("UPDATE user SET etat=0 WHERE matricule=:matricule");
$sql->execute([
    
    'matricule'=> $_GET['matriculDA']
]);
header("location:page_archiver.php"); 

?>

