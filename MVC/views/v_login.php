<?php
 include("inc/header.php");
?>

<h1>CONNEXION</h1>

<form  action="<?= \router\url("user","session") ?>" method="POST">
<label for="login" required>login</label>
<input type="text" name="login" required> <br>
<label for="password" required>Mot de passe</label>
<input type="password" name="password" required><br>
<input type="submit" value="connexion">
</form> 

<?php 
if (isset($_SESSION['login']))
   echo $_SESSION['login'];
?>

<form  action="<?= \router\url("user","disconnect") ?>" method="POST">
<input type="submit" value="Deconnexion">
</form> 

<form  action="<?= \router\url("user","vRegister") ?>" method="POST">
<input type="submit" value="S'inscrire">
</form> 



<?php include("inc/footer.php"); ?>