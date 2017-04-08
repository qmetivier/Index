<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="php" type="text/php" href="views/index.php">
	<title>Index_Formule</title>
</head>
<body>

		<!--/*Rentrer de données avec les "inputs"*/-->
	<form method="post" action=""> <!--/*Permet de faire de ce qu'il y a dans la form un formulaire*/-->

	<?php require 'views/index.php' ?>

		<div id="Type_formulaire">
			<h1 style="text-align:center;">Type_formulaire</h1>


			<div class="element"> <!--Input classique = zone de saisie-->

				<label for="e0" >Pseudo : </label>  <!--/*L'élément "For" permet de creer un lien entre des éléments*/ /*Si on clique sur Prénom on rentre dans la zone de saisie de l'input possédant l'{Id} porté par le {For} */-->
				<span>
					<input id="e0" type="text" size="25" name="Pseudo" value="<?php NameSave('Pseudo') ?>"> <!--/*Le code PHP permet de linker a la fonction {NameSave} avec comme parametre d'entrer la valeur de l'élément que l'on recherche */-->
				</span>

			</div>
				<br>
			<div class="element">
				
				<label for="e2" >Mot de passe : </label>
				<span><input id="e2" type="password" size="25" name="Motdepasse"></span> <!--/*Le type "Password" permet d'afficher des etoiles */-->

			</div>
				<br>
			<div class="element">
				
				a

			</div>
				<br>
			<input id="Send" type="submit" value="Envoyer le formulaire"> <!--/*Permet d'envoyer le formulaire*/-->
		</div>
	</form>
</body>
</html>