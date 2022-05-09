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
                <td>' . $actor->getLastName() . '</td>
                <td>' . $actor->getFirstName() . '</td>
            </tr>';
    }
}

// RENDER actors
function renderActorsFromFilm($film_name){
    foreach (getActorsfromFilm($film_name) as $actor) {
        echo
            '<tr class=`table-row`>
                <td>' . $actor->getLastName() . '</td>
                <td>' . $actor->getFirstName() . '</td>
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

// READ all actors who play in a film
function getActorsfromFilm($film_name){
    return Actor::selectActorInFilm($film_name);
}