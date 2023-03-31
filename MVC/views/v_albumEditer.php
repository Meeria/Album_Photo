<?php include("inc/header.php"); ?>


<form  action="<?= $action; ?>" method="post">
<label for="name"> Nom de album:</label>
<input type="text" name="nomAlb" value="<?= $nomAlb; ?>" required>
<input type="submit" value="<?= $btn; ?>">
</form>

    

<?php include("inc/footer.php"); ?>