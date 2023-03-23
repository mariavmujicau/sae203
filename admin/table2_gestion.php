<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="../index.php">retour au site</a> <br>
<a href="table2_new_form.php">Ajouter un nouveau designer</a>
<table border=1>
	<thead>
		<tr><td> </td><td>nom</td><td>prix</td><td>marque</td><td>supprimer</td><td>modifier</td></tr>
	</thead>
    </tbody>

<?php
$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'Jm123312____');
$mabd->query('SET NAMES utf8;');
$req = "SELECT * FROM designers_luxe";
$resultat = $mabd->query($req);

foreach ($resultat as $value) {
    echo '<tr>'; 
    echo '<td>'.$value['designer_nom'] . '</td>';
    echo '<td>' . $value['designer_prenom'] . '</td>';
    echo '<td>' . $value['designer_nationalite'] . '</td>';
    echo '<td>' . $value['designer_date_naissance'] . '</td>';
    echo '<td> <a href="table2_delete.php?num='.$value['designer_id'].'" > supprimer </a> </td>';
    echo '<td> <a href="table2_update_form.php?num='.$value['designer_id'].'"> modifier </a> </td>';
    echo '</tr>';
}
?>
	<tbody>
    </table>
</body>
</html>