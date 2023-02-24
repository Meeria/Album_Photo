<?php
include("inc/header.php");
?>

<nav> 
<?php
foreach($albums AS $album){
    echo '<a href="'.\router\url("album","afficher", [$album['idAlb']]).'">'.$album['nomAlb'].'</a>';
}
?>
</nav>

<main>
<?php
foreach($photos AS $photo){
    echo '<img src="'.\router\web("photos/", $photo['nomPh']).'" />';
}
?>
</main>

<?php
include("inc/footer.php");
?>