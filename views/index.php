<?php 

//var_dump($_POST);
/*permet de voir les données sauvegarder dans les "names" 
--> sorte dans un tableau array qui s'affiche dans la page web*/

function NameSave($element) /*Creation d'une fonction qui retourne la valeur de l'element en entrer se trouvant dans le tableau {$_POST}*/
{
	if (isset($_POST[$element])){
		echo $_POST[$element];
	}
}





?>
