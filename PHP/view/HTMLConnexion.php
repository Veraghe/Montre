<!-- Affichage du formulaire qui permet la saisie -->
<?php
session_destroy();
?>
<div class="formulaire">
<form method="post" action="index.php?action=FormConnexion">

	<fieldset>
		<legend>Connexion</legend>
		<div class="colonne">
			<div> <label for="mail">Adresse mail :</label>
				<input name="mail" type="text" id="mail" />
			</div>
			<div> <label for="password">Mot de Passe :</label>
				<input type="password" name="password" id="password" />
			</div>
		</div>
	</fieldset>
	<div class="centrer">
		<input class="bouton centrer" type="submit" value="Connexion" />
	</div>
	<a href="index.php?action=UserForm&m=ajout">Pas encore inscrit ?</a>
</form>
</div>