<?php
    include('../models/animaux.php');
    include('../models/coBDD.php');
    include('../views/viewAdd.php');


    if (
        !empty($_POST['nom'])
        && !empty($_POST['couleur'])
    ){
        $nom = $_POST['nom'];
        $couleur = $_POST['couleur'];
    
        $animaux = new Animaux();
        $animaux->setNom($nom);
        $animaux->setCouleur($couleur);
        $animaux->setIdRace(null);
        $createAnimal = $animaux->createOne();
    }