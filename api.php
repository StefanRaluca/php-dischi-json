<?php
// leggo il contenuto del file json
$json_string = file_get_contents('dischi.json');
//var_dump($json_string);


// decodifico il contenuto in un array assocciativo
$albums = json_decode($json_string, true);
//var_dump($albums);

// invio il contenuto come json

header('Content-Type: application/json');
echo $json_string;
?>