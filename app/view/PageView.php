<?php

namespace FindCode\View;

use Formation\MVC\ObserverInterface;
use Formation\MVC\SubjectInterface;
use FindCode\View\PageViewInterface;

class PageView implements ObserverInterface, PageViewInterface
{
	
	/**
	 * 
	 * @var unknown
	 */
	private $output;
	
	private $layout;
	
	/**
	 * Construct PageView
	 */
	
	public function __construct()
	{
		$this->layout = "template/pagehtml.inc.php";
		$this->output = "";
	}
	
	/**
	 * Set layout
	 * 
	 * @param string $layout
	 */
	
	public function setLayout (string $layout)
	{
		
		$this->layout =$layout;
	}
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \Formation\MVC\ObserverInterface::update()
	 */
	
	public function update(SubjectInterface $subject)
	{
		
		$file=__DIR__ . "/../" . $this->layout;
		if (file_exists($file)) {
			ob_start();
			include $file;
			$this->output = ob_get_contents();
			ob_end_clean();;
		} else {
			throw new \RuntimeException("Template not found");
		}
		
		
	}
	
	public function render()
	{
		return $this->output;
	}
	
}