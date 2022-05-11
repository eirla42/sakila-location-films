<?php

require_once __DIR__ . '/../../../models/Film.php';


// INSERT film
function insertFilm() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $special_features = '';
        for ($i=1; $i<=4; $i++) {
            if(isset($_POST['check'.$i])) {
                if ($special_features === '') {
                    $special_features = $special_features . $_POST['check'.$i];
                } else {
                    $special_features =  $special_features . ',' .$_POST['check'.$i];
                }
            }
        }
        $film = new Film(0, $_POST['title'], $_POST['description'], $_POST['release_year'], $_POST['language_id'], $_POST['original_language_id'], $_POST['rental_duration'],
            $_POST['rental_rate'], $_POST['length'], $_POST['replacement_cost'], $_POST['rating'], $special_features, 0);
        $film->add();

        // Go to page index.php
        header('Location: __DIR__ ./../../../admin/film/list-films.php');
    }
}