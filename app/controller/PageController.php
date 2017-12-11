<?php

namespace FindCode\Controller;

use FindCode\Model\PageModel;
use FindCode\View\PageView;
use InvalidArgumentException;
use Throwable;

class PageController
{
	protected
	/**
	 * @var string http method to lower
	 */
	$action,
	/**
	 * @var SubjectInterface model
	 */
	$model,
	/**
	 * @var ObserverInterface view
	 */
	$view;
	
	public function __construct(
			PageModel $model, 
			PageView $view)
	{
		$this->model = $model;
		$this->view = $view;
		$this->model->register($this->view);
		$this->action = strtolower(filter_input(
			INPUT_SERVER,
			"REQUEST_METHOD"));
		
			if ("get" !==$this->action) {
				throw new InvalidArgumentException("Allow only get method");
			}
			
	}
	
	public function execute()
	{
		try {
		if (method_exists($this->model, $this->action))	{
			$this->model->{$this->action}();
			return $this->view->render();
		} else {
			header("HTTP/1.1 405 Foooo");

		}

		} catch (\Throwable $e) {
			header("HTTP/1.1 500 Internal Server Error");
			
		}
	}
}
