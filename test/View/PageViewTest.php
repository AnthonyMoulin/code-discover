<?php

namespace FindCode\Test\View;

use ReflectionClass;
use FindCode\View\PageViewInterface;
use FindCode\View\PageView;

class PageViewTest extends PageViewInterfaceTest

{
	
	public function getViewInterface(): PageViewInterface
	{
		return (new ReflectionClass(PageView::class))
		 		->newInstanceArgs([]
		);
	}
	
	public function testMethods()
	{
		$mock = $this->getViewInterface();
		$this->assertTrue(
				method_exists($mock, "render")
				&& method_exists($mock, "update")
				);
	}
	
}
	
