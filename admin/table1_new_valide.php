<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="table1_gestion.php">retour au tableau de bord</a> 	
	<hr>
<h1>gestion de nos articles</h1>
<h2>vous venez d'ajouter un article</h2>
<hr>
<?php

$nom=$_POST['nom'];
$prix=$_POST['prix'];
$type=$_POST['type'];
$desc=$_POST['desc'];
$marque=$_POST['marque'];
$designernum=$_POST['designernum'];
//var_dump($_FILES['photo']);

$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'Jm123312____');
$mabd->query('SET NAMES utf8;');

//vérification du format de l'image téléchargée
$imageType=$_FILES["photo"]["type"];
if ( ($imageType != "image/png") &&
    ($imageType != "image/webp") &&
	($imageType != "image/jpg") &&
	($imageType != "image/jpeg") ) {
		echo '<p>Désolé, le type d\'image n\'est pas reconnu !';
		echo 'Seuls les formats PNG, webp et JPG sont autorisés.</p>'."\n";
		die();
}

//creation d'un nouveau nom pour cette image téléchargée
// pour éviter d'avoir 2 fichiers avec le même nom
$nouvelleImage = date("Y_m_d_H_i_s")."---".$_FILES["photo"]["name"];


// dépot du fichier téléchargé dans le dossier /var/www/sae203/images/uploads
if(is_uploaded_file($_FILES["photo"]["tmp_name"])) {
	if(!move_uploaded_file($_FILES["photo"]["tmp_name"], 
	"../images/uploads/".$nouvelleImage)) {
		echo '<p>Problème avec la sauvegarde de l\'image, désolé...</p>'."\n";
		die();
	}
} else {
	echo '<p>Problème : image non chargée...</p>'."\n";
	die();
}

//fin du traitement (avant la requete)

$req = 'INSERT INTO articles_luxe(article_nom,article_prix,article_type,article_desc,article_marque,article_photo,_designer_id)
 VALUES("'.$nom.'", "'.$prix.'", "'.$type.'", "'.$desc.'" , "'.$marque.'","'.$nouvelleImage.'",'.$designernum.')';
//echo $req;
$resultat = $mabd->query($req);


?>
</tbody>
</table>
</body>
</html>