<?php

// leggo il file degli album
$json_text = file_get_contents("./albums.json");

// echo $json_text;

// coverto la stringa da json a struttura dati php
$albums = json_decode($json_text, true);

// modifico la struttura dati
// inserisco il nuovo album nel file
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $newAlbum = [
        "title" => $_POST["title"],
        "artist" => $_POST["artist"],
        "cover_url" => $_POST["cover_url"],
        "release_year" => $_POST["release_year"],
        "genre" => $_POST["genre"]
    ];

    $albums[] = $newAlbum;

    // riconverto la struttura dati php in stringa json
    $json_text_updated = json_encode($albums);

    // sovrascrivo il contenuto del file json
    file_put_contents("./albums.json", $json_text_updated);

    // reindirizzo l'utente alla index
    header("Location: ./index.php");
}
