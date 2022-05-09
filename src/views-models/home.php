<?php
require __DIR__.'/../models/Film.php';
require __DIR__.'/../models/Actor.php';


// RENDER films
function renderFilms(){
    foreach (getFilms() as $film) {
        echo
            '<tr class=`table-row`>
                <td>' . $film->getFilmId() . '</td>
                <td>' . $film->getTitle() . '</td>
                <td>' . $film->getDescription() . '</td>
            </tr>';
    }
}

// READ all films
function getFilms(){
    return Film::selectAll();
}
