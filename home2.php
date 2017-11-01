<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Homeless Website</title>
    <link rel="stylesheet" href="home_bis.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
</head>




<body onload="initMap();">

    <div id="title">
        <h1>Homefull</h1>
        <h2>Helping others has never been so easy</h2>
    </div>

    <div id="thank">
        <h1>Thank you for your contribution !</h1>
    </div>

    <p>Please describe the person to help our volunteers</p>

    <div class="form">
        <form action="information.php" method="post">

            <table>
                <tr>
                    <td>
                        <input type="radio" name="gender" value="M" required="required"> Male

                        <input type="radio" name="gender" value="F" required="required"> Female
                    </td>
                </tr>

                <tr>
                    <td>Color of clothes (top)</td>
                    <td>:</td>
                    <td><select name="color_top" required="required">

                    <option value="">Please select</option>


                    <option value="Black">Black</option>
                    <option value="White">White</option>
                    <option value="Brown">Brown</option>
                    <option value="Blue">Blue</option>     <option value="Green">Green</option>
                    <option value="Red">Red</option>
                    <option value="Yellow">Yellow</option>

                    




</select>

                    </td>
                </tr>

                <tr>
                    <td>Color of clothes (bottom)</td>
                    <td>:</td>
                    <td><select name="color_bottom" required="required">

<option value="">Please select</option>


                    <option value="Black">Black</option>
                    <option value="White">White</option>
                    <option value="Brown">Brown</option>
                    <option value="Blue">Blue</option><option value="Green">Green</option>
                    <option value="Red">Red</option>
                    <option value="Yellow">Yellow</option>



</select>

                    </td>
                </tr>

                <tr>
                    <td>Tall (approximatively in cm)</td>
                    <td>:</td>
                    <td><input type="tel" name="tall" required="required"></td>

                </tr>

                <tr>
                    <td>Build</td>
                    <td>:</td>
                    <td><select name="build" required="required">

<option value="">Please select</option>


                    <option value="Skinny">Skinny</option>
                    <option value="Average">Average</option>
                    <option value="Strong">Strong</option>
                    <option value="Fat">Fat</option>



</select>
                    </td>

                </tr>




            </table>
            <input type="submit" value="Submit">

        </form>



    </div>

</body>

</html>
