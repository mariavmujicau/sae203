<!DOCTYPE html>
<html>
<head><title></title></head>
<body>
<a href="table2_gestion.php">retour au tableau de bord</a> 	
<hr> <h1>gestion de nos designers</h1> <hr>

<?php
// recupérer dans l'url l'id de l'album à supprimer
$designer_id=$_GET['num'];

$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'Jm123312____');
$mabd->query('SET NAMES utf8;');

// tapez ici la requete de suppression de l'album dont l'id est passé dans l'url
$req = 'DELETE FROM designers_luxe
        WHERE designer_id='.$designer_id; 

// cette ligne sert juste pour le debug. à supprimer quand tout marche correctement  
//echo $req;
 
$resultat = $mabd->query($req);

echo '<h2>vous venez de supprimer le designer numéro '.$designer_id.'</h2>';
?>

</body>
</html>