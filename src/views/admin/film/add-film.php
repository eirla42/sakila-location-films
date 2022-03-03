<?php
require_once '../../header.php';
require __DIR__ .'/../../../db/db-connect.php';
require __DIR__ . '/../../../views-models/home.php';

?>
    <h1>Ajouter un film</h1>

    <form>
        <div class="mb-3 row">
            <div class="col-md-8">
                <label for="title" class="form-label">Titre</label>
                <input type="text" class="form-control" id="title">
            </div>

            <div class="col-md-4">
                <label for="release_year" class="form-label">Année de sortie</label>
                <input type="number" class="form-control" id="release_year">
            </div>
        </div>

        <div class="mb-3 row">
            <div class="col-md-12">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description"></textarea>
            </div>
        </div>

        <div class="mb-3 row">
            <div class="col-md-4">
                <select class="form-select" aria-label="language_id">
                    <option selected>Selectionner une langue</option>
                    <option value="1">Anglais</option>
                    <option value="2">Italien</option>
                    <option value="3">Japonnais</option>
                </select>
            </div>

            <div class="col-md-4">
                <select class="form-select" aria-label="original_language_id">
                    <option selected>Selectionner une langue d'origine</option>
                    <option value="1">Anglais</option>
                    <option value="2">Italien</option>
                    <option value="3">Japonnais</option>
                </select>
            </div>

            <div class="col-md-4">
                <select class="form-select" aria-label="rating">
                    <option selected>Selectionner un public</option>
                    <option value="G">Audiences générales</option>
                    <option value="PG">Surveillance parentale suggérée</option>
                    <option value="PG-13">Parents fortement mis en garde</option>
                    <option value="R">Restreint</option>
                    <option value="PG-17">Personne de 17 ans et moins n'est admis</option>
                </select>
            </div>
        </div>

        <div class="mb-3 row">
            <div class="col-md-4">
                <label for="rental_duration" class="form-label">Durée de location (en jours)</label>
                <input type="number" class="form-control" id="rental_duration">
            </div>

            <div class="col-md-4">
                <label for="rental_rate" class="form-label">Prix de location</label>
                <input type="number" class="form-control" id="rental_rate">
            </div>

            <div class="col-md-4">
                <label for="replacement_cost" class="form-label">Prix de la caution</label>
                <input type="number" class="form-control" id="replacement_cost">
            </div>
        </div>

        <div class="mb-3 row">
            <div class="col-md-4">
                Contenu additionnel:
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Trailers" id="Check1">
                    <label class="form-check-label" for="Check1">Bande d'annonce</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Deleted Scenes" id="Check2">
                    <label class="form-check-label" for="Check2">Scènes supprimées</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Behind the Scenes" id="Check3">
                    <label class="form-check-label" for="Check2">Coulisses du film</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Commentaries" id="Check4">
                    <label class="form-check-label" for="Check2">Commentaires</label>
                </div>
            </div>

            <div class="col-md-4">
                <label for="length" class="form-label">Durée du film (en minutes)</label>
                <input type="number" class="form-control" id="length">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>

<?php require_once '../../footer.php'; ?>