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
            <div class="col-md-6">
                <select class="form-select" aria-label="Langue">
                    <option selected>Selectionner une langue</option>
                    <option value="1">Anglais</option>
                    <option value="2">Italien</option>
                    <option value="3">Japonnais</option>
                </select>
            </div>

            <div class="col-md-6">
                <select class="form-select" aria-label="Langue">
                    <option selected>Selectionner une langue d'origine</option>
                    <option value="1">Anglais</option>
                    <option value="2">Italien</option>
                    <option value="3">Japonnais</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

<?php require_once '../../footer.php'; ?>