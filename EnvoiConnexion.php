<!DOCTYPE html>
<html>

<head>
    <div>
        <?php
                        try
                        {
                            // On se connecte à MySQL
                                $bdd = new PDO('mysql:host=127.0.0.1;dbname=flo;charset=utf8', 'root', '');
                                $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        }
                                catch(Exception $e)
                                {
                                    die('Erreur : '.$e->getMessage());
                                }
                                
                                if(isset($_POST['identifiant']) OR isset($_POST['motdepasse'])) 
                                {
                                    die('Erreur : Les champs doivent être renseigné');
                                } 
                                
                                
       $user = $_POST['identifiant'];   // Memorisation des informations
       $pwd = $_POST['motdepasse'];
       
       $stmt = $bdd->prepare('SELECT identifiant, motdepasse FROM utilisateur WHERE identifiant = ? and motdepasse =?');
       $stmt->execute(array($user, $pwd));
       $utilisateur = $stmt->fetch();
       if($utilisateur){
           $_SESSION['prenom'] = $utilisateur['identifiant'];
          
          header('Location: ./Accueil.html');
       }
       ?>

