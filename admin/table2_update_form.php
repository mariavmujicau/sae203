<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="table2_gestion.php">retour au tableau de bord</a> 	
	<hr>
<h1>gestion de nos designers</h1>
<p>modification d'un designer</p>
<hr>

 <?php
$num = $_GET['num'];
$mabd =new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'Jm123312____');
$mabd->query('SET NAMES utf8;');
$req = "SELECT * FROM  designers_luxe WHERE designer_id=".$num;
$resultat = $mabd->query($req);
$designer = $resultat->fetch();
echo $designer['designer_nom'];

?>
<hr>
<form  method="POST" action="table2_update_valide.php" enctype="multipart/form-data">

    <input type="hidden" name="num" value="<?php echo $designer['designer_id']; ?>">

    <label for="nom">Nom:</label>
    <input type="text" name="nom" value="<?php echo $designer['designer_nom']?>"><br>

    <label for="prenom">Prénom</label>
    <input type="text" name="prenom" value="<?php echo $designer['designer_prenom']?>"><br>

    <label for="datenaissance">Date de naissance</label>
    <input type="text" name="datenaissance" value="<?php echo $designer['designer_date_naissance']?>"><br>

    <label for="nationalite">nationalité</label>
    <select name="nationalite">
    	<?php
            $mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'Jm123312____');
            $mabd->query('SET NAMES utf8;');
            $req = "SELECT * FROM designers_luxe ";
            $resultat = $mabd->query($req);
    
    foreach ($resultat as $value) {
        $selection="";
        if($designer['designer_id'] == $value['designer_id']) $selection="selected";          
        echo '<option '.$selection . ' value="' .  $value['designer_id'] . '"> ' .  $value['designer_nationalite'] . '</option>';
        }
    ?>
    </select>
    
    <br>   
    <input type="submit" name="">
</form>

</body>
</html>