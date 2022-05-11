<?php
require_once __DIR__.'/../../models/Actor.php';

// READ an actor by id
function getActor(){
    $_SESSION['actor'] = Actor::getById($_GET['id']);
}
