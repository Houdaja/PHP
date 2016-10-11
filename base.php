<h2>Ecriture et affichage</h2>
<!-- O, peut ecrire de l'html ds un fichier .php-->
<?php
echo 'Bonjour';// echo est une instruction qui nous permet de faire un affichage.
echo '<br/>'; // Nous pouvons également y mettre de l'HTML.
echo 'Bienvenue !'; // si on se rend sur le code source on constate il n'y a pas de php on dis que le langage ets interprêté.
echo '<h2>Commentaires</h2>'; 
?>
<strong>Bonjour !</strong>
<!-- Nous voyons qu'il est possibled e fermer le PHP pour ré-écrire l'HTML. -->
<?php
echo 'texte'; // ceci est un commentaire sur une ligne
echo 'texte'; /*Ceci est un commentaire
 sur plusieur
  ligne */
echo '<h2>Variables : types, déclaration, Affectation <h2>';
// la déclaration d'une variable se fait avec le signe $
$a = 127; // affectation de la valeur 127 a ma variable $a.
echo gettype($a) . '<br/>'; // la fonction gettype() nous retourne le type de la variable. ici $a est un entier (integer)

$b = 1.5;
echo gettype($b) . '<br/>'; // nombre a virgule (double)

$a = 'une chaîne';
echo gettype ($a) . '<br/>'; // Chaîne de charactère (string)

$b = '127';
echo gettype($b) . '<br/>'; // Chaîne de charactère (string)

$a = true;
echo gettype ($a) . '<br/>'; // boolean 

$b = false;
echo gettype ($b) . '<br/>'; // boolean 

// Nom des variables : 
// Une variable ne peux pas commencer par un chiffre : $2a --> ERREUR mais je peux écrire une variable $a2
// Les variables sont sensibles à la casse : $AA, n'est pas la même chose que $aa.
// On ne peut pas mettre de tiret (-) dans une variables, mais je peux  mettre un underscore (_) : $ma-variable --> ERREUR, $ma_variable (ok), 
// on peux utiliser aussi $maSuperVatiableTresLongue 
// pas d'accent ds les noms des variables.


echo '<h2>La concaténation</h2>';
// c'est le faite d'assembler des éléments entre eux.

$x = "Bonjour ";
$y = "tout le monde !";
echo $x . $y . '<br/>'; // point de concaténation que l'on peut traduire "suivis de"
echo "$x $y </br>"; // La même chose sans concaténation.
echo "Hey ! " . $x . $y . "<br/>";
echo "Hey !  $x $y <br/>";
echo "</br>", "coucou","<br/>"; // la virgule et le point de concaténation sont similaires.

echo '<h2>Concaténation lors de l\'affectation</h2>';
$prenom1 = 'Bruno'; // affectation de la valeur Bruno à $prenom1;
$prenom1 = 'Claire'; // affectation de la valeur claire à $prenom1 qio vient premplaver l'ancienne valeur.
echo $prenom1 . '<br/>'; // affche claire
$prenom2 = 'Nicolas'; // affectation de la valeur nicolas a $prenom2
$prenom2 .= ' Claire'; // affectation de la valeur claire cela ajoute sans remplacer grâce a l'opérateur .=
// Equivaut à : $prenom = $prenom2 . 'Claire';
echo $prenom2 . '<br/>';

echo '<h2>Guillement et quotes</h2>';
$message = "aujoud'hui";
$message = 'aujourd\'hui';
$text = "Bonjour";
echo $text ."tout le monde ! <br/>"; // concaténation
echo "$text tout le monde ! <br/>"; //sans concaténation
echo '$text tout le monde ! <br/>'; //Dans des quotes les variables ne sont pas évaluées (interprêtées)

echo '<h2>Constantes et constantes magiques </h2>'; // Pour déclarer et affecter une constante il faut utiliser la fonction define()

// la fonction define() attend 2 arguements : 1/ le nom de la constante, et 2/ sa valeur.
define("CAPITALE", "Paris"); // par conevntion le nom d'une constante ets toujours en majuscules.
echo $text . ' ' . CAPITALE . '<br/>';




// constante magique 
echo__LINE__; // ligne
echo '</br>';
echo__FILE__; // fichier
echo__DIR__; // dossier

//_FUNCTION_// la fonction dans laquelle nous sommes
//_CLASS_// la class dans laquelle nous sommes
//_METHOD_// la fonction dans laquelle nous sommes en programmation orienté objet


echo '<h2>Exercice sur les variables</h2>';
//exercice : Afficher "bleu" - rouge - rouge"
// (avec les tirets) en mettant chaque couleur dans une variable.

$a = 'Bleu';
$b =  'Blanc';
$c = 'Rouge';
echo $a . '-' . $b . '-' . $c . '<br/>' ;

echo '<span style="color : blue;">' .$a .'</span> - <span style="background : black; color : white;">'.$b . '</span> - <span style="color :red;">' . $c .'</span><br/>';

//--------------------------------------
echo '<h2>Opérateur arithmétique</2>';
$a = 10;
$b = 2;
echo $a + $b . '<br/>'; // affiche 12
echo $a - $b . '<br/>';// affiche 8
echo $a * $b . '<br/>';// affiche 20
echo $a / $b . '<br/>';// affiche 5

// OPération d'affectation
$a = 10; $b = 2;
$a += $b; // $a = $a + $b;
echo $a . '<br/>'; // affcihe 12
$a -= $b; // affiche 10
// $a *= $b affiche 20
//$a /= $b affiche 10
//--------------------------------

echo '<h2>Structure conditionnelles et opérateurs de comparaison</h2>';
// isset et empty

$var1 = 0; // false
$var2 = '';

// empty me permet de tester si quelque chose est vide, false (ou égale à 0).
// isset va me permettre de tester si quelque chose est définie(existe).

if(empty($var1)){
echo 'oui, $var1 est empty (vide, égale à 0 ou FAlSE)';// traitement à effectuer
} 

echo '<br/>';

if(isset($var2)){
	echo '$var2 existe !';
} 

// opérateur de comparaison :
$a =10; $b = 5; $c =2;
if($a>$b){// si A est supérieur à B
	echo '$a est bien supérieur à $b <br/>';

}else { // Sinon A n'est pas supérieur à B
	echo 'Non, c\'est $b qui est supérieur à $a <br/>';
}
//---------------
if($a > $b && $b > $c){ // Si A est supérieur à B et que dans le même temps B est sup à C .
	echo 'OK pour les deux conditions <br/>';
}
elseif($a == 9 || $b > $c ){ //  Si A est égale à 9 ou alors si B est supérieur à C . 
	echo 'Ok pour au moins l\'une des deux conditions <br/>';
}else{ // NI le IF, ni le elseIF sont vérifiés
	echo 'Aucune des deux conditions';
}