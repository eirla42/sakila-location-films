<?php
require_once __DIR__.'/../models/Film.php';
require_once __DIR__.'/../models/Actor.php';


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


// READ all actors
function getActors(){
    return Actor::selectAll();
}
