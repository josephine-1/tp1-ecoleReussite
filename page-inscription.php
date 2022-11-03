<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscrire</title>
    <link rel="stylesheet" href="styler.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>

<body style="background-color:  cornflowerblue;">

    <?php
    /*  include('action.php'); */

    include("model/model.php");
    $requete = new ModelUser();
    if (isset($_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['rol'], $_POST['mdp1'])) {
        $requete->inscription($_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['rol'], $_POST['mdp1']);
    }

    ?>

    <div class="container">
        <!-- Partie 1 image -->

        <div class="container   mt-2 sec1 ">

            <img class="d-block w-75 mx-auto img-header" src="image/eleve.jpg" alt="eleve">
        </div>


        <!-- Partie 2 sec2 -->
        <div class="container  sec2">
            <div class="w-50 card mx-auto">


                <form method="post" id="form" action="#" class="form mx-auto" enctype="multipart/form-data">
                    <div class="logo">
                        <img src="image/logo.png" alt="logo" style="width: 8rem;height: 8rem;">
                    </div>
                    <hr class="ligne" style="color: primary;">
                    <h3 class="titre text-center">Formulaire D'inscription</h3>
                    <!-- Formulaire -->
                    <div class="row">
                        <!-- col-1 -->
                        <div class="col-lg-6">
                            <div class="input-control mb-3">
                                <label for="input1" class="form-label">Nom <span style="color: red;">*</span></label>

                                <input type="text" class="form-control p-3 rounded-0" id="nom" name="nom" required>
                                <div class="invalid-feedback d-none" id="champ-reqNom">champs requis</div>

                            </div>
                            <div class="input-control mb-3">
                                <label for="input1" class="form-label">Mail <span style="color: red;">*</span></label>

                                <input type="text" class="form-control p-3 rounded-0" id="mail" name="mail" required>
                                <div class="valid-feedback">Email field is valid!</div>
                                <div class="invalid-feedback d-none" id="champ-reqEmail">champs requis</div>
                                <div class="invalid-feedback d-none" id="email-invalid">email incorrect</div>

                            </div>





                            <div class="mb-3">

                                <div class="input-control mb-3">
                                    <label for="input1" class="form-label">Mot de passe <span style="color: red;">*</span></label>

                                    <input type="password" class="form-control p-3 rounded-0" id="mdp1" name="mdp1" required>
                                    <div class="invalid-feedback d-none" id="champ-reqPass1">champs requis</div>


                                </div>
                            </div>


                            <div class="input-control mb-3">
                                <label for="photo" class="form-label">Photo</label>

                                <input type="file" name="image" id="photo" class="form-control p-3 rounded-0" accept=".jpg,.jpeg,.png" value="">

                            </div>

                        </div>


                        <!-- col-2 -->
                        <div class="col-lg-6">
                            <div class="input-control mb-3">
                                <label for="input1" class="form-label"> Prenom<span style="color: red;">*</span></label>
                                <label for="prenom" class="form-label"></label>
                                <input type="text" class="form-control p-3 rounded-0" id="prenom" name="prenom" required>
                                <div class="invalid-feedback d-none" id="champ-reqPrenom">champs requis</div>

                            </div>


                            <div class="input-control mb-1">
                                <div class="form-group">
                                    <label for="input4" class="form-label">Role<span style="color: red;">*</span></label>
                                    <select class="form-select p-3 rounded-0" id="rol" name="rol" required>

                                        <option>Administrateur</option>
                                        <option>Utilisateur-simple</option>

                                    </select>
                                    <div class="invalid-feedback d-none" id="champ-reqRole">champs requis</div>

                                </div>
                            </div>

                            <div class="input-control mb-3">
                                <label for="input4" class="form-label">Confirmer Mot de passe<span style="color: red;">*</span></label>
                                <input type="password" class="form-control p-3 rounded-0" id="mdp2" name="mdp2" required>
                                <div class="invalid-feedback d-none" id="champ-reqPass2">champs requis</div>
                                <div class="invalid-feedback d-none" id="confirmation">les mots de passe ne correspondent pas</div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <button type="submit" name="submit" id="submit" class="btn btn-primary w-100">S'INSCRIRE</button>
                    </div><br>
                    <p><a href="page-connexion.php" class="text-orange">Se connecter?</a></p>
                </form>
            </div>
        </div><br><br><br><br><br><br><br><br>

        <!--  <div class="card mx-auto" style="width: 40rem;height: 40rem;"> -->

    </div>
    <script src="inscription.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>