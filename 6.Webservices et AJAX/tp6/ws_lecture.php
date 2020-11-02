<?php

include "./lib.php";

$messages = lire_messages_json();
http_response_code(200); // ok

//on renvoie les données au format JSON

echo $messages;

?>