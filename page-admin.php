<?php
  session_start();
/*   include("model/model.php"); */
  $newBD= new PDO("mysql:host=localhost;dbname=mon-tp1", "sosso", "abc");
 
 /*  $sql=$req->newBD->prepare("SELECT * from user  WHERE matricule=?");
        $sql->execute([
            
            'matricule'=> $_SESSION['matricule']
            
        ]); */
/*   
 
  
$req=new ModelUser();
$sql=$req->newBD->prepare("SELECT * from user  WHERE matricule=?");
        $sql->execute([
            
            'matricule'=> $_SESSION['matricule']
            
        ]);   */

/* $newBD= new PDO("mysql:host=localhost;dbname=mon-tp1", "sosso", "abc") */;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styler.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>page-admin</title>
    <style>
        td {
            /*     border:1px solid black; */
            padding: 1rem;
        }
    </style>
</head>

<body>
<h3 class="text-center text-secondary">ADMINISTRATEUR</h3>
    <?php
    
    include("model/model.php"); 
   /*  include("traitement-photo.php"); */
  /*   if($_SESSION['id']){
        $idSession=$_SESSION['id'];
    }*/
    ?>
 


    <div class="container-fluid">
        <!-- Form modal -->
        <!-- Button trigger modal -->


        <!-- Modal -->
        <!-- Button trigger modal -->


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Voulez vous vraiment modifier?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <a href="modifier.php"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OUI</button></a>
                        <a href="page-admin.php"><button type="button" class="btn btn-primary">NON</button></a>
                    </div>
                </div>
            </div>
        </div>








        <div class="row  m-5">
            <div class="part1 col-lg-3  " style="border: 10px solid rgba(252, 220, 181, 1);">
                <div>
                    <div class="logo ">
                        <img class="logo mx-auto" src="image/logo.png" alt="logo" style="width: 8rem;height: 8rem;"><br><br>
                        <hr>
                        <div class="d-block  monTitre text-center" style="background-color:  rgba(252, 220, 181, 1);">
                            <h4>Tableau de bord</h4>
                        </div>
                        <p class="para text-center p-3"><img src="image/utilisateur.png" style="width: 2rem;height: 2rem;" alt=""><strong>Utilisateurs</strong></p>
                        <div class="lesUsers text-center " style="color: black;">
                            <a href="page-admin.php"><strong>actifs</strong></a><br><br>
                            <a href="page_archiver.php"><strong> archivés</strong></a><br><br>
                            <a href="page-inscription.php"><strong> inscrire</strong></a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="part2 col-lg-9 ">
                <div class="row profil" style="background-color:  cornflowerblue;height:15rem">
                    <div class="col-lg-3 ">
                       
                       <!--  <p> 
                            <?php
                            /* echo $data["matricule"]; */
                            ?>
                        </p> -->
         <!-- Recupèration de la photo à la base de données -->
          <?php
           /*  $bdd = new ModelUser; */
          /* 
          $newBD=new PDO("mysql:host=localhost;dbname=mon-tp1", "sosso", "abc");
          $state = $newBD->prepare("SELECT photo FROM photo WHERE user=:user");
          $state->execute(['user'=> $idSession]);
          $rows = $state->fetch(PDO::FETCH_ASSOC); */
          
          ?>
          <!-- ici nous avons l'image du profil -->
         <!--   <h4>
            <?php /* echo $_SESSION['matricule']; */ ?>
        </h4> 
 -->
         <!--  <div class="col-8  d-flex justify-content-center align-items-center">
        <h1 style="color: #2A7282;"> Bienvenue </h1>
      </div> --> 

      <?php
      $matricule = $_SESSION["matricule"];
        $state = $newBD->prepare("SELECT photo FROM user WHERE matricule=:matricule");
          $state->execute(['matricule'=> $matricule]);
          $rows = $state->fetch(PDO::FETCH_ASSOC);  
          ?>
          <!-- ici nous avons l'image du profil -->
          <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($rows['photo']); ?>" class="rounded-circle border p-1 bg-secondary" height="100" width="100" />
    
         
                 
        </div>
        <div class="col-lg-3 mt-5">
         <H3><?php  echo $_SESSION['prenom'] . ' ' . $_SESSION['nom'] ?></H3>  
        </div>
       

                    <div class="col-lg-5 mt-5">
                        <form method="post" action="">
                        <input class="form-control me-2" type="search" name="recherche" style="width: 20rem;" placeholder="Search" aria-label="Search">
                        <!-- <button></button>  -->  
                    </form>
                    </div>
                    <div class="col-lg-1 mt-5">
                        <a href="model/deconnexion.php"><img src="image/deconnect.svg" style="height:2rem;" alt=""></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">

                        <!-- pour tableau -->
                        <table class="table">
                            <thead>
                                <tr class="">
                                    <th scope="col">Prenom</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Matricule</th>
                                    <th scope="col">Rôle</th>
                                    <th scope="col">Action</th>
                                    <!-- <th scope="col">Actions</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                
                                $bdd = new ModelUser;
                                $id = $_SESSION["id"];
                               $lister = $bdd->newBD->prepare("SELECT * FROM user WHERE etat=0 AND id!=$id");
                               $lister->execute();
                                 if (isset($_POST['recherche']) && ($_POST['recherche'] != '')) {
                                    $monNom = $_POST['recherche']; 
                                while ($row = $lister->fetch(PDO::FETCH_ASSOC)) {
                                     if ($row['nom'] == $monNom){ 
                                    $nom = $row['nom'];
                                    $prenom = $row['prenom'];
                                    $email = $row['mail'];
                                    $matricule = $row['matricule'];
                                    $role = $row['rol'];
                                    echo '
                                   <tr>
                                   <td>' . $prenom . '</td>
                                   <td>' . $nom . '</td>
                                   <td>' . $email . '</td>
                                   <td>' . $matricule . '</td>
                                   <td>' . $role . '</td>
                                   <td style=""> 
                                   <a  href="modifier.php?matricule='.$matricule.'" class="btn btn-primary" ">
                                        <img src="image/edit.png" style="height:2rem;" alt="">
                                    </a>
                                   
                                    <a href="traitementDelete.php?matricule='. $matricule .'" type="button" class="btn btn-danger" >
                                    <img src="image/delate.jpg" style="height:2rem;" alt="">
                                    </a>

                                    <a href="traitementSwap.php?matricule='. $matricule .'" type="button" class="btn btn-success" >
                                    <img src="image/swap.png" style="height:2rem;" alt=""  >
                                    </a>



                                   
                                  
                                   </td>
                                    </tr>
                                   ';
                                } }
                            }else {
                                while ($row = $lister->fetch(PDO::FETCH_ASSOC)) {
                                   /*  if ($row['nom'] == $monNom){  */
                                   $nom = $row['nom'];
                                   $prenom = $row['prenom'];
                                   $email = $row['mail'];
                                   $matricule = $row['matricule'];
                                   $role = $row['rol'];
                                   echo '
                                  <tr>
                                  <td>' . $prenom . '</td>
                                  <td>' . $nom . '</td>
                                  <td>' . $email . '</td>
                                  <td>' . $matricule . '</td>
                                  <td>' . $role . '</td>
                                  <td style=""> 
                                  <a  href="modifier.php?matricule='.$matricule.'" class="btn btn-primary" ">
                                       <img src="image/edit.png" style="height:2rem;" alt="">
                                   </a>
                                  
                                   <a href="traitementDelete.php?matricule='. $matricule .'" type="button" class="btn btn-danger" >
                                   <img src="image/delate.jpg" style="height:2rem;" alt="">
                                   </a>

                                   <a href="traitementSwap.php?matricule='. $matricule .'" type="button" class="btn btn-success" >
                                   <img src="image/swap.png" style="height:2rem;" alt=""  >
                                   </a>



                                  
                                 
                                  </td>
                                   </tr>
                                  ';
                               /* } */
                            } }/**/
                                ?>
<!-- data-bs-toggle="modal" data-bs-target="#exampleModal" -->
                            </tbody>
                        </table>
                        <!-- Pagination -->
                        <nav aria-label="Page navigation example" id="pagination">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>

                    </div>
                </div>

            </div>
        </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>