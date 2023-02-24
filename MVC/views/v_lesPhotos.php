<?php
include("inc/header.php");

foreach($photos AS $photo){
	echo '<a href="'.router\url("photo", "afficher", [$photo['idPh']]).'"><img class="vignette" src="'.router\web('photos/', $photo['fichierPh']).'" /></a>';
}

include("inc/footer.php");
?>