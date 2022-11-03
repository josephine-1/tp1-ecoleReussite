<?php
class  ModelUser
{
    var $newBD;
    public function __construct()
    {
        try {


            $this->newBD = new PDO("mysql:host=localhost;dbname=mon-tp1", "sosso", "abc");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    

    public function login($email, $motDepasse)
    {
        session_start();
        try {
            $sql = $this->newBD->prepare("SELECT id,mail,mdp1,rol,nom,prenom,matricule,etat FROM user ");
            $sql->execute(["mail" => $email]);

            //    var_dump($donnee);die;
            while ($donnee = $sql->fetch()) {
                if ($donnee["mail"] == $email && $donnee["mdp1"] == $motDepasse && $donnee["etat"] == 0) {
                    $_SESSION["id"] = $donnee["id"];
                    $_SESSION["matricule"] = $donnee["matricule"];
                    $_SESSION["nom"] = $donnee["nom"];
                    $_SESSION["prenom"] = $donnee["prenom"];
                    $_SESSION["mail"] = $donnee["mail"];
                    $_SESSION["rol"] = $donnee["rol"];
                    $_SESSION["mdp1"] = $donnee["mdp1"];
                    $_SESSION["etat"] = $donnee["etat"];
                    $_SESSION["date_Act"] = $donnee["date_Act"];

                    if ($donnee["rol"] == "Administrateur") {
                        header("location:page-admin.php");
                    } else
                        header("location:page-userSimple.php");
                } else
                    echo "l'utilisateur n'exist pas";
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function inscription($nom, $prenom, $email, $rol, $motDepasse)
    {
        $length = 8;
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        try {
            $sql = $this->newBD->prepare("INSERT into user (matricule,nom,prenom,mail,rol,mdp1,date_Act) 
                                            values(:matricule,:nom,:prenom,:mail,:rol,:mdp1,:date_Act)");
            $sql->execute([
                "matricule" => $randomString,
                "nom" => $nom,
                "prenom" => $prenom,
                "mail" => $email,
                "rol" => $rol,
                "mdp1" => $motDepasse,
                "date_Act" => date("Y-m-d H:i:s")

            ]);


            /* pour l'affichage */

           
            /*   $donnee=$sql->fetch();
           if ( $donnee["mail"]==$email && $donnee["mdp1"]==$motDepasse) {
           echo "l'utilisateur exist";
           }else
           echo "l'utilisateur n'exist pas";
 */
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    /* fonction affichage */
    public function affichage ($nom, $prenom, $email, $rol, $motDepasse){

        
        $requete = "SELECT * FROM  user ORDER BY id ASC";
        $result =  $this->newBD->query($requete);
        if (!$result){
            echo "La recupération des données a rencontré un probléme!";
        }
        else{
            $nbr_user = $result->rowCount();
        }


        while ($ligne = $result->fetch(PDO::FETCH_NUM)) {
            echo "<tr>";
            foreach ($ligne as $valeur){
                echo "<td>$valeur</td>";
            }
                echo "</tr>";
            }
            $result->closeCursor();
        
    }
    
    /* pour supprimer */
  /* function delateUser($delaitematricule){
    $.ajax(
        {
            url:"delate.php";
            type:'post',
            data:{
                deletesend:$delaitematricule;
            }
            success:function
        }
    )

  } */
  /* pour modifier */
/*   public function modifie ($nom, $prenom, $email, $rol, $motDepasse){
    
    $id=$_GET['id'];
$req=$this->newBD->prepare("SELECT * FROM user WHERE id=?");
$req->execute([$id]);
$req_user=$req->fetch();



  }
  */

}