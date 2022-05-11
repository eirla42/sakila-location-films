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

// READ all films
function getFilms(){
    return Film::selectAll();
}
