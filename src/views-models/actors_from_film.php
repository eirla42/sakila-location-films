<?php
require __DIR__.'/../models/Film.php';
require __DIR__.'/../models/Actor.php';



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

// READ all actors who played in a film
function getActorsfromFilm($film_name){
    return Actor::selectActorInFilm($film_name);
}