<?php
try{
 
    
    $newBD=new PDO("mysql:host=localhost;dbname=mon-tp1","sosso","abc");

  /*    echo "connexion-etablie"; */
}catch(PDOException $e){
    echo $e->getMessage();
}
/* verification des données */
if(

     isset($_POST['rol'])&& 
    isset($_POST['nom'])&&
    isset($_POST['prenom'])&&
    isset($_POST['mail'])&&
  
    isset($_POST['mdp1'])&& 
    isset($_POST['mdp2'])/* &&
    isset($_POST['photo'])  */
    
    ){ /*  var_dump($_POST); */




      /* code matricule */
     
        $length = 8;
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
       /*  var_dump($randomString); */
  /*   } */
     
      

        $ins=$newBD->prepare("insert into user (matricule,nom,prenom,mail,rol,mdp1,mdp2,date) values(?,?,?,?,?,?,?,now())");
				$ins->execute(array($randomString,$_POST['nom'],$_POST['prenom'],$_POST['mail'],$_POST['rol'],$_POST['mdp1']=md5($_POST['mdp1']),$_POST['mdp2']=md5($_POST['mdp2'])/* ,$_POST['photo'] */));


        
       
        
    


} 





   


 /* --------------Connexion---------- */

?>



    