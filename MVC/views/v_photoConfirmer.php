<?php include("inc/header.php"); ?>


<a href="<?= \router\url("album","afficher", [$id]) ?>" > no </a>
<a href="<?= \router\url("photo","supprimer", [$id]) ?>" > yes </a>

    

<?php include("inc/footer.php"); ?>