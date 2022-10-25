<?php
    session_start();

    if(isset($_POST['submit'])){
        $name= filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
        $price= filter_input(INPUT_POST, "price", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $qtt= filter_input(INPUT_POST, "qtt", FILTER_VALIDATE_INT);

        if($name && $price && $qtt){

            $product =[
                "name" => $name,
                "price" => $price,
                "qtt" => $qtt,
                "total" => $price*$qtt
            ];

            $_SESSION['products'][] = $product;

            $_SESSION["message"] = "Produit enregistré avec succès !";
        } 

    }

    header("Location:index.php");

    //fonction pour effacer tous les produits//
    function delete_all(){
        unset($_SESSION['products']);
        print_r($_SESSION);
        }
        
        if (isset($_GET['delete'])) {
        
            delete_all();
        }    
    ?>