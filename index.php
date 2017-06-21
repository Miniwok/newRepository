<html>
    <head>
        <meta charset="utf-8" />
	</head>
	<?php
	// REGEX est sensible à la casse !!! Sauf si vous ajoutez l'option "i" tel que #REGEX#i
	// Symbole OU : |
	// ^ indique le début d'une chaine de caractères
	// $ indique la fin d'une chaine de caractères
	// [a-z0-9] => Cherche n'importe quel lettre OU chiffre
	// #<h[1-6]># => Cherche si il y a une balise de type <h>
	// Ne pas oublier de mettre un antislash \ devant tout type de caractère spécial : !^$()[]{}?+*.\


	// On cherche le mot guitare dans la phrase suivante :
	echo 'Dans la phrase j\'aime jouer de la guitare, y a t\'il le mot guitare ?';
	if (preg_match("#guitare#", "J'aime jouer de la guitare."))
	{
		echo ' OUI';
	}
	else
	{
		echo ' NON';
	}
	?><br /><?php
	echo 'Dans la phrase Bonjour petit zero, la phrase debute t\'elle bien par Bonjour ?';
	if (preg_match("#^Bonjour#", "Bonjour petit zero"))
	{
		echo ' OUI';
	}
	else
	{
		echo ' NON';
	}
	?><br /><?php
	// La regex doit se terminer par une voyelle (aeiouy)
	echo 'Dans la phrase Je suis un vrai zero, la phrase finit t\'elle par une voyelle ?';
	if (preg_match("#[aeiouy]$#", "Je suis un vrai zero"))
	{
		echo ' OUI';
	}
	else
	{
		echo ' NON';
	}
	?><br /><?php
	//
	echo 'Dans la phrase Yahoooooo, la phrase doit debuter par Yaho, finir par Yaho et il peut y avoir au moins un O ?';
	if (preg_match("#^Yaho+$#", "Yahooooooo"))
	{
		echo ' OUI';
	}
	else
	{
		echo ' NON';
	}
	?><br /><?php
	
	// Symbole ? : La lettre peut être facultative : 0 ou 1 fois
	// Symbole + : La lettre est obligatoire : 1 ou plusieurs fois
	// Symbole * : O ou 1 ou plusieurs fois
	?>
	</p><a href="regex_num.php">REGEX - Contrôle du numéro de téléphone</a>
	</p><a href="regex_mail.php">REGEX - Contrôle de l'adresse mail</a>
	</p><a href="regex_parenthese.php">REGEX - Utilisation des parenthèses capturantes</a>
</html>