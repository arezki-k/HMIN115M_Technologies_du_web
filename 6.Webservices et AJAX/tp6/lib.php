<?php

// ajoute un message texte à la base de données
function ajouter_message($message) {
    $data = json_decode(file_get_contents("./data.json"), true);
    $nouveau_message = [
        "date" => date("H:i:s"),
        "texte" => $message
    ];
    array_push($data, $nouveau_message);
    file_put_contents("./data.json", json_encode($data));
}

// lit les messages de la base de données, et les retourne au format JSON
function lire_messages_json() {
    $data = file_get_contents("./data.json");
    return $data;
}

// lit les messages de la base de données, et les retourne au format liste PHP
function lire_messages_liste() {
    $messages_en_json = lire_messages_json();
    $messages_decodes = json_decode($messages_en_json, true);
    return $messages_decodes;
}

?>