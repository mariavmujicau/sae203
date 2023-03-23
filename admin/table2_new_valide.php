<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="table2_gestion.php">retour au tableau de bord</a> 	
	<hr>
<h1>gestion de nos designers</h1>
<h2>vous venez d'ajouter un designer</h2>
<hr>
<?php

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$datenaissance=$_POST['datenaissance'];
$nationalite=$_POST['nationalite'];




$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'Jm123312____');
$mabd->query('SET NAMES utf8;');

$req = 'INSERT INTO designers_luxe(designer_nom,designer_prenom,designer_date_naissance,designer_nationalite)
 VALUES("'.$nom.'", "'.$prenom.'",'.$datenaissance.', "'.$nationalite.'")';
//echo $req;
$resultat = $mabd->query($req);


?>
</tbody>
</table>
</body>
</html>