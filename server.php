<?php

// leggo il file degli album
$json_text = file_get_contents("./albums.json");

// echo $json_text;

// coverto la stringa da json a struttura dati php
$albums = json_decode($json_text, true);

// var_dump($albums);
