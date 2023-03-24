<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>vous venez de modifier un album</p>


<?php
$num=$_POST['num'];
$nom=$_POST['nom'];
$prix=$_POST['prix'];
$type=$_POST['type'];
$desc=$_POST['desc'];
$numdesigner=$_POST['numdesigner'];

$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'Jm123312____');
$mabd->query('SET NAMES utf8;');

$imageName=$_FILES["photo"]["name"];
if($imageName!=""){

			//vérification du format de l'image téléchargée
			$imageType=$_FILES["photo"]["type"];
	        if ( ($imageType != "image/png") &&
	            ($imageType != "image/jpg") &&
				($imageType != "image/webp") &&
	            ($imageType != "image/jpeg") ) {
	                echo '<p>Désolé, le type d\'image n\'est pas reconnu !';
	                echo 'Seuls les formats PNG et JPEG sont autorisés.</p>'."\n";
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
    


$req = 'UPDATE articles_luxe SET article_nom="'. $nom . '", article_prix='. $prix .', article_type="' 
.$type.'", article_desc="'.$desc.'" , article_photo="'.$nouvelleImage.'", _designer_id='.$numdesigner.'
        WHERE article_id='. $num.'';
}
else{
	$req = 'UPDATE articles_luxe SET article_nom="'. $nom . '", article_prix='. $prix .', article_type="' 
	.$type.'", article_desc="'.$desc.'", _designer_id='.$numdesigner.'
			WHERE article_id='. $num.'';
}
//echo 'juste pour le debug: '. $req;

// Décommenter une fois la simulation fait
$mabd->query($req);

?>
    

</body>
</html>
