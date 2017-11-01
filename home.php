<!DOCTYPE html>


<html>

<head>
    <meta charset="utf-8">
    <title>Homeless Website</title>
    <link rel="stylesheet" href="home.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
</head>

<body onload="initMap();">

    <div id="title">
        <h1>Homefull</h1>
        <h2>Helping others has never been so easy</h2>
    </div>

    <div class="menu">
        <ul>
            <li><a href="http://localhost/Project/home.php">Home/Map</a></li>
            <li><a href="http://localhost/Project/who_we_are.php">Who we are ?</a></li>
            <li><a href="http://localhost/Project/donate.php">Donate</a></li>
            <li><a href="http://localhost/Project/collects.php">Collects</a></li>
            <li><a href="http://localhost/Project/emergency_employment.php">Employment</a></li>
        </ul>
    </div>

    <div id="description">
        <p class="first">Localize where you have seen a homeless</p>
        <p class="second">Click once to localize, double click to remove markers</p>
    </div>

    <div id="floating-panel">
        <input onclick="window.location.href='home2.php'" type=button value="Submit">


    </div>


    <div id="map"></div>



    <script type="text/javascript" src="http://localhost/Project/home.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD4g5Fmk-xuyD-JQdGCZ1XaORa2vIL5N-w&callback=initMap"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>

</html>
