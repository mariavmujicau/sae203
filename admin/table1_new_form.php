<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="table1_gestion.php">retour au tableau de bord</a> 	
	<hr>
<h1>gestion de nos articles</h1>
<p>ajouter ici un article</p>
<hr>
<form action="table1_new_valide.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="num"><br>
    Nom:<input type="text" name="nom"><br>
    Prix:<input type="text" name="prix"><br>
    Type:<input type="text" name="type"><br>
    Description:<input type="text" name="desc"><br>
    Photo : <input type="file" name="photo" required/ ><br/>
    Marque: <input type="text" name="marque"><br>
    Designer:<select name="designernum">
    <?php
		$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'Jm123312____');
		$mabd->query('SET NAMES utf8;');
		$req = "SELECT * FROM designers_luxe ";
		$resultat = $mabd->query($req);

foreach ($resultat as $value) {
    echo '<option value="'.$value['designer_id'].'"> '.$value['designer_nom'].'</option>';
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