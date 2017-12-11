<?php

namespace FindCode\Controller\Admin;

use FindCode\Model\PageModel;
use FindCode\View\PageView;
use FindCode\Controller\PageController as ParentController;

class PageController extends PageController
{
	/**
	 * Construct PageController
	 * 
	 * @param unknown $model
	 * @param unknown $view
	 */
	public function __construct(
		PageModel $model, 
		PageView $view)
	{
		parent::__construct($model, $view);
		$this->view->setLayout("template/adminpagehtml.inc.php");				
	}

	/**
	 * Execute controller
	 */
	public function execute()
	{
		return parent::execute();
		
	}
	
}
