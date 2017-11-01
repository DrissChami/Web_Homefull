<?php

include("conn.php");

$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$gender = $_POST['gender'];
$color_top = $_POST['color_top'];
$color_bottom = $_POST['color_bottom'];
$tall = $_POST['tall'];
$build = $_POST['build'];


$reponse = $bdd->prepare('INSERT INTO information(`gender`, `color_top`, `color_bottom`, `tall`, `build`) VALUES(:gender, :color_top, :color_bottom, :tall, :build)');

$reponse->execute(array(
		'gender' => $gender,
		'color_top' => $color_top,
		'color_bottom' => $color_bottom,
		'tall' => $tall,
        'build' => $build,
		));



?>
    <script text="text/javascript">
        alert("1 record added in 'bdd' database, table 'information !");

        window.location.replace("home.php");

    </script>
