<?php
include("inc/header.php");

echo '<img id="photo" src="'.router\web('photos/', $photo['nomPh']).'" />';
echo ' <a href="'.\router\url("photo","confirmer", [$id]).'"> <i class="fa-solid fa-trash-can"> </a></i>';
echo ' <a href="'.\router\url("photo","modifier", [$id]).'"> <i class="fa-solid fa-pen"></a></i>';

include("inc/footer.php");
?>