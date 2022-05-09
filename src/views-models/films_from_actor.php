<?php
require __DIR__.'/../models/Film.php';
require __DIR__.'/../models/Actor.php';


// RENDER films
function renderFilmsFromActor($actor_lname, $actor_fname){
    foreach (getFilmsFromActor($actor_lname, $actor_fname) as $film) {
        echo
            '<tr class=`table-row`>
                <td>' . $film->getTitle() . '</td>
                <td>' . $film->getDescription() . '</td>
            </tr>';
    }
}

// READ all actors who play in a film
function getFilmsFromActor($actor_lname, $actor_fname){
    return Film::selectFilmFromActor($actor_lname, $actor_fname);
}