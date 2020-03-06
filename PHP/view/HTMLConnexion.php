<!-- Affichage du formulaire qui permet la saisie -->
<?php
session_destroy();
?>
<form method="post" action="index.php?action=connect">

	<fieldset>
		<legend>Connexion</legend>
		<div class="colonne">
			<div> <label for="mailCustomer">Adresse mail :</label>
				<input name="mailCustomer" type="text" id="mailCustomer" />
			</div>
			<div> <label for="passwordCustomer">Mot de Passe :</label>
				<input type="passwordCustomer" name="passwordCustomer" id="passwordCustomer" />
			</div>
		</div>
	</fieldset>
	<div class="centrer">
		<input class="bouton centrer" type="submit" value="Connexion" />
	</div>
</form>
<a href="index.php?action=nouveauUser">Pas encore inscrit ?</a>