<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récapitulatif des produits</title>
</head>
<body>
    <?php
        if(!isset($_SESSION['product']) || empty($_SESSION['products'])){
            echo "<p>Aucun produit en session...</p>";
        } 
        else{ 
            echo "<table>",
                     "<thead>",
                         "<tr>",
                            "<th>#</th>",
                            "<th>Nom</th>",
                            "<th>Prix</>",,
                            "<th>Quantité</th>",
                            "<th>Total</th>",
                         "</tr>",
                     "</thead>",
                     "<tbody>";
            foreach($_SESSION['products'] as $index => $product){

            }   
            echo "</tbody",
                 "</table>";            
        }
    ?>
</body>
</html>