<?php

namespace FindCode\Test\View;

use FindCode\View\PageViewInterface;
use Formation\MVC\AbstractSubject;
use Formation\MVC\SubjectInterface;



abstract class PageViewInterfaceTest extends \PHPUnit\Framework\TestCase
{
	
	abstract public function getViewInterface(): PageViewInterface;
	

	
	
	public function testInstanceofViewInterface ()
	{
		
		$this->assertTrue(
				$this->getViewinterface() instanceof PageViewInterface
				);
		
	}
	
	public function testMethods()
	{
		$mock = $this->getViewInterface();
		$this->assertTrue(
				method_exists($mock, "render")
				&& method_exists($mock, "update")
				&& method_exists($mock, "layout")
				);
	}
	
	/**
	 * testRenderHello
	 */
	public function testRenderHello ()
		{
			$mock = $this-> getViewInterface();
			$mock -> setLayout ("../test/View/Hellotemplate.php");
			$mock -> update(new DummyTest);
			$this->assertTrue(
		"hello" === $mock->render()
				);
	}
	
	public function testRenderVoid()
	{

		$mock = $this-> getViewInterface();
		$this->assertTrue(
				"" === $mock->render()
				);
		
	}
	
	
	/**
	 * @expectedException RunTimeException 
	 */
	public function testRunTimeException()
	{
	
		$mock = $this-> getViewInterface();
		$mock->setLayout("Foo");
		$subject = (new \ReflectionClass(DummyTest::class))->newInstanceArgs([]);
		$mock->update($subject);
		
	}
				
}	



class Dummytest extends AbstractSubject implements SubjectInterface
{	
	public $foo = "foo";
	public function __construct()
	{
		parent::__construct();
	}		
}


	
	
	
	
	

	
	

