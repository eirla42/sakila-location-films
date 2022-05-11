<?php
require_once 'header.php';
require_once __DIR__ . '/../views-models/actors.php';
require_once '../db/db-connect.php';

?>
<h1>Liste des acteurs</h1>

<table class="table table-bordered table-condensed">
    <thead>
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
    </tr>
    </thead>
    <tbody>
    <?php renderActors(); ?>
    </tbody>
</table>

<script type="text/javascript">
    function goToActorDetails(id) {
        window.location.assign(`./details/actor_details.php?id=${id}`);
    }
</script>

<?php require_once 'footer.php'; ?>
