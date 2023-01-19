<?php
    function akcio(){
        $con = Connect();
        $sql = "SELECT * FROM pizzak WHERE akcios=1";
        $result = mysqli_query($con,$sql);
        return $result;
        mysqli_close($con);
    }
    function adatlap(){
        $con = Connect();
        $id = $_GET["id"];
        $sql = "SELECT * FROM pizzak WHERE ID=".$id;
        $result = mysqli_query($con,$sql);
        return $result;
        mysqli_close($con);
    }
    function rnd_adatlap(){
        $con = Connect();
        $sql = "SELECT * FROM pizzak ORDER BY RAND() LIMIT 1";
        $result = mysqli_query($con,$sql);
        return $result;
        mysqli_close($con);
    }
    function all(){
        $con = Connect();
        $sql = "SELECT * FROM pizzak";
        $result = mysqli_query($con,$sql);
        return $result;
        mysqli_close($con);
    }
    function Score(){
        $con = Connect();
        if(isset($_POST["submit"])){
            $text = $_POST["text"];
            $sql = "SELECT * FROM pizzak WHERE nev LIKE '%".$text."%' OR feltet LIKE '%".$text."%'";
            $result = mysqli_query($con,$sql);
            return $result;
        }
        mysqli_close($con);
    }
    function add(){
        $con = Connect();
        $nev = $_POST["nev"];
        $ar = $_POST["ar"];
        $feltet = $_POST["feltet"];
        $sql = "INSERT INTO `pizzak`(`nev`, `ar`, `feltet`) 
        VALUES ('$nev', '$ar', '$feltet')";
        mysqli_query($con,$sql);
        mysqli_close($con);
    }
?>