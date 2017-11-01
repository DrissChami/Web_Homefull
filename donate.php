<!DOCTYPE HTML>

<html>

<head>
    <meta charset="utf-8">
    <title>Donate</title>
    <link rel="stylesheet" href="Donate.css" type="text/css">
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

    <div id="sentence">
        <h3>Please fill in the form to donate</h3>
    </div>

    <div class="form">
        <form action="insert.php" method="post">
            <table>
                <tr>
                    <td>Name</td>
                    <td>:</td>
                    <td><input type="text" name="name" required="required"></td>

                </tr>

                <tr>
                    <td>Address</td>
                    <td>:</td>
                    <td><textarea name="address" required="required"></textarea></td>
                </tr>

                <tr>
                    <td>Mail address</td>
                    <td>:</td>
                    <td><input type="email" name="email_address" required="required"></td>

                </tr>

                <tr>
                    <td>Amount</td>
                    <td>:</td>
                    <td><input type="text" name="amount" required="required"></td>

                </tr>

                <tr>

                    <td><input type="submit" name="Submit"></td>

                </tr>
            </table>

        </form>
    </div>
</body>
