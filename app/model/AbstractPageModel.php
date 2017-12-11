<?php

namespace FindCode\Model;

use Formation\MVC\AbstractSubject;

abstract class AbstractPageModel extends AbstractSubject 

{
	protected
	
	$title,$link, $script;
	
	/**
	 * Construct AbstractPageModel
	 */
	protected function __construct()
	{
	
			$this->title = "";
			$this->link = [];
			$this->script = [];
	}

	public function __set($name, $value)
	{
		
	}
	
	public function __get($name)
	{
		if (property_exists($this, $name)){
			return $this->{$name};
			
		}
	}
	
	public function getLink($key)
	{
		
		if (array_key_exists($key, $this->link)){
			return $this->{$key};
			
		}
		
	}
	
	public function getScript(int $key)
	{
		if (array_key_exists($key, $this->link)){
			return $this->{$key};
		}
	}
	
}

