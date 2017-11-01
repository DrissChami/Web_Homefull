<?php

include("conn.php");


$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['lat'])) {
    $lat = $_POST['lat'];
}

if (isset($_POST['lng'])) { 
    $lng = $_POST['lng'];
}

$rep = $bdd->prepare('INSERT INTO markers(`lat`, `lng`) VALUES(:lat, :lng)');

		$rep->execute(array(
		'lat' => $lat,
		'lng' => $lng,
));
  echo $lat;



?>


    <script text="text/javascript">
        alert("1 record added in 'bdd' database!");

        window.location.replace("home.php");

    </script>
