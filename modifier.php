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
include("model/model.php");
?>
   <div class="container">
   
    <div class="row">
        <div class="col-lg-12">
            <div class="row m-5 "style="background-color:  cornflowerblue;height:10rem;">
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
                <form class="maForm " action="page-admin.php" method="POST">
            <div class="mb-3 ">
               <!--  <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" style="height: 4rem;" value="<?= $nom?>" >
             -->
             <input class="form-control" placeholder="nom" type="nom" name="nom"  value="<?= $nom?>"  /> 
                
            </div>
            <div class="mb-3">
            <input class="form-control" placeholder="prenom" type="prenom" name="prenom"  value = "prenom" /> 
            </div>
            <div class="mb-3">
            <input class="form-control" placeholder="mail" type="mail" name="mail"  value = "mail" /> 
                 
            </div>
 

  <button type="submit" class="btn btn-danger" name="modifie" >Modifier</button>
</form>
                </div>

            </div>
        
    </div>

   </div>
</body>
</html>