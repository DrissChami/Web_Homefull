<?php 

include("conn.php");

$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


       $sql='SELECT * FROM markers';
        $req = $bdd->query($sql);
        require("home.js");
    
    $filename = "points.xml";

    if(file_exists($filename)){
        unlink($filename);
    }
    else{ 
        echo "le fichier existe pas";
    }
    
    $xml = '<?xml version="1.0" encoding="utf-8" standalone="yes">';
    $xml .= '<markers>';

    while($point = $req->fetch(PDO::FETCH_OBJ)){
        
        $xml .="<marker id =>'" .$point->id." ' lng= " .$point->lng. " ' lat= " .$point->lat." ' />";
        
    }

    $xml .= '</markers>';
    file_put_contents("$filename", $xml);
    header("location:home.php");
?>
