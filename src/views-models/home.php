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

// RENDER actors
function renderActors(){
    foreach (getActors() as $actor) {
        echo
            '<tr class=`table-row`>
                <td>' . $actor->getActorId() . '</td>
                <td>' . $actor->getFirstName() . '</td>
                <td>' . $actor->getLastName() . '</td>
            </tr>';
    }
}

// READ all films
function getFilms(){
    return Film::selectAll();
}
// READ all actors
function getActors(){
    return Actor::selectAll();
}