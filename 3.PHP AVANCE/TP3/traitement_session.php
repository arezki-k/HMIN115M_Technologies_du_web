<?php
    session_start();
    // var_dump($_REQUEST);

    // Récupération des variables envoyées par le formulaire.
    // $_REQUEST permet de récupérer les variables envoyées par la méthode GET ou
    // la méthode POST, sans avoir à changer le code.
    $titre = $_REQUEST["titre"];
    $cuisine = $_REQUEST["cuisine"];
    $recette = $_REQUEST["recette"];
    $adresse = $_REQUEST["adresse"];

    // Si l'emplacement en session 'nexiste pas, on le crée
    if (! isset($_SESSION["mes_recettes"])) {
        $_SESSION["mes_recettes"] = [];
    }

    // On ajoute les informations reçues du formulaire, à la
    // liste des informations conservées

    // A. version simple : on ne stocke que le titre
    // array_push($_SESSION["mes_recettes"], $titre);

    // B. version moins simple : on stocke plusieurs variables dans un tableau
    array_push($_SESSION["mes_recettes"], [
        "titre" => $titre,
        "type_cuisine" => $cuisine,
        "adresse_auteur" => $adresse,
        "instructions_recette" => $recette
    ]);

    // Affichage des recettes
    echo "<ol>";
    foreach ($_SESSION["mes_recettes"] as $rec) {
        // A. version simple : titre uniquement
        // echo "<li>" . $rec . "</li>";

        // B. version à plusieurs variables
  
        echo "<h1>" . $rec["titre"] . "</h1>";
    echo "Recette de cuisine <strong>" . $rec["cuisine"] . "</strong> proposée par " . $rec["adresse"] . " (date: " . $rec["date"] . ")";

    echo "<h2>Informations</h2>";
    echo "<p>Type: " . $rec["type"] . "</p>";
    echo "<p>Difficulté: " . $difficulte_texte[$difficulte - 1] . "</p>";
    echo "<p>Temps de préparation: " . $temps . "</p>";

    echo "<h2>Allergènes</h2>";
    echo "<ul>";
    foreach ($allergenes as $a) {
        echo "<li>" . $a . "</li>";
    }
    echo "</ul>";

    echo "<h2>Instructions</h2>";
    echo $recette;

    echo "<h2>Illustrations</h2>";
    echo '<img src="' . $photo . '">';
    echo "<br>";
    // Si le fichier image a bien été reçu
    if ($nomFichierUploade !== null) {
        echo '<img src="' . $nomFichierUploade . '">';
    }
    }
    echo "</ol>";
    file_put_contents("./data.json",json_encode);
    session_destroy();
?>
