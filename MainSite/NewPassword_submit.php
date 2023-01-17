<head>
	<link rel="stylesheet" type="text/css" href="connexion.css">
</head>

<?php include_once('header.php'); ?>

<div style="text-align: center;">
<h1>Modification du mot de passe</h1>

<form action="NewPassword_submit.php" method="POST">
<label for="NewPassword">Nouveau mot de passe</label><br>
<input type="text" id="NewPassword" name="NewPassword"><br><br>
<input type="submit" value="Modifier le mot de passe"> </form>
</div>
<?php include_once('footer.php') ?>