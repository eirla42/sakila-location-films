<?php
require_once __DIR__.'/../models/Film.php';


// RENDER films
function renderFilms(){
    // Pagination
    if (isset($_GET['page']) && !empty($_GET['page'])) {
        $_SESSION['currentPage'] = (int) strip_tags($_GET['page']);
    } else {
        $_SESSION['currentPage'] = 1;
    }

    // Render
    foreach (getFilms() as $film) {
        echo
            '<tr class=`table-row`>
                <td>' . $film->getFilmId() . '</td>
                <td>' . $film->getTitle() . '</td>
                <td>' . $film->getDescription() . '</td>
            </tr>';
    }
}

function renderFilmsLastTen(){
    // Render
    foreach (getLastFilms() as $film) {
        echo
            '<tr class=`table-row-10`>
                <td>' . $film->getTitle() . '</td>
                <td>' . $film->getDescription() . '</td>
                <td>' . $film->getReleaseYear() . '</td>
            </tr>';
    }
}

// READ all films
function getFilms(){
    return Film::selectAll();
}

// READ all films
function getLastFilms(){
    return Film::selectLastFilm(10);
}
