<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styler.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>page-admin</title>
    <style>
        td{
        /*     border:1px solid black; */
             padding:1rem; 
        }
    </style>
</head>
<body >
    <?php
    include("model/model.php");
    ?>
    <div class="container" style="border: 1px solid  cornflowerblue;">
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
                   <a  href="actifs.php"><strong>actifs</strong></a><br>
                   <a   href="archivés.php"><strong> archivés</strong></a>
                   </div>
                    </div>
                 </div>
          
            </div>
            <div class="part2 col-lg-9">
                <div class="row profil" style="background-color:  cornflowerblue;height:15rem">
                    <div class="col-lg-4 mt-5">
                        <p>image et matricule</p>
                    </div>
                    <div class="col-lg-6 mt-5">
                        <input type="text" placeholder="Rechercher">
                    </div>
                    <div class="col-lg-2 mt-5">
                        <a href="page-connexion.php"><img src="image/deconnect.svg" style="height:2rem;" alt=""></a>
                    </div>
                </div>
                <div class="row table">
                    <div class="col-lg-12">
                        <table>
                            <tr>
                                <td><strong>Nom</strong></td>
                                <td><strong>Prénom</strong></td>
                                <td><strong>Email</strong></td>
                                <td><strong>Matricule</strong></td>
                                <td><strong>Role</strong></td>
                                <td><strong>Action</strong></td>
                                
                            </tr>
                        
                            <tr>
                                <td>diop</td>
                                <td>bineta</td>
                                <td>bin@gmail.com</td>
                                <td>Z6S0WVUL</td>
                                <td>Administrateur</td>
                                <td><a href="modifier.php"><img src="image/edit.png"  style="width: 2rem;height: 2rem;" alt="">
                                <td><a href="archiver.php"><img src="image/sup.svg" style="width: 2rem;height: 2rem;" alt=""></a></td>
                                <td><a href="change.php"></a><img src="image/swap.png" style="width: 2rem;height: 2rem;" alt=""></a></td></td>
                            </tr>
                        </table>
                    </div>
                </div>
               
            </div>
        </div>

    </div>
</body>
</html>