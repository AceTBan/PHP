<?php
        require('../models/animaux.php');
        include('../models/coBDD.php');
        include ('../views/viewOneElem.php');

        $animaux = new Animaux();
        
        if (isset($_POST['nom'])){
            $animaux->setNom($_POST['nom']);
            $unAnimal = $animaux->readSingle();
            $data = $unAnimal->fetch();
            if ($data['nom']){
                echo 'Voici '. $data['nom'].' qui est un/une '. $data['id_race']. ' de couleur '. $data['couleur']; 
            }else if(empty($_POST['nom'])){
                echo '<p>Veuillez remplir le champ svp!</p>';
            }else{
                echo "<p>Non existant dans la BDD!</p>";
            }
        }else {
            echo "<p>Saissisez un nom svp</p>";
        }