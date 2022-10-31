<?php
class  ModelUser
{
    var $newBD;
    public function __construct()
    {
        try{


            $this->newBD = new PDO("mysql:host=localhost;dbname=mon-tp1", "sosso", "abc");

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function login($email,$motDepasse){
        session_start();
        try {
           $sql= $this->newBD->prepare("SELECT mail,mdp1 FROM user WHERE mail=:mail");
           $sql->execute(["mail"=>$email]);
           $donnee=$sql->fetch();
           if ( $donnee["mail"]==$email && $donnee["mdp1"]==$motDepasse) {

           echo "l'utilisateur exist";
           }else
           echo "l'utilisateur n'exist pas";

        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function inscription($nom,$prenom,$email,$rol,$motDepasse){
        $length = 8;
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        try {
           $sql= $this->newBD->prepare("INSERT into user (matricule,nom,prenom,mail,rol,mdp1,date_Act) 
                                            values(:matricule,:nom,:prenom,:mail,:rol,:mdp1,:date_Act)");
           $sql->execute([
            "matricule"=>$randomString,
            "nom"=>$nom,
            "prenom"=>$prenom,
            "mail"=>$email,
            "rol"=>$rol,
            "mdp1"=>$motDepasse,
            "date_Act"=>date("Y-m-d H:i:s")
           
        ]);
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

}

