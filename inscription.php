
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
                             if (isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['couriel']) AND isset($_POST['identifiant']) AND isset($_POST['motdepasse']))
                                {
                                    
                                    $nom=$_POST['nom'];    
                                    $prenom = $_POST['prenom'];
                                    $couriel = $_POST['couriel'];
                                    $identifiant = $_POST['identifiant'];
                                    $motdepasse = $_POST['motdepasse'];                                  
                                    $req = $bdd->prepare('INSERT INTO utilisateur (nom,prenom,couriel,identifiant,motdepasse) VALUES(:nom, :prenom, :couriel, :identifiant, :motdepasse)');
                                    
                                    $req->execute(array(
                                            ':nom'=>$nom,
                                            ':prenom' => $prenom,
                                            ':couriel' => $couriel,
                                            ':identifiant' => $identifiant,
                                            ':motdepasse' => $motdepasse));
                                    
                            
                            } 
                                else {echo "erreur";}
                        }
                    
                        catch(Exception $e)
                        {
                            // En cas d'erreur, on affiche un message et on arrête tout
                            die('Erreur : '.$e->getMessage());
                        }
        ?>

</head>
</div>
    <h1 class="tlt">CameraWorld</h1>
        <h3 class="tlt2">Bouger mais rester connecté</h3>

    <h3>Bienvenue
        <?php echo "$identifiant"; ?>
    </h3>
    <p>Vous aller être redigez dans 5 secondes sur notre sites</p>
    <link rel="stylesheet" href="CSS/Global.css">
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="5; URL=Accueil.html">

</html>