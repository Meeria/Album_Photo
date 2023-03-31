<?php include("inc/header.php"); ?>


<form  action="<?= \router\url("photo","changer", [$idPh]) ?>" method="post">

<?php 
foreach($albums AS $album){
    $check = "";
    foreach($comporter as $albumPhoto){
        if ($album['idAlb'] == $albumPhoto['idAlb']){
            $check = ' checked ';
        }
    }

    echo '<input type="checkbox" '.$check.'name="albums[]" value="'.$album['idAlb'].'"> <label for="'.$album['nomAlb'].'"> '.$album['nomAlb'].'</label>';
}
?>

<input type="submit" value="ajouter">
</form>

    

<?php include("inc/footer.php"); ?>