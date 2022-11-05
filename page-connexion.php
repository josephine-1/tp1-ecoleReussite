<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connect</title>
    <link rel="stylesheet" href="styler.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>

<body style="background-color:  cornflowerblue;">


    <?php

    /*  include('action.php'); */

     include("model/model.php"); 
    $requete = new ModelUser();
    if (isset($_POST['mail'], $_POST['mdp'])) {
        $requete->login($_POST['mail'], md5($_POST['mdp']));
       
    }
    ?>



    <div class="container">
        <!-- Partie 1 image -->

        <div class="container  mt-2 sec1 ">
            <img class="d-block w-75 mx-auto img-header" src="image/eleve.jpg" alt="eleve">
        </div>


        <!-- Partie 2 sec2 -->
        <div class="container  sec2">
            <div class="w-50 card mx-auto">


                <form action="page-connexion.php" method="POST" id="myForm" class="formulaire mx-auto">
                    <div class="logo">
                        <img src="image/logo.png" alt="logo" style="width: 8rem;height: 8rem;">
                    </div>
                    <hr class="ligne" style="color: primary;">
                    <h3 class="titre text-center">Formulaire De connexion</h3>
                    <!-- Formulaire -->

                    <div class="mb-3">
                        <label for="input1" class="form-label">Mail <span style="color: red;">*</span></label>

                        <input type="mail" class="form-control" id="mail" name="mail">

                    </div>
                    <div class="mb-3">
                        <label for="md1" class="form-label">Mot de passe <span style="color: red;">*</span></label>


                        <input type="password" class="form-control" id="mdp" name="mdp">
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <button type="submit" name="valider" class="btn btn-primary w-100" id="btn">SE CONNECTER</button>
                    </div><br>
                    <p><a href="page-inscription.php" class="text-orange">S'inscrire?</a> </p>
                    <span id="error"></span>
                </form>
            </div>
        </div><br><br><br><br><br><br><br><br>

        <!--  <div class="card mx-auto" style="width: 40rem;height: 40rem;"> -->

    </div>
    <script src="tp1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>