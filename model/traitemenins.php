  <?php ini_set("display_errors", "1");
error_reporting(E_ALL & ~E_DEPRECATED);
  if (isset($_POST['submit'])){ 


    @$nom=$_POST["nom"];
        @$prenom=$_POST["prenom"];
        @$mail=$_POST["mail"];
        @$mdp1=$_POST["mdp1"];
        @$rol=$_POST["rol"];
      
        
         var_dump($nom);
        die;       
         
@$Photo=file_get_contents($_FILES['image']['tmp_name']);


$matricule = date('  his-- A', time()).'-GZL';
$message="";


try{
    $pdo=new PDO("mysql:host=localhost;dbname=mon-tp1","sosso","abc");
}
catch(PDOException $e){
    echo $e->getMessage();
}
        $req=$pdo->prepare("select id from user where mail=? limit 1");
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $req->execute(array($mail));
        $tab=$req->fetchAll();

        /*  var_dump(count($tab)>0); */
       /*  die;   */
        if(count($tab)>0){

           /*  header("location:../page-connexion.php"); */

        }

        else{


            if(@$Role== $verif1){$ins=$pdo->prepare("insert into user(matricule,nom,prenom,mail,rol,mdp1,etat,date_Act,dat-mod,dat-arch,role_etat,photo) values(?,?,?,?,?,?,?,now(),now(),now(),0,?)");
             $ins->bindParam(1, $matricule);
             $ins->bindParam(2, $nom);
             $ins->bindParam(3, $prenom);
             $ins->bindParam(4, $mail);
             $ins->bindParam(5, md5($mdp1));
             $ins->bindParam(6, $photo);
             $ins->bindParam(7, $rol);
             $ins->execute();
        
                header("location:../page-inscription.php");

        
            }}
        }


