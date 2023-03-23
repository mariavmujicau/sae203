<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="table2_gestion.php">retour au tableau de bord</a> 	
	<hr>
<h1>gestion de nos articles</h1>
<p>ajouter ici un article</p>
<hr>
<form action="table2_new_valide.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="num"><br>
    <label for="nom">Nom</label>
    <input type="text" name="nom"><br>

    <label for="prenom">Prénom</label>
   <input type="text" name="prenom"><br>

    <label for="datenaissance">Date de naissance</label>
    <input type="text" name="datenaissance"><br>

    <label for="nationalite">nationalité</label>
    <select name="nationalite">
    <?php
		$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'Jm123312____');
		$mabd->query('SET NAMES utf8;');
		$req = "SELECT * FROM designers_luxe ";
		$resultat = $mabd->query($req);

foreach ($resultat as $value) {
    echo '<option value="'.$value['designer_id'].'"> '.$value['designer_nationalite'].'</option>';
}
?>
</select>
   <br>
    <input type="submit" name="">
</form>

</tbody>
</table>
</body>
</html>