<?php

use FindCode\Controller\PageController;
use FindCode\View\PageView;
use FindCode\Model\PageModel;

require"../vendor/autoload.php";

try{
	
	if(filter_input(INPUT_GET, "admin")) {
		
		$controller = new findcode\Controller\Admin\PageController(
				new PageModel(),
				new PageView
				);
		
// 		var_dump($controller);
// 		exit;
		
	} else {
		
		$controller = new FindCode\Controller\PageController(
		new PageModel,
		new PageView
		);
	}

echo $controller->execute();

} catch (InvalidArgumentException $e) {

	header("HTTP/1.1 403 Forbidden");
	die("You shoot me down");
	
}
