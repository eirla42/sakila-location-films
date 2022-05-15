<?php
require_once __DIR__.'/../models/Film.php';


// RENDER films
function rechercheFilms(){
    // Pagination
    if (isset($_GET['page']) && !empty($_GET['page'])) {
        $_SESSION['currentPage'] = (int) strip_tags($_GET['page']);
    } else {
        $_SESSION['currentPage'] = 1;
    }

    if (isset($_GET['s']) AND !empty($_GET['s']))
    {

        $recherche = htmlspecialchars($_GET['s']); //pour sécuriser le formulaire contre les intrusions html
        $recherche = strip_tags($recherche); //pour supprimer les balises html dans la requête

    }

    // Render
    foreach (rechercheResults($recherche) as $film) {
        echo
            '<tr class=`table-row`>
                <td>' . $film->getTitle() . '</td>
                <td>' . $film->getDescription() . '</td>
                <td>' . $film->getReleaseYear() . '</td>
            </tr>';
    }
}

// READ all films
function rechercheResults($recherche){
    return Film::selectRecherche($recherche);
}





