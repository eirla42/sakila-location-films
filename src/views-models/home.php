<?php
require __DIR__.'/../models/Film.php';

// RENDER films
function renderFilms(): void {
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
function getFilms() : array {
    return Film::selectAll();
}