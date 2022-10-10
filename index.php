<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
   <?php

     $cssFile = "style.css";
     echo "<link rel='stylesheet' href='" . $cssFile . "'>";

   ?>
    <title>Ajout Produit</title>
  </head>
  <body>
  <div id="container">
    <h1>Ajouter un produit</h1>
    
    <form action="traitement.php" method="post">
      <p>
        <label>
          Nom du produit :
            <input type="text" name="name">
        </label>
      </p>
      <p>
        <label>
            Prix du produit :
            <input type="number" step="any" name="price">
        </label>
      </p>
      <p>
        <label>
          Quantité désirée :
            <input type="number" name="qtt" value="1">
        </label>
      </p>
      <p>
        <input type="submit" name="submit" value="Ajouter le produit">
      </p>
      <a href="/appli/recap.php" target=_blank>Recap</a>
    </form> 
  </div>

    
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> -->
  </body>
</html>