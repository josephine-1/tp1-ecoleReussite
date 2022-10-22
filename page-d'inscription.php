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
<body>
    <div class="container">
    <!-- Partie 1 image -->

    <div class="container  mt-2 sec1 ">
        
            <img class="d-block w-100 img-header" src="image/eleve.jpg" alt="eleve" >
    </div>


    <!-- Partie 2 sec2 -->
    <div class="container  sec2">
        <div class="w-50 card mx-auto" >
            
           
            <form class="formulaire mx-auto" >
                <div class="logo">
            <img  src="image/logo.png" alt="logo" style="width: 8rem;height: 8rem;"></div>
            <hr class="ligne" style="color: primary;">
            <h3 class="titre text-center">Formulaire D'inscription</h3>
                <!-- Formulaire -->
                <div class="row">
                    <!-- col-1 -->
                <div class="col-lg-6">
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom*</label>
                    <input type="text" class="form-control" id="nom" name="nom">
                    
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email*</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    
               
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mot de passe*</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" >
                </div>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label " >Photo*</label><br>
                             <input
                            id="image"
                            type="image"
                            width="100"
                            height="30"
                            
                            src="" />
                            <i class="fa fa-search"></i>
                </div>
                </div>

                
                        <!-- col-2 -->
                <div class="col-lg-6">
                <div class="mb-3">
                    <label for="prenom" class="form-label">Prénom*</label>
                    <input type="text" class="form-control" id="prenom" name="prenom">
                    
                </div>

 
                <div class="mb-1">
                <div class="form-group">
                    <label for="role">Role*</label>
                    <select class="form-select" id="exampleFormControlSelect1">
                    <option>Aministrateur</option>
                    <option>Utilisateur-simple</option>
                    
                    </select>
                </div>
                </div>
                                
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mot de passe*</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                </div>
                </div>
               <div class="col-lg-12 col-md-12">
                <button type="submit" class="btn btn-primary w-100" >S'INSCRIRE</button></div><br>
                <p><a href="#" class="text-orange">Se connecter?</a>  </p>
                </form>
       </div>
    </div><br><br><br><br><br><br><br><br>

   <!--  <div class="card mx-auto" style="width: 40rem;height: 40rem;"> -->
   
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>