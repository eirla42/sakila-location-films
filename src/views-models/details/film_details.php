<?php
require __DIR__.'/../../models/Film.php';

// READ a film by id
function getFilm(){
    $_SESSION['film'] = Film::getById($_GET['id']);
}
