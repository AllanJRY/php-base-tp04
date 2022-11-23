<?php
$page = 'Contact';
?>


<?php include './header.php'; ?>
	<?php include './menu.php'; ?>

	<p>
		Nous sommes ouvert de 8h <br>
		à 12h et de 14h à 18h du <br>
		lundi au vendredi
	</p>

	<table border cellpadding="5" cellspacing="0">
		<tr>
			<td>Téléphone</td>
			<td>0470257814</td>
		</tr>
		<tr>
			<td>Mail</td>
			<td>coif@gmail.com</td>
		</tr>
	</table>

	<form method="post" action="cible.php">
		<input type="text" name="nom">
		<textarea name="commentaire" rows="5" cols="40"></textarea>
		<br>
		<input type="submit" value="Valider" />
	</form>
<?php include './footer.php'; ?>
