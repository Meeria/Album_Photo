<?php include("inc/header.php"); ?>

<form action="<?= \router\url("photo","inserer", [$idAlb]) ?>" method="post" enctype="multipart/form-data">
    <label for="newPhoto">Choose a picture:</label>

    <input type="file" name="photo">
        <input type="submit" value="ajouter">
</form>

    
<?php include("inc/footer.php"); ?>