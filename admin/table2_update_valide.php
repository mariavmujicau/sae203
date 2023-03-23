<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>vous venez de modifier un designer</p>


<?php
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$datenaissance=$_POST['datenaissance'];
$nationalite=$_POST['nationalite'];
$num=$_POST['num'];

$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'Jm123312____');
$mabd->query('SET NAMES utf8;');

$req = 'UPDATE designers_luxe SET designer_nom="'. $nom . '", designer_prenom="' . $prenom . '", designer_date_naissance=' 
. $datenaissance.', designer_nationalite="'.$nationalite.'" 
        WHERE designer_id=' . $num;

//echo 'juste pour le debug: '. $req;

// Décommenter une fois la simulation fait
$mabd->query($req);

?>
    

</body>
</html>
