<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <?php
require ('header.php');
?>
  <body>
    <!-- <h1>Recherche</h1> -->
    <form method="post" action="reponse_recherche.php">
      <div id="rechercher">
        <label for="recherche">RECHERCHER</label>
        <div id="formulaire">
        <input type="text" name="recherche" id="recherche" value=""><br/>
       
        <input type="submit" value="Envoyer" id="envoyer">
        </div>
       
      </div>
      
      
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
  <?php
require ('footer.php');
?>
</html>