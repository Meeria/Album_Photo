<?php
 include("inc/header.php");
?>


<h1>INSCRIPTION</h1>

<form  action="<?= \router\url("user","register") ?>" method="POST">
<label for="login" required>login</label>
<input type="text" name="login" required> <br>
<label for="password" required>Mot de passe</label>
<input type="password" name="password" required><br>
<label for="confirmpassword" required>Confirmation</label>
<input type="password" name="confirmpassword" required><br>
<input type="submit" value="s'inscrire">
</form> 

<?php


?>



<?php include("inc/footer.php"); ?>