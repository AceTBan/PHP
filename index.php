<!-- Pour afficher les données de notre fonction contenant notre requête SQL: -->
$data = requete_findUser($_GET['pseudo']);
echo "<p>Bonjour " . $data[0]->pseudo . "</p>";
<!-- Correction du code pour afficher l'utilisateur qu'on cherche en base de données via le pseudo envoyer grace au formulaire :
la partie PDO: -->
<?php

function connexion_BD()
{
    try 
    {
        $db = new PDO("mysql:host=localhost;dbname=grec;charset=utf8", "root", "");
        return $db;
    } 
    catch (Exception $e) 
    {
        die($e->getMessage());
    }
}
// la fonction pour la requête SQL:
function requete_findUser($pseudo) {
    $db = connexion_BD();
    $sql = "SELECT * FROM user WHERE pseudo = :pseudo";
    $req = $db->prepare($sql);
    $req->execute([
        ":pseudo"=>$pseudo
    ]);
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data;
}
// On inclut, dabs notre index.php, les pages ou se trouvent ces deux fonctions:
include "pdo.php";
include "requete.php";
// et on gère l'affichage sous notre formulaire:
    <?php
    if (isset($_GET['pseudo'])) {
        $data = requete_findUser($_GET['pseudo']);
        if ($data) {
            var_dump($data);
            echo "<p>Bonjour " . ucfirst($data[0]->pseudo) . ", vous êtes l'id numéro : " . $data[0]->id_user . "</p>";
        } else if (empty($_GET['pseudo'])){
            echo "<p>Veuillez remplir le champ !</p>";
        } else {
            echo "<p>Tu vois bien que je ne suis pas dans la liste !</p>";
        }
    } else {
        echo "<p>Il y a quelqu'un ?</p>";
    }
    ?>
// Et pensez bien à mettre l'attribut "name" dans votre formulaire ! ( sur l'input correspondant ) 
<form action="#" method="GET">
<label for="pseudo">Entrez un nom :</label>
<input type="text" id="pseudo" name="pseudo">
<button class="btn btn-primary">ENVOYER</button>
</form>
// exemple d'une requete sql avec un paramètre nommé
$sql = "SELECT * FROM article WHERE title = :title";
