<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="table1_gestion.php">retour au tableau de bord</a> 	
	<hr>
<h1>gestion de nos articles</h1>
<p>modification d'un article</p>
<hr>

 <?php
$num = $_GET['num'];
$mabd =new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'Jm123312____');
$mabd->query('SET NAMES utf8;');
$req = "SELECT * FROM  articles_luxe WHERE article_id=".$num;
$resultat = $mabd->query($req);
$article = $resultat->fetch();
echo $article['article_nom'];
echo $article['article_prix'];
?>
<hr>
<form action="table1_update_valide.php" method="POST" enctype="multipart/form-data">

    <input type="hidden" name="num" value="<?php echo $article['article_id']; ?>">
    titre:<input type="text" name="nom" value="<?php echo $article['article_nom']?>"><br>
    prix:<input type="text" name="prix" value="<?php echo $article['article_prix']?>"><br>
    type:<input type="text" name="type" value="<?php echo $article['article_type']?>"><br>
    Description:<input type="text" name="desc" value="<?php echo $article['article_desc']?>"><br>
    Photo : <input type="file" name="photo"><br/><?php echo $article['article_photo']?>"><br>
    Designer:
    <select name="numdesigner">
    	<?php
            $mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'Jm123312____');
            $mabd->query('SET NAMES utf8;');
            $req = "SELECT * FROM designers_luxe ";
            $resultat = $mabd->query($req);
    
    foreach ($resultat as $value) {
        $selection="";
        if($article['_designer_id'] == $value['designer_id']) $selection="selected";          
        echo '<option '.$selection . ' value="' .  $value['designer_id'] . '"> ' .  $value['designer_nom'] . '</option>';
        }
    ?>
    </select>
    
    <br>   
    <input type="submit" name="">
</form>

</body>
</html>