<?php

try {
	
	$dbh = new PDO(
			"mysql:host=localhost; dbname=find_code; charset=utf8", "root", "", [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
			]);

} catch (Throwable $e) {
	var_dump($e);
}

// transaction

try{

$dbh->beginTransaction();
	
$sql= "INSERT INTO `link` (`href`) VALUES ('oooooooooooooooooooooooooooooooooooooo');";
$sth= $dbh->exec($sql);
$id = $dbh->lastInsertId();
$sql= "INSERT INTO `spa_link` (`spa_id`, `link_id`) VALUES ('99', " . $id . "');";
$dbh->exec($sql);

// valider la transaction 
$dbh->commit();

} catch (Throwable $e) {
	
// Rétablir les valeurs initiales
	$dbh->rollBack();
	
	echo "<h1>problème:</h1> la première requête est éxécutée avec succès<br>";
	echo "alors que la seconde echoue<br>";
	echo "elles font partie d'une d'une même procédure que l'on voudrait annuler<br>";
	
	echo "En mode transaction le rollBack() sert à ça !!!<br>";
	
	var_dump($e->getMessage());
}


