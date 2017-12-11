<?php

session_start();


if (@$_GET["destroy"]) {
	session_destroy();
	header ("Location: http://localhost/formation-php/public/database.php");
	echo "session detruite";
	exit;
}

?>

<a href="./database.php?destroy=true">Fermer la session</a>

<?php

$client = md5(
  @$_SERVER["HTTP_USER_AGENT"] 
. @$_SERVER["HTTP_CLIENT_IP"]
);

// Se connecter à une base de donnée
// PDO c'est quoi?
// une classe pour manipuler des drivers de base de donnée



if (@$_SESSION["token"]){
	
	if (@$_SESSION["client"] !==$client) {
	echo "Vous me prenez pour une banane";
	exit;
	}
	
	echo "Vous êtes déjà authentifié";
	exit;
}


// try {

$user = "root";
$pswd = "";

$host = "mysql:host=localhost; dbname=find_code; charset=utf8";

$dsn = "mysql:host=localhost; dbname=find_code; charset=utf8";

try {
	
	$dbh = new PDO($dsn, $user, $pswd, [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
	$dbh->setAttribute(pdo:: ATTR_ERRMODE, pdo::ERRMODE_EXCEPTION);
} catch (Throwable $e) {
		var_dump($e);
}

?>

<form action="" method="post">
<input name="name" placeholder="name" />
<input name="pswd" placeholder="pswd"/>
<input type="submit"/>
</form>

<?php


$inputName = filter_input(INPUT_POST, "name");
$inputPswd = filter_input(INPUT_POST, "pswd");

if ($inputName && $inputPswd) {

	$sql = "SELECT `user_id` FROM `user` "
		. "WHERE `user_name` = :userName "
		. "AND `user_pswd` = :userPswd;";
			
		
	$sth = $dbh->prepare ($sql);
	$sth->bindValue(":userName", $inputName);
	$sth->bindValue(":userPswd", $inputPswd);
	$sth->execute();
	
	$results = $sth->fetchAll(pdo::FETCH_ASSOC);
	
	if (array_key_exists(0, $results)){
		$_SESSION["token"] = "abc";
		$_SESSION["client"] = $client;
	}
// 	var_dump($results);
	
}

// 	$sth = $dbh->query ($sql);
// 	$results = $sth->fetchAll(pdo::FETCH_ASSOC);

	
// }

// // Extraire des donnees;

// $sql = "SELECT`user_id` FROM `user` WHERE `user_name` = '" . $input . "'";
// $sth = $dbh->query($sql);



// $sql = "CREATE TABLE `user` (
// 	`user_id` int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
//  	`user_name` char(255) NOT NULL UNIQUE KEY,
//  	`user_pwsd` char(255) NOT NULL
// ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

//Par defaut PDO est en mode erreur et non pas exception.

// if (!$dbh->query ($sql)) {
	
// 	var_dump($dbh->errorCode());
// 	var_dump($dbh->errorInfo());
	
	 
// } else {	
// 	echo "pas d'erreur";
// }