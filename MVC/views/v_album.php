<?php
include("inc/header.php");
?>

<nav> 
    <?php
    foreach($albums AS $album){
        $idt= $album['idAlb']==$idAlb ? ' id="actif" ' : '';
        echo '<a '.$idt.' href="'.\router\url("album","afficher", [$album['idAlb']]).'">'.$album['nomAlb'].'</a>';
    }
    ?>
    <div class="outils">
        <?php
        if (\models\user\isAdmin()){
            echo ' <a href="'.\router\url("album","editer").'"> <i class="fa-solid fa-plus"> </a></i>';
            echo ' <a href="'.\router\url("album","confirmer", [$idAlb]).'"> <i class="fa-solid fa-trash-can"> </a></i>';
            echo ' <a href="'.\router\url("album","editer", [$idAlb]).'"> <i class="fa-solid fa-pen"></a></i>';
         }
        
        echo ' <a href="'.\router\url("user","login").'"> <i class="fa-solid fa-user"></i>';

        if (isset($_SESSION['login'])){
            echo ' <a href="'.\router\url("user","disconnect").'"> <i class="fa-solid fa-person-walking-arrow-right"></i>';
        }

        ?>
    </div>

</nav>

<main>
<?php
foreach($photos AS $photo){
    echo '<a href="'.\router\url("photo","afficher", [$photo['idPh']]).'"><img src="'.\router\web("photos/", $photo['nomPh']).'" /></a>';
}
echo ' <a href="'.\router\url("photo","ajouter", [$idAlb]).'"> <i class="fa-solid fa-plus"> </a></i>';
?>
</main>

<?php
include("inc/footer.php");
?>