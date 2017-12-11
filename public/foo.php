<?php

// Create a stream
$opts = array(
		'http'=>array(
				'method'=>"GET",
				'header'=> "Cookie: PHPSESSID=k1ocr4grjl73g8qd62h10rvu07\r\n"
		)
);

$context = stream_context_create($opts);

// Open the file using the HTTP headers set above
$file = file_get_contents('http://localhost/formation-php/public/database.php',
		false,
		$context);

echo $file;
?>