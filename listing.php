<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   
</head>
<?php
require ('header.php');
?>
<!-- <body>
    <div id="contenus">
        <div class="carre">
        <img src="images/chanel.jpg" alt="chanel">
        <div class="carredesc">
        <h2>Chanel classique </h2>
           <p>Coco Chanel - 1883 - Française</p>
           <p>Sac à main chanel</p>
           <p>8930€</p> 
           <p></p>
        </div>
        </div>
        <div class="carre">
        <img src="images/talonversace.webp" alt="talon versace">
        <div class="carredesc">
            <h2>Escarpins à plateformes Medusa Aevita</h2> 
           <p> Chaussures à talon</p> 
           <p> 1 190 €</p> stri
           <p>By: Donatella Versace - 1955 - Italienne  </p>
        </div>
        </div>
        <div class="carre">
        <img src="images/ladydior1.webp" alt="chanel">
        <div class="carredesc">
        <h2>Lady Dior</h2>
           <p> </p> 
        </div>
        </div>
        <div class="carre">
        <img src="images/trenchburberry.webp" alt="chanel">
        <div class="carredesc">
        <h2>Trench Burberry </h2>
           <p><br> </p> 
        </div>
        </div>
    </div> -->
    

<?php
// $designernom = $_GET['texte'];
// $designerprenom = $_GET['texte'];
// $designerdn = $_GET['texte'];
// $designernationalite = $_GET['texte'];
// $ = $_GET['texte'];
$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'Jm123312____');
$mabd->query('SET NAMES utf8;');
$req = "SELECT * FROM articles_luxe
            INNER JOIN designers_luxe 
            ON articles_luxe._designer_id = designers_luxe.designer_id";
        
$resultat = $mabd->query($req);

foreach ($resultat as $value) {
    echo '<div id="contenus">';
    echo '<div class="carre">';
    echo '<img class="images" src="images/uploads/'.$value['article_photo'].'">';
    echo '<div class="carredesc">';
    echo '<h3>'.$value['article_nom'] . '</h3>';
    echo '<p>' . $value['article_marque'] . ' </p>';
    echo '<p>' . $value['article_prix'] . '€ </p>';
     echo '<p>By: ' . $value['designer_prenom'] .' ' .$value['designer_nom'] .
     ' - ' . $value['designer_nationalite'] .
     ' - '. $value['designer_date_naissance'] . '</p>';
    echo '<p class="type">' . $value['article_type'] . ' '. $value['article_desc'].'</p>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <?php
    require ('footer.php');
    ?>
    </body>

</html>