<?php
require_once '../header.php';
require_once __DIR__ . '/../../views-models/details/actor_details.php';
require_once '../../db/db-connect.php';

getActor();
?>
<h2 class="mb-5">Fiche acteur</h2>

<div class="border rounded d-flex flex-nowrap">
    <div class="left">
        <img src="../../assets/images/image-unavailable.jpg" alt="Image Unavailable">
    </div>

    <div class="text-left">
        <div class="d-flex flex-row mb-5">
            <h5><?= $_SESSION['actor']['first_name'] . ' ' . $_SESSION['actor']['last_name'] ?></h5>
        </div>

        <div class="d-flex flex-row mb-3">
            Films :
            <?php foreach ($_SESSION['actor']['films'] as $film) {
                echo $film->getTitle() . '. ';
            }?>
        </div>

    </div>
</div>

<?php require_once '../footer.php';?>
