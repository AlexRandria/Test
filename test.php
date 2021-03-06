<?php
// VARIABLES

// les types
//declare(strict_types=1);

// $a = 5;
// $b = "5";
// echo $b . $a;

// $array = [1,2,3];
// print_r($array);

// $array2 = [1, "Jean", 2];

// var_dump($array2);

//------------------------------------------------------------------------------------

// OPERATEURS + - * / % arithmétique,
// echo 9 % 4; // 9 = 4 * 2 + 1, return 1

// OPERATEUR LOGIQUE / comparaison ==, ===, !=, !==, <, >, <=, >=, <=>, and, or, ||, &&,
// echo 2 <=> 2; // return 0
// echo 4 <=> 2; // return 1
// echo 2 <=> 4; // return -1

// $personne = "Dupont";
// echo 'Bonjour M ' . $personne;

// $a = 1; //int 
// $b = "1"; //string
// echo $a == $b; // return 1
// echo $a === $b; // return rien

// TABLE DE BOOLE
// $a = 7;
// $b = 2;
// if($a > 2 && $b < 5) {} // && est prioritaire a 

//------------------------------------------------------------------------------------

// STRUCTURE de controle if else, boucles, switch
// $var = 1;
// switch($var){
//     case 1:
//         echo 1;
//     break;
//     case 2:
//         echo 2;
//     break;
//     default:
//         echo "autre";
// }

// TERNAIRE
// $a = 5;
// $b = 1;
// echo (($a > $b) ? "cas 1" : "cas 2") ;

//------------------------------------------------------------------------------------

// FONCTIONS en PHP
// function add(int $a, int $b): int {
//     return $a + $b;
// }
// echo add($a, $b);
// $a = 2;
// $input = array("a","b");
// $output = array_slice($input, 0, 1);
// print_r($output);
// die();
// function inc(&$toto) {
//     $toto++;
//     echo $toto;
// }

// inc($a);
// echo ' '.$a;

//------------------------------------------------------------------------------------

// les tableaux, JSON
// taleaux indexés
// $tab = ['toto','tata','titi'];
// print_r($tab);

// for ($i=0; $i < count($tab) ; $i++) { 
//     echo $tab[$i] . "\n";
// }

// TABLEAU associatif
// $tabAss = array('prenom' => 'Alex', 'nom' => 'Randria');
// var_dump($tabAss);
// echo $tabAss['prenom'];

// VARIABLES dynamiques
/* $action = "manger";
$manger = "Je mange";
echo $$action; */

// TABLEAU multidimensionnel
// $tab2D = [
//     [1,2,3],
//     [4,5,6],
//     [7,8,9],
// ];

// echo $tab2D[1][1];
// for ($i=0; $i < ; $i++) { 
//     # code...
// }

// FONCTION Tableau
// $str = "Un renard tres malin court";
// print_r(explode(' ', $str));

// VOIR DATATABLES

//------------------------------------------------------------------------------------

// JSON
// $array = array('prenom' => 'Alex', 'nom' => 'Randria');
// echo json_encode($array);

// $string = '{"prenom":"Alex","nom":"Randria"}';
// print_r(json_decode($string));

// Serialization / Deserialization
// Transformer un objet en chaînes de caractères, pour par exemple stocker en base de données
// $array = array('prenom' => 'Alex', 'nom' => 'Randria');
// $str = serialize($array);
// echo $str;

//------------------------------------------------------------------------------------

// LES DATES
// $da = date('Y-m-d H:i:s');
// $timestamp = strtotime('now');
// echo date('d-m-Y', $timestamp);

// $d = new DateTime($da, new DateTimezone('Europe/London'));
// var_dump($d->getTimezone()->getName());

//------------------------------------------------------------------------------------

// SUPERGLOBAL SESSION; GET, POST, SERVER
// Dans les autres fichiers

//------------------------------------------------------------------------------------

// FICHIERS I/O
// readfile('test.php');
// die();

// $handle = fopen('test.txt','r');
// $content = fread($handle,filesize('test.txt'));
// echo $content;

$output = `git add .`;
var_dump($output);

//------------------------------------------------------------------------------------

// Regex

//------------------------------------------------------------------------------------

// POO
// gestion des erreurs try/catch