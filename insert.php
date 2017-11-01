<?php

include("conn.php");

$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$name = $_POST['name'];
$address = $_POST['address'];
$mail = $_POST['email_address'];
$amount = $_POST['amount'];

$reponse = $bdd->prepare('INSERT INTO form(`name`, `address`, `mail`, `amount`) VALUES(:name, :address, :mail, :amount)');

		$reponse->execute(array(
		'name' => $name,
		'address' => $address,
		'mail' => $mail,
		'amount' => $amount
		));



?>


    <script text="text/javascript">
        alert("1 record added in 'bdd' database, in 'form' table!");

        window.location.replace("donate.php");

    </script>
