<?php 

require __DIR__ . "/models/User.php";
require __DIR__ . "/models/PremiumUser.php";

$bruno = new User("Bruno", "Canini");
$bruno->setAge(29);
$bruno->setDiscount();

var_dump($bruno);

$marika = new PremiumUser("Marika", "Di Girolamo", 32, "silver");
$marika->setAge(33);
$marika->setDiscount();
$marika->setMembership("gold");

var_dump($marika);

$utenti = [ $bruno, $marika ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ereditarietà</title>
</head>
<body>

	<?php foreach($utenti as $utente){ ?>
		<h2>Nome/Cognome: <?= $utente->getFullName(); ?><h2>
		<h3>Età: <?= $utente->getAge(); ?><h3>
		<h3>Sconto: <?= $utente->getDiscount(); ?><h3>
	<?php } ?>
	
</body>
</html>