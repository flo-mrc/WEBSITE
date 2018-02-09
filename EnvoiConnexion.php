        
    </div>
    <h1>Bienvenue
        <?php echo "$pseudo"; ?>
    </h1>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">



    <?php




$bdd = new PDO('mysql:host=localhost;dbname=flo;charset=utf8', 'root', '');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );


$req = $bdd->prepare('INSERT INTO utilisateur (nom, prenom, couriel,identifiant, motdepasse) VALUES(?,?,?,?,?)');
$req->execute(array($_POST['nom'], $_POST['prenom'], $_POST['couriel'], $_POST['identifiant'], $_POST['motdepasse']));


echo 'Information bien enregistré!';


?>
