<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styler.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>page-userSimple</title>
</head>

<body>
    <?php
    include("model/model.php");
    ?>
    <h1 class="text-center text-secondary">Utilisateur Simple</h1>
    <?php
    
    /*  include("model/model.php"); */
     /* include("traitement-photo.php");
     if($_SESSION['id']){
         $idSession=$_SESSION['id'];
     } */
     ?>
    <div class="container">
        <div class="row  m-5">
            <div class="part1 col-lg-3  " style="border: 1px solid blue;height: 50rem;">
                <div>
                    <div class="logo ">
                        <img class="logo mx-auto" src="image/logo.png" alt="logo" style="width: 8rem;height: 8rem;"><br><br>
                        <hr>
                        <div class="d-block  monTitre text-center" style="background-color:  rgba(252, 220, 181, 1);">
                            <h4>Tableau de bord</h4>
                        </div>
                        <p class="para text-center p-3"><img src="image/utilisateur.png" style="width: 2rem;height: 2rem;" alt=""><strong>Utilisateurs</strong></p>
                        <div class="lesUsers text-center " style="color: black;">
                            <a href="page-admin.php"><strong> actifs</strong></a><br>
                            <a href="page_archiver"><strong> archivés</strong></a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="part2 col-lg-9">
                <div class="row profil" style="background-color:  cornflowerblue;height:15rem">
                    <div class="col-lg-6 ">
                        <!-- Recupèration de la photo à la base de données -->
          <?php
         /*  
          $newBD=new PDO("mysql:host=localhost;dbname=mon-tp1", "sosso", "abc");
          $state = $newBD->prepare("SELECT photo FROM photo WHERE user=:user");
          $state->execute(['user'=> $idSession]);
          $rows = $state->fetch(PDO::FETCH_ASSOC); */
          ?>
          <!-- ici nous avons l'image du profil -->
          <img src="image/eleve.jpg" class="rounded-circle border p-1  " height="200" width="200" />
                    </div>

                    <div class="col-lg-3 mt-5">
                        <input class="form-control me-2" type="search" style="width: 12rem;" placeholder="Search" aria-label="Search">

                    </div>
                    <div class="col-lg-3 mt-5">
                        <a href="page-connexion.php"><img src="image/deconnect.svg" style="height:2rem;" alt=""></a>
                    </div>
                </div>
                <div class="row table">
                    <div class="col-lg-12">

                        <!-- pour tableau -->
                        <table class="table">
                            <thead>
                                <tr class="">
                                    <th scope="col">Prenom</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Matricule</th>
                                    <th scope="col">date_inscription</th>

                                    <!-- <th scope="col">Actions</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $bdd = new ModelUser;
                                $lister = $bdd->newBD->prepare("SELECT * FROM user WHERE etat=0 ");
                                $lister->execute();
                                while ($row = $lister->fetch(PDO::FETCH_ASSOC)) {
                                    $nom = $row['nom'];
                                    $prenom = $row['prenom'];
                                    $email = $row['mail'];
                                    $matricule = $row['matricule'];
                                    $role = $row['rol'];
                                    $date_Act = $row['date_Act'];
                                    echo '
           <tr>
           <td>' . $prenom . '</td>
           <td>' . $nom . '</td>
           <td>' . $email . '</td>
           <td>' . $matricule . '</td>
           <td>' . $date_Act . '</td>
            </tr>
           ';
                                }
                                ?>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>