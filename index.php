<?php

// Dobbiamo creare una web-app che permetta di leggere una lista di dischi presente nel nostro server.

// I dischi dovranno avere questa struttura: titolo, artista, url della cover, anno di pubblicazione, genere

// Consigli
// Nello svolgere l’esercizio seguite un approccio graduale.
// Prima assicuratevi che la vostra pagina index.php (riesca a comunicare correttamente con il vostro script PHP)
// Solo a questo punto sarà utile passare alla lettura della lista da un file JSON.
// Bonus
// Tramite un form, dai la possibilità all’utente di aggiungere un disco dall’elenco.


?>

<?php

require_once "./server.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- importo bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Lista Dischi</title>
</head>

<body>

    <h1 class="text-center">Albums</h1>
    <hr>

    <div class="container">
        <div class="row">
            <?php
            foreach ($albums as $album) {
                echo '<div class="col-12 col-sm-6 col-md-4 mb-4">';
                echo '<div class="card" style="width: 100%;">';
                echo '<img src="' . $album['cover_url'] . '" class="card-img-top" alt="' . $album['title'] . '">';
                echo '<div class="card-body text-center">';
                echo '<h6 class="card-title">' . $album['title'] . '</h6>';
                echo '<h6 class="card-subtitle mb-2 text-muted">' . $album['artist'] . '</h6>';
                echo '<p class="card-text">' . $album['release_year'] . '</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>


        <form action="./server.php" method="POST" class="p-4 mb-4 border rounded bg-light">
            <div class="row mb-3">
                <div class="col-md-6 mb-2">
                    <input type="text" class="form-control" name="title" placeholder="Titolo" required>
                </div>
                <div class="col-md-6 mb-2">
                    <input type="text" class="form-control" name="artist" placeholder="Artista" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 mb-2">
                    <input type="text" class="form-control" name="cover_url" placeholder="URL Copertina" required>
                </div>
                <div class="col-md-3 mb-2">
                    <input type="number" class="form-control" name="release_year" placeholder="Anno di uscita" required>
                </div>
                <div class="col-md-3 mb-2">
                    <input type="text" class="form-control" name="genre" placeholder="Genere" required>
                </div>
            </div>

            <div class="text-end">
                <button type="submit" class="btn btn-primary">Aggiungi</button>
            </div>
        </form>

    </div>

</body>

</html>