<?php include("inc/header.php"); ?>


<form  action="<?= \router\url("album","editer") ?>" method="post">
<label for="name"> Nom de album:</label>
<input type="text" name="nomAlb" required>
<input type="submit" value="ajouter">
</form>

    

<?php include("inc/footer.php"); ?>