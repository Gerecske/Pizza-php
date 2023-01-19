<?php
    $content = "includes/akcios.php";

    if(isset($_GET["p"])){
        switch($_GET["p"]){
            case "adatlap":
                $content = "includes/adatlap.php";
                break;
            case "pizza":
                $content = "includes/pizza.php";
                break;
            case "rnd":
                $content = "includes/rnd.php";
                break;
            case "score":
                $content = "includes/score.php";
                break;
            case "edit":
                $content = "includes/edit.php";
                break;
            case "new":
                $content = "includes/new.php";
                break;
        }
    }
?>