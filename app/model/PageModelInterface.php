<?php 

namespace FindCode\Model;

interface PageModelInterface
{
	/**
	 * 
	 * @param unknown $key
	 */
	
	public function getLink($key);
	
	/**
	 * 
	 * @param string $src
	 * @param string $type
	 * @param unknown $key
	 */
	public function getScript(int $key);
	
	/**
	 * 
	 * @param string $name
	 */

}