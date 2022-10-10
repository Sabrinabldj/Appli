<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Récapitulatif des produits</title>
</head>
<body>
    <?php
        if(!isset($_SESSION['products']) || empty($_SESSION['products'])){
            echo "<p>Aucun produit en session...</p>"; 
        } 
        else{  
            echo "<table class="table">",
                     "<thead>",
                         "<tr>",
                            "<th>#</th>",
                            "<th>Nom</th>",
                            "<th>Prix<th/>",
                            "<th>Quantité</th>",
                            "<th>Total</th>",
                         "</tr>",
                     "</thead>",
                     "<tbody>";
            $totalGeneral = 0;         
            foreach($_SESSION['products'] as $index => $product){
                echo "<tr>",
                        "<td>".$index."</td>",
                        "<td>".$product['name']."</td>",
                        "<td>".number_format($product['price'], 2, ",", "&nbsp;"). "&nbsp;€</td>",
                        "<td>".$product['qtt']."</td>",
                        "<td>".number_format($product['total'], 2, ",", "&nbsp;")."&nbsp;€</td>",
                     "</tr>"; 
                $totalGeneral+=$product['total'];      
            }   
            echo "<tr>",
                     "<td colspan=4>Total général : </td>",
                     "<td><strong>".number_format($totalGeneral, 2, ",", "&nbsp;"). "&nbsp;€</strong></td>",
                  "</tr>",   
            "</tbody>",
                 "</table>";            
        } ?>

        <!--ajout de l'icone pour supprimer tout le panier-->
        <a href= "traitement.php?action=deleteAll"><i class="fa fa-trash" aria-hidden="true"></i> Vider le panier</a>
        
</body>
</html>