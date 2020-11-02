<?php
include "./lib.php";

if (! empty($_REQUEST["message"])) {
    $message = $_REQUEST["message"];
    ajouter_message($message);
    http_response_code(201);//crée
} else{
    http_response_code(400);
    echo(erreur);
}

?>
